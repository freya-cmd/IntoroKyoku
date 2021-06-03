<!DOCTYPE html>
<?php

    include("includes/config.php");
    include("includes/classes/Artist.php");
    include("includes/classes/Album.php");
    include("includes/classes/Song.php");

    //session_destroy(); to logout

    if(isset($_SESSION['userLoggedIn'])) {
        $userLoggedIn = $_SESSION['userLoggedIn'];
    } else {
        header("Location: register.php");
    }


?>


<link rel="stylesheet" href="assets/css/index.css">
<script src="assets/js/script.js"></script
<html>
<head>
    <title>Document</title>
</head>



<body>


    <div id="mainContainer">


        <div id="topContainer">

            <?php include("includes/navBarContainer.php"); ?>

            <div id="mainViewContainer">
            <div id="mainContent">