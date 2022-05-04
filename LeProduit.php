<?php
session_start();


?>

<!DOCTYPE html>
<head>
    <title>Le Produit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php  include "header.php"; ?>
<h1 class="centreRegister">Notre produit</h1>

<div class="produitOrga">
    <div class="product-text-container">
        <p>Un ensemble de capteurs dans un seul et même produit rassemblant les informations de votre environnement <br> pour vous permettre comprendre comment améliorer vos conditions de travail et le confort de tous. </p>
    </div>
    <div>
    <img src="notre_Produit.png" class="imgProduit">
    </div>
</div>



<?php include_once "footer.php" ?>

</body>