<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="login">
    <form action="loginrequired.php" method="post" class="form">
        <h1 class="txtlogin">Login</h1>
    <?php if (isset($_GET['error'])) { ?>
     	<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <label class="label" for="">User Name</label>
        <input class="input" type="text" name="uname" placeholder="User Name"><br>
        <label​​ class="label" for="" >Password</label>
        <input class="input" type="password" name="password" placeholder="Password"><br>
        <input type="submit" value="Login" class="btn-login">
        <a href="signup.php" class="ca">Forgot password?</a>
    </form>
    </div>
</body>
</html>
