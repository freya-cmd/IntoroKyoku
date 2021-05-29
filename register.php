<!DOCTYPE html>

<?php
include("includes/classes/Account.php");
include("includes/classes/Constants.php");

$account = new Account();

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audify Welcome</title>
</head>
<body>
    <div id="inputContainer">
        <form id='loginForm' action="register.php" method="POST">
        <h2>Log in to your account</h2>



        <p>
        <label for="loginUsername">Username</label>
        <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
        </p>

        <p>
        <label for="loginPassword">Password</label>
        <input id="loginPassword" name="loginPassword" type="password" required>
        </p>

        <button type="submit" name="loginButton">Login</button>
        </form>


        <form id='registerForm' action="register.php" method="POST">
        <h2>Create your account</h2>


        <p>
        <?php echo $account->getError(Constants::$usernameCharacters);?>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="e.g. bartSimpson" required>
        </p>

        <p>
        <?php echo $account->getError("Your first name must be between 2 and 25 characters");?>
        <label for="firstName">First Name</label>
        <input id="firstName" name="firstName" type="text" placeholder="e.g. Bart" required>
        </p>

        <p>
        <?php echo $account->getError("Your last name must be between 2 and 25 characters");?>
        <label for="lastName">Last Name</label>
        <input id="lastName" name="lastName" type="text" placeholder="e.g. Simpson" required>
        </p>

        <p>
        <?php echo $account->getError("Your emails do not match");?>
        <?php echo $account->getError("Email is invalid");?>
        <label for="email">E-mail</label>
        <input id="email" name="email" type="email" placeholder="e.g. plums@hotmail.com" required>
        </p>

        <p>
        <label for="email2">Confirm E-mail</label>
        <input id="email2" name="email2" type="email" placeholder="e.g. plums@hotmail.com" required>
        </p>

        <p>
        <?php echo $account->getError("Your passwords do not match"); ?>
        <?php echo $account->getError("Your password can only contain numbers and letters");?>
        <?php echo $account->getError("Your password must be between 5 and 30 characters");?>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" required>
        </p>

        <p>
        <label for="password2">Confirm Password</label>
        <input id="password2" name="password2" type="password" required>
        </p>

        <button type="submit" name="registerButton">Sign Up</button>
        </form>

    </div>


</body>
</html>