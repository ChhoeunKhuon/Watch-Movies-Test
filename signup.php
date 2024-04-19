<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="login">
     <form action="signup-check.php" method="post" class="form">
     	<h2 class="txtlogin">SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          <label class="label">Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input class="input" type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input class="input" type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>
          <label class="label">User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input class="input" type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input class="input" type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>
     	<label class="label">Password</label>
     	<input class="input" type="password" 
                 name="password" 
                 placeholder="Password"><br>
          <label class="label">Re Password</label>
          <input class="input" type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>
                 <input type="submit" value="Sign Up" class="btn-login">
          <a href="login.php" class="ca">Already have an account?</a>
     </form>
          </div>
</body>
</html>