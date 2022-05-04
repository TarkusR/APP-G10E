<?php

session_start();
if(isset($_GET['logout']))
    session_destroy();
?>

<!DOCTYPE html >
<html lang ="en">
<head>
    <title>Section ludique</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php  include('header.php'); ?>
<div class="ludique-container">
    <div class="ludique-title-container">
        <h1>PLACEHOLDER TITRE</h1>
    </div>
    <div class="ludique-content-container-right">
        <div class="ludique-content-text-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Mattis rhoncus urna neque viverra justo nec ultrices dui. Volutpat odio facilisis mauris sit amet massa vitae tortor condimentum. Nam libero justo laoreet sit. Tincidunt lobortis feugiat vivamus at augue eget arcu dictum. Cras fermentum odio eu feugiat pretium nibh ipsum consequat nisl. Faucibus interdum posuere lorem ipsum dolor sit amet. Sed arcu non odio euismod lacinia at quis. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Morbi tristique senectus et netus et malesuada fames ac. Accumsan lacus vel facilisis volutpat est. Ultrices gravida dictum fusce ut. Pellentesque habitant morbi tristique senectus et netus et malesuada. Adipiscing bibendum est ultricies integer quis auctor elit sed.</p>
        </div>
        <div class="ludique-content-media-container">
            <video controls >
                <source src="src/video1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="ludique-content-container-left">
        <div class="ludique-content-text-container-left">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Mattis rhoncus urna neque viverra justo nec ultrices dui. Volutpat odio facilisis mauris sit amet massa vitae tortor condimentum. Nam libero justo laoreet sit. Tincidunt lobortis feugiat vivamus at augue eget arcu dictum. Cras fermentum odio eu feugiat pretium nibh ipsum consequat nisl. Faucibus interdum posuere lorem ipsum dolor sit amet. Sed arcu non odio euismod lacinia at quis. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Morbi tristique senectus et netus et malesuada fames ac. Accumsan lacus vel facilisis volutpat est. Ultrices gravida dictum fusce ut. Pellentesque habitant morbi tristique senectus et netus et malesuada. Adipiscing bibendum est ultricies integer quis auctor elit sed.</p>
        </div>
        <div class="ludique-content-media-container-left">
            <video controls >
                <source src="src/video1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="ludique-content-container-right">
        <div class="ludique-content-text-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Mattis rhoncus urna neque viverra justo nec ultrices dui. Volutpat odio facilisis mauris sit amet massa vitae tortor condimentum. Nam libero justo laoreet sit. Tincidunt lobortis feugiat vivamus at augue eget arcu dictum. Cras fermentum odio eu feugiat pretium nibh ipsum consequat nisl. Faucibus interdum posuere lorem ipsum dolor sit amet. Sed arcu non odio euismod lacinia at quis. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Morbi tristique senectus et netus et malesuada fames ac. Accumsan lacus vel facilisis volutpat est. Ultrices gravida dictum fusce ut. Pellentesque habitant morbi tristique senectus et netus et malesuada. Adipiscing bibendum est ultricies integer quis auctor elit sed.</p>
        </div>
        <div class="ludique-content-media-container">
            <video controls >
                <source src="src/video1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="ludique-content-container-left">
        <div class="ludique-content-text-container-left">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Mattis rhoncus urna neque viverra justo nec ultrices dui. Volutpat odio facilisis mauris sit amet massa vitae tortor condimentum. Nam libero justo laoreet sit. Tincidunt lobortis feugiat vivamus at augue eget arcu dictum. Cras fermentum odio eu feugiat pretium nibh ipsum consequat nisl. Faucibus interdum posuere lorem ipsum dolor sit amet. Sed arcu non odio euismod lacinia at quis. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Morbi tristique senectus et netus et malesuada fames ac. Accumsan lacus vel facilisis volutpat est. Ultrices gravida dictum fusce ut. Pellentesque habitant morbi tristique senectus et netus et malesuada. Adipiscing bibendum est ultricies integer quis auctor elit sed.</p>
        </div>
        <div class="ludique-content-media-container-left">
            <video controls >
                <source src="src/video1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>
<?php include_once "footer.php" ?>
</body>
</html>