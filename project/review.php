<!DOCTYPE html>
<?php include('process_rev.php') ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Review Page</title>
</head>
<body>
<div id="container">
  <form action="review.php" method="POST">
    <div class="container">
      <h1>Post a review</h1>
      <p>Please fill in this information in order to post the review</p>
      <hr>
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Hannah" name="name" id="name" required>
      <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Ex: hdrinkwater@gmail.com" name="email" id="email" required>
      <?php if (isset($email_error)): ?>
      	<span><div class="red"><?php echo $email_error; ?></div></span>
      <?php endif ?>
  	</div>
    <label for="place"><b>Place Name</b></label>
    <input type="text" placeholder="Nidos Cafe" name="place" id="place" required>
    <p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
<button type="submit" class="registerbtn" name="submit">Register</button><input type="reset" value="Clear">
</form>
