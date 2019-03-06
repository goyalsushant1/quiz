<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="login.css">
</head>
<body>
    <div class="main">
        <div class="box">
            <div class="head">LOGIN</div>
            <form action="loginmaster.php" method="post">
                <input type="text" name="username" id="" placeholder=" Username" autocomplete="off" required>
                <input type="password" name="password" id="" placeholder=" Password" autocomplete="off" required>
                <input type="submit" value="Login" name="login">
                <div class="register">
                    Not a Member . <a href="../register/register.php">Register Now !!</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>