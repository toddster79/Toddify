<?php
    include("includes/classes/Account.php");

    $account = new Account();
    $account->register();

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Toddify!</title>
</head>
<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
            <label for="loginUsername">Username</label>
            <input type="text" id="loginUsername" name="loginUsername" placeholder="e.g. bart simpson" required>
            </p>
            <p>
            <label for="loginPassword">Password</label>
            <input type="password" id="loginPassword" name="loginPassword" placeholder="Your password" required>
            </p>

            <button typle="submit" name="loginButton">Log In</button>

        </form>

        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="e.g. bart simpson" required>
            </p>

            <p>
            <label for="firstName">First name</label>
            <input type="text" id="firstName" name="firstName" placeholder="e.g. Bart" required>
            </p>

            <p>
            <label for="lastName">Last name</label>
            <input type="text" id="lastName" name="lastName" placeholder="e.g. Simpson" required>
            </p>

            <p>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="e.g. bart@gmail.com" required>
            </p>

            <p>
            <label for="email2">Confrim email</label>
            <input type="email" id="email2" name="email2" placeholder="e.g. bart@gmail.com" required>
            </p>

            <p>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Your password" required>
            </p>

            <p>
            <label for="password2">Confirm password</label>
            <input type="password" id="password2" name="password2" placeholder="Your password" required>
            </p>

            <button typle="submit" name="registerButton">Sign Up</button>

        </form>
    </div>
</body>
</html>