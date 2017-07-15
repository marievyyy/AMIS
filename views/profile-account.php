<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ACCESS  |  Account Settings</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-access.ico">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  
    <!-- CSS -->
    <link href ="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbardark.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/profile-account.css">

    <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>    

  </head>

<body>

<div class="profile-header-header">
    <div class="row">
        <div class="col-md-12">
            
        </div>
    </div>
</div>
  

<?php 

foreach($profile as $row):

$tempImage = "";
if ($row->gender == 'Male') $tempImage = "assets/img/user-boy.png"; 
if ($row->gender == 'Female') $tempImage = "assets/img/user-girl.png";

?>
<div class="profile-container">
  <div class="container-fluid">
    <div class="row personal">
      <div class="col-sm-4 col-md-4 personal-info" align="center">
        <!-- <img class="profile-img img-responsive" src="<?php echo base_url(); ?>assets/img/profile.png" alt="profile-img"> -->
        <div class="big-icon" style='background:url(<?php echo base_url().$tempImage; ?>) center no-repeat; width: 180px; height: 180px; background-size: 100%; border-radius: 50%; border: 2px solid white;'></div>

        <h3><?php echo $row->firstName . " " . substr($row->middleName, 0, 1) . ". " . $row->lastName . ' ' . $row->suffix; ?></h3>
        <hr>
        <h5>Student No: <?php echo $row->studentNumber; ?></h5>
        <h5>Member Id: <?php echo $row->memberID; ?></h5>
        <h5>Member Status: <?php echo $row->MembershipStatus; ?></h5>
        <h5>Year & Section: BsCpE <?php echo $row->yearLevel . "-" . $row->section; ?></h5>

      </div>

      <div class="col-sm-7 col-md-7 name-info">
        <h3 class="personal-header">Account Information</h3>
         <form id="editAccount" method="post" action="<?php base_url(); ?>edit_account">
            <div class="row">
              <div class="col-sm-12 col-md-12 account-details">
                <span class="err" id="studentNumberError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Student Number: </span></h4></label>
                  <input type="text" id="studentNumber" name="studentNumber" value="<?php echo $row->studentNumber; ?>" readonly/>
                </div>
              </div>

              <div class="col-sm-12 col-md-12 account-details">
                <span class="err" id="passwordError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Current Password: </span></h4></label>
                  <input type="password" id="password" name="password" value=""/>
                </div>
              </div>

              <div class="col-sm-12 col-md-12 account-details">
                <span class="err" id="newPasswordError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">New Password: </span></h4></label>
                  <input type="password" id="newPassword" name="newPassword" value=""/>
                  <div class="strength">
                      <span class="str-box box1">
                          <div></div>
                      </span>
                      <span class="str-box box2">
                          <div></div>
                      </span>
                      <span class="str-box box3">
                          <div></div>
                      </span>
                      <span class="str-box box4">
                          <div></div>
                      </span>
                      <span class="result">
                      </span>     
                    </div>
                </div>
              </div>

              <div class="col-sm-12 col-md-12 account-details">
                <span class="err" id="renewPasswordError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Re-type New Password: </span></h4></label>
                  <input type="password" id="renewPassword" name="renewPassword" value=""/>
                </div>
              </div>

            </div>
      </div>
<?php endforeach; ?>
      <div class="row">
        <div class="col-sm-3 col-md-3 button" align="center">
          <button id="update-account" type="submit">Save Account</button> 
        </div>

        <div class="col-sm-3 col-md-3 button" align="center">
          <a href="<?php base_url(); ?>profile"><button>Back to Profile</button></a>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>

