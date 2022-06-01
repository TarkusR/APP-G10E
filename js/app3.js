var dataSet ='data3.php';


$(document).ready(function(){
    $.ajax({
        url: dataSet,
        method: "GET",
        success: function(data) {
            console.log(data);
            var heure = [];
            var donnee = [];

            for(var i in data) {
                heure.push(data[i].heure);
                donnee.push(data[i].donnee);
            }

            var chartdata = {
                labels: heure,
                datasets : [
                    {
                        label: 'Rythme cardiaque',
                        backgroundColor: 'rgba(200, 200, 200, 0.75)',
                        borderColor: 'rgba(200, 200, 200, 0.75)',
                        hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                        hoverBorderColor: 'rgba(200, 200, 200, 1)',
                        data: donnee
                    }
                ]
            };

            var ctx = $("#mycanvas3");

            var barGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            });
        },
        error: function(data) {
            console.log(data);
        },
        options:{
            responsive :false
        }
    });
});