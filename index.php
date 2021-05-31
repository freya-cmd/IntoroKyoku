<!DOCTYPE html>
<?php

    include("includes/config.php");

    //session_destroy(); to logout

    if(isset($_SESSION['userLoggedIn'])) {
        $userLoggedIn = $_SESSION['userLoggedIn'];
    } else {
        header("Location: register.php");
    }


?>


<link rel="stylesheet" href="assets/css/index.css">
<html>
<head>
    <title>Document</title>
</head>



<body>

<div id="nowPlayingBarContainer">
    <div id="nowPlayingBar">

    </div>
</div>



</body>





</html>