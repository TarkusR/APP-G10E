<link rel="stylesheet" href="style/style.css">
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<?php
session_start();


define('DB_HOST', 'herogu.garageisep.com');
define('DB_USERNAME', 'mX9Rm4LPla_infinite_g');
define('DB_PASSWORD', 'nWWkuPe1p5xajcco');
define('DB_NAME', 'GpyQOrqTrS_infinite_g');

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
    die("Connection failed: " . $mysqli->error);
}

$query = sprintf('SELECT question,reponse1,reponse2,reponse3,reponse4 FROM question');

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}


?>
<script type="text/javascript">
    var data = <?php echo json_encode($data); ?>;
    var question = [];
    var reponse = [];
    for(var i in data) {
        question.push(data[i].question);
        reponse.push(data[i].reponse1);
        reponse.push(data[i].reponse2);
        reponse.push(data[i].reponse3);
        reponse.push(data[i].reponse4);
    }
    console.log(question);
    console.log(reponse);
    var all_questions = [


        { question_string:question[0],
            choices: {
                correct: reponse[0],
                wrong: [reponse[1], reponse[2], reponse[3]]
            }
        }, {
            question_string: question[1],
            choices: {
                correct: reponse[4],
                wrong: [reponse[5], reponse[6], reponse[7]]
            }
        },{
            question_string: question[2],
            choices: {
                correct: reponse[8],
                wrong: [reponse[9], reponse[10], reponse[11]]
            }
        }, {
            question_string: question[3],
            choices: {
                correct: reponse[12],
                wrong: [reponse[13], reponse[14], reponse[15]]
            }
        },{
            question_string: question[4],
            choices: {
                correct: reponse[16],
                wrong: [reponse[17], reponse[18], reponse[19]]
            }
        },{
            question_string: question[5],
            choices: {
                correct: reponse[20],
                wrong: [reponse[21], reponse[22], reponse[23]]
            }
        },{
            question_string: question[6],
            choices: {
                correct: reponse[24],
                wrong: [reponse[25], reponse[26], reponse[27]]
            }
        },{
            question_string: question[7],
            choices: {
                correct: reponse[28],
                wrong: [reponse[29], reponse[30], reponse[31]]
            }
        },{
            question_string: question[8],
            choices: {
                correct: reponse[32],
                wrong: [reponse[33], reponse[34], reponse[35]]
            }
        },{
            question_string: question[9],
            choices: {
                correct: reponse[36],
                wrong: [reponse[37], reponse[38], reponse[39]]
            }
        }];


    var Quiz = function(quiz_name) {

        this.quiz_name = quiz_name;


        this.questions = [];
    }


    Quiz.prototype.add_question = function(question) {
        var index_to_add_question = Math.floor(Math.random() * this.questions.length);
        this.questions.splice(index_to_add_question, 0, question);
    }

    Quiz.prototype.render = function(container) {
        var self = this;

        $('#quiz-results').hide();

        $('#quiz-name').text(this.quiz_name);

        var question_container = $('<div>').attr('id', 'question').insertAfter('#quiz-name');

        function change_question() {
            self.questions[current_question_index].render(question_container);
            $('#prev-question-button').prop('disabled', current_question_index === 0);
            $('#next-question-button').prop('disabled', current_question_index === self.questions.length - 1);



            var all_questions_answered = true;
            for (var i = 0; i < self.questions.length; i++) {
                if (self.questions[i].user_choice_index === null) {
                    all_questions_answered = false;
                    break;
                }
            }
            $('#submit-button').prop('disabled', !all_questions_answered);
        }

        var current_question_index = 0;
        change_question();

        $('#prev-question-button').click(function() {
            if (current_question_index > 0) {
                current_question_index--;
                change_question();
            }
        });

        $('#next-question-button').click(function() {
            if (current_question_index < self.questions.length - 1) {
                current_question_index++;
                change_question();
            }
        });

        $('#submit-button').click(function() {
            var score = 0;
            for (var i = 0; i < self.questions.length; i++) {
                if (self.questions[i].user_choice_index === self.questions[i].correct_choice_index) {
                    score++;
                }

                $('#quiz-retry-button').click(function(reset) {
                    quiz.render(quiz_container);
                });



            }



            var percentage = score / self.questions.length;
            console.log(percentage);
            var message;
            if (percentage === 1) {
                message = 'Score max'
            } else if (percentage >= .75) {
                message = 'Score mid'
            } else if (percentage >= .5) {
                message = 'Score low'
            } else {
                message = 'Score 0'
            }
            $('#quiz-results-message').text(message);
            $('#quiz-results-score').html('Vous avez  <b>' + score + '/' + self.questions.length + '</b> questions correct');
            $('#quiz-results').slideDown();
            $('#submit-button').slideUp();
            $('#next-question-button').slideUp();
            $('#prev-question-button').slideUp();
            $('#quiz-retry-button').sideDown();

        });

        question_container.bind('user-select-change', function() {
            var all_questions_answered = true;
            for (var i = 0; i < self.questions.length; i++) {
                if (self.questions[i].user_choice_index === null) {
                    all_questions_answered = false;
                    break;
                }
            }
            $('#submit-button').prop('disabled', !all_questions_answered);
        });
    }

    var Question = function(question_string, correct_choice, wrong_choices) {
        this.question_string = question_string;
        this.choices = [];
        this.user_choice_index = null; // Choix de l'utilisateur

        // Assigne de maniere aleatoire un index au bon choix
        this.correct_choice_index = Math.floor(Math.random(0, wrong_choices.length + 1));

        // rempli this.choice de choix
        var number_of_choices = wrong_choices.length + 1;
        for (var i = 0; i < number_of_choices; i++) {
            if (i === this.correct_choice_index) {
                this.choices[i] = correct_choice;
            } else {
                // Mets un mauvais choix random dans cet index
                var wrong_choice_index = Math.floor(Math.random(0, wrong_choices.length));
                this.choices[i] = wrong_choices[wrong_choice_index];

                // Supprime le mauvais choix une fois placé pour eviter de le remettre
                wrong_choices.splice(wrong_choice_index, 1);
            }
        }
    }

    //Render la question
    Question.prototype.render = function(container) {
        // au cas ou oor
        var self = this;

        // Rempli les label des questions
        var question_string_h2;
        if (container.children('h2').length === 0) {
            question_string_h2 = $('<h2>').appendTo(container);
        } else {
            question_string_h2 = container.children('h2').first();
        }
        question_string_h2.text(this.question_string);

        // Supprimer les ancien radio button
        if (container.children('input[type=radio]').length > 0) {
            container.children('input[type=radio]').each(function() {
                var radio_button_id = $(this).attr('id');
                $(this).remove();
                container.children('label[for=' + radio_button_id + ']').remove();
            });
        }
        for (var i = 0; i < this.choices.length; i++) {
            // Creer les readio button
            var choice_radio_button = $('<input>')
                .attr('id', 'choices-' + i)
                .attr('type', 'radio')
                .attr('name', 'choices')
                .attr('value', 'choices-' + i)
                .attr('checked', i === this.user_choice_index)
                .appendTo(container);

            // Creer les labels
            var choice_label = $('<label>')
                .text(this.choices[i])
                .attr('for', 'choices-' + i)
                .appendTo(container);
        }

        // Click listener pour le radio button
        $('input[name=choices]').change(function(index) {
            var selected_radio_button_value = $('input[name=choices]:checked').val();

            // Change l'index en fonction du user choice
            self.user_choice_index = parseInt(selected_radio_button_value.substr(selected_radio_button_value.length - 1, 1));

            // Trigger "user-select-change"
            container.trigger('user-select-change');
        });
    }

    // Rendu du quizz
    $(document).ready(function() {
        // Creer l'instance du quiz
        var quiz = new Quiz('Quiz');

        // Creer l'objet des question tant qu'il y'en a
        for (var i = 0; i < all_questions.length; i++) {
            // new question
            var question = new Question(all_questions[i].question_string, all_questions[i].choices.correct, all_questions[i].choices.wrong);

            // ajoute les question a l'instance
            quiz.add_question(question);
        }

        // rendu du quiz dans le container
        var quiz_container = $('#quiz');
        quiz.render(quiz_container);
    });
</script>
<div id="quiz">
    <h1 id="quiz-name"></h1>
    <button id="submit-button">Soumettre le quiz</button>
    <button id="next-question-button">Prochaine question</button>
    <button id="prev-question-button">Question précedente</button>

    <div id="quiz-results">

        <p id="quiz-results-message"></p>
        <p id="quiz-results-score"></p>
        <a href=""><button id="quiz-retry-button">Recommencer</button></a>
        <a href="ludique.php"><button id="quiz-return-button">Revenir à l'acceuil</button></a>

    </div>
</div>