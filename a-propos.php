<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>À propos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
<?php  include "header.php"; ?>
<div class='faq'>
    <div class="faq-title"><h1>Questions les plus frequentes</h1></div>
    <input id='faq-a' type='checkbox'>
    <label for='faq-a'>
        <p class="faq-heading">Text1</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">oui</p>
    </label>
    <input id='faq-b' type='checkbox'>
    <label for='faq-b'>
        <p class="faq-heading">Text2</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">oui</p></label>
    <input id='faq-c' type='checkbox'>
    <label for='faq-c'>
        <p class="faq-heading">Text3</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">oui</p></label>
    <input id='faq-d' type='checkbox'>
    <label for='faq-d'>
        <p class="faq-heading">Text4</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">oui</p></label>
    <input id='faq-e' type='checkbox'>
    <label for='faq-e'>
        <p class="faq-heading">Text5</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">oui</p></label></label>
    <input id='settings' type='checkbox'>
    <input id='faq-f' type='checkbox'>
    <label for='faq-f'>
        <p class="faq-heading">Text6</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">oui</p></label></label>
</div>
<?php  include "footer.php"; ?>

</body>
</html>