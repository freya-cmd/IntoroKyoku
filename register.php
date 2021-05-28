<!DOCTYPE html>
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
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="e.g. bartSimpson" required>
        </p>

        <p>
        <label for="firstName">First Name</label>
        <input id="firstName" name="firstName" type="text" placeholder="e.g. Bart" required>
        </p>

        <p>
        <label for="lastName">Last Name</label>
        <input id="lastName" name="lastName" type="text" placeholder="e.g. Simpson" required>
        </p>

        <p>
        <label for="email">E-mail</label>
        <input id="email" name="email" type="email" placeholder="e.g. plums@hotmail.com" required>
        </p>

        <p>
        <label for="email2">Confirm E-mail</label>
        <input id="email2" name="email2" type="email" placeholder="e.g. plums@hotmail.com" required>
        </p>

        <p>
        <label for="loginPassword">Password</label>
        <input id="password" name="password" type="password" required>
        </p>

        <p>
        <label for="loginPassword">Password</label>
        <input id="password" name="password" type="password" required>
        </p>

        <button type="submit" name="loginButton">Login</button>
        </form>

    </div>


</body>
</html>