<!DOCTYPE html>
<html>
<head>
	<title> Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

     <form onsubmit = "return checkform(this);" action="login-check.php" method="post">
     	<h2>LOGIN</h2>

     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text"
                      name="uname" 
                      placeholder="User Name" 
                      value = "<?php echo $_GET['uname']; ?>"><br>
          <?php }else { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


          <label>Password</label>
     	    <input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <a style="color: black; background-color:lightgreen; margin:auto ; border: 3px solid; text-align:center; text-indent:2px; font-weight:bold "  href="signup.php" class="btn">Signup now</a>
          <br> </br>
     	<br> </br>
          <button style="font-size: 20px; color:black" type="submit">Login</button>

      
		
     </form>

</body>
</html>