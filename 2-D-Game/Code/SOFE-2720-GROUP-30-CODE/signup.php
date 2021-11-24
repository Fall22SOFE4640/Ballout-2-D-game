<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <script>

    function checkform(form){

      if(!form.terms.checked){
        alert("Please indicate that you accept the Terms and Conditions");
        form.terms.focus();
        return false;
      }

      return true;


    }

  </script>
     <form onsubmit = "return checkform(this);" action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>

     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text"
                      name="name" 
                      placeholder="Name" 
                      value = "<?php echo $_GET['name']; ?>"><br>
          <?php }else { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

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

          <label>Re Password</label>
          <input type="password" name="re_password" placeholder="Re_Password"><br>

          
        <label for="terms"><input type="checkbox" id="terms"><small>By signing up, you agree to participate in this game</small></label>

        <br><br>



          <!-- By signing up, you agree to participate in this game.<input type = "checkbox" name = "terms" id = "position"> --> 
            


     	<button style="color:black; font-weight:bold" type="submit">Sign Up</button>

      
		
     </form>

</body>
</html>