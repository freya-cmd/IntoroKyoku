<!DOCTYPE html>

<?php
include("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");

$account = new Account($con);

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

function getInputValue($name) {
    if(isset($_POST[$name])) {
        echo $_POST[$name];
    }

}

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
        <?php echo $account->getError(Constants::$loginFailed);?>
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
        <?php echo $account->getError(Constants::$usernameTaken);?>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="e.g. bartSimpson" value="<?php getInputValue('username') ?>" required>
        </p>

        <p>
        <?php echo $account->getError(Constants::$firstNameCharacters);?>
        <label for="firstName">First Name</label>
        <input id="firstName" name="firstName" type="text" placeholder="e.g. Bart" value="<?php getInputValue('firstName') ?>" required>
        </p>

        <p>
        <?php echo $account->getError(Constants::$lastNameCharacters);?>
        <label for="lastName">Last Name</label>
        <input id="lastName" name="lastName" type="text" placeholder="e.g. Simpson" value="<?php getInputValue('lastName') ?>" required>
        </p>

        <p>
        <?php echo $account->getError(Constants::$emailsDoNotMatch);?>
        <?php echo $account->getError(Constants::$emailInvalid);?>
        <?php echo $account->getError(Constants::$emailTaken);?>
        <label for="email">E-mail</label>
        <input id="email" name="email" type="email" placeholder="e.g. plums@hotmail.com" value="<?php getInputValue('email') ?>" required>
        </p>

        <p>
        <label for="email2">Confirm E-mail</label>
        <input id="email2" name="email2" type="email" placeholder="e.g. plums@hotmail.com" required>
        </p>

        <p>
        <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
        <?php echo $account->getError(Constants::$passwordNotAlphanumeric);?>
        <?php echo $account->getError(Constants::$passwordCharacters);?>
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