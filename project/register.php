<!DOCTYPE html>
<?php include('process.php') ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
<link rel="stylesheet" href="register.css">
</head>
<body>
<div id="container">
  <form action="register.php" method="POST">
    <div class="container">
      <h1>Create an Account</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >

      <label for="uname"><b>User Name</b></label>
      <input type="text" placeholder="Hannah11" name="uname" id="uname" required>
      <?php if (isset($name_error)): ?>
	  	 <span><?php echo $name_error; ?></span>
	    <?php endif ?>
     </div>

      <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Ex: hdrinkwater@gmail.com" name="email" id="email" required>
      <?php if (isset($email_error)): ?>
      	<span><div class="red"><?php echo $email_error; ?></div></span>
      <?php endif ?>
  	</div>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

      <label for="psw-repeat"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="psw-repeat" id="psw-repeat" required>
      <hr>

      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
      <button type="submit" class="registerbtn" name="submit">Register</button>
    </div>

    <div class="container signin">
     <p>Already have an account?</p>
     <form action = "login.php">
       <button type="submit" style="width:auto;">Sign in</button>
     </form>

     <p>Go back to main page</p><a href="index.html"> Main Page</a></p>
       <button type="submit" style="width:auto;">Sign in</button>
    </div>
  </form>
</div>
</body>
</html>
