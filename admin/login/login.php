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
            <div class="head">ADMIN LOGIN</div>
            <form action="loginmaster.php" method="post">
                <input type="text" name="adminname" id="" placeholder=" Admin Name" autocomplete="off" required>
                <input type="password" name="password" id="" placeholder=" Password" autocomplete="off" required>
                <input type="submit" value="Login" name="login">
            </form>
        </div>
    </div>
</body>
</html>