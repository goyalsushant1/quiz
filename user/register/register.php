<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="register.css">
</head>
<body>
    <div class="main">
        <div class="box">
            <div class="head">REGISTER</div>
            <form action="registermaster.php" method="post">
                <input type="text" name="username" id="" placeholder=" Username" autocomplete="off" required>
                <input type="password" name="password" id="" placeholder=" Password" autocomplete="off" required>
                <input type="submit" value="Register" name="register">
                <div class="login">
                    Already a Member . <a href="../login/login.php">Login Now !!</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>