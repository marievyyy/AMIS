<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ACCESS | Login</title>
        <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-access.ico">

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/index.css"/>
    </head>
<body>

<!-- For the banner section -->
  <div>
    <figure>
      <div class="main-banner"></div>
    </figure>
    <figure>
      <div class="main-banner two"></div>
    </figure>
    <figure>
      <div class="main-banner three"></div>
    </figure>
  </div>
<!-- End banner section -->

<div class="container">
    <ul>
        <li><a href="<?php echo base_url(); ?>">HOME</a></li>
        <li><a href="<?php echo base_url(); ?>register">REGISTER</a></li>
    </ul>
    <div class="login-container">
        <img src="<?php echo base_url(); ?>assets/img/logo-access.png" alt="Access Logo">
        <h2>ACCESS LOGIN</h2>
        <form id="formlogin" class="formlogin" action="<?php echo base_url(); ?>login/user_login" method="post">
            <div class="form-group">
                <input name="studentnumber" type="text" id="studentNumber" maxlength="15" class="studentNumber" autofocus>
                <p>Student Number</p>
            </div>
            <div class="form-group">
              <input name="password" type="password" id="password" class="password">
                <p>Password</p>
            </div>
            <br>
            <p class="error">Invalid Username or Password!</p>
            <input type="submit" name="submit" class="submit-btn" value="Login!">
        </form>
    </div>
</div>

<img src="<?php echo base_url(); ?>assets/img/AMIS-orange.png" alt="AMIS-Logo" class="img-responsive footer-logo">


<!-- JS -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/auth.js"></script>

</body>
</html>