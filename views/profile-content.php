<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ACCESS  |  Profile</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-access.ico">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  
    <!-- CSS -->
    <link href ="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbardark.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/profile.css">    

  </head>

<body>

<div class="profile-header">
    <div class="row">
        <div class="col-md-12">
            
        </div>
    </div>
</div>

<?php foreach($profile as $row):

$tempImage = "";
if ($row->gender == 'Male') $tempImage = "assets/img/user-boy.png"; 
if ($row->gender == 'Female') $tempImage = "assets/img/user-girl.png"; 

// birthdate
$tempDate = new DateTime($row->birthdate);
$birthday = $tempDate->format("F j, Y");

?>

<div class="profile-container">
  <div class="container-fluid">
    <div class="row personal">
      <div class="col-sm-4 col-md-4 personal-info" align="center">
        <div class="big-icon" style='background:url(<?php echo base_url() . $tempImage; ?>) center no-repeat; width: 180px; height: 180px; background-size: 100%; border-radius: 50%; border: 2px solid white;'></div>

        <h3><?php echo $row->firstName . " " . substr($row->middleName, 0, 1) . ". " . $row->lastName . ' ' . $row->suffix; ?></h3>
        <hr>
        <h5>Student No: <?php echo $row->studentNumber; ?></h5>
        <h5>Member Id: <?php echo $row->memberID; ?></h5>
        <h5>Member Status: <?php echo $row->MembershipStatus; ?></h5>
        <h5>Year & Section: BsCpE <?php echo $row->yearLevel . "-" . $row->section; ?></h5>

        <div class="col-sm-12 col-md-12 button">
          <a href="<?php echo base_url(); ?>profile/profile_settings"><button>Edit Profile</button></a> 
        </div>

        <div class="col-sm-12 col-md-12 button-acc">
          <a href="<?php echo base_url(); ?>profile/profile_account"><button>Edit Account</button></a> 
        </div>
      </div>

      <div class="col-sm-7 col-md-7 name-info">
        <h3 class="personal-header">Personal Information</h3>
        <h4><span class="orange">Complete Name:</span> <?php echo $row->firstName . " " . $row->middleName . " " . $row->lastName . " " . $row->suffix; ?></h4>
        <br>
        <div class="row">
          <div class="col-md-6 one">
            <p><span class="orange">Gender:</span> <?php echo $row->gender; ?></p>
            <p><span class="orange">Contact Number:</span> <?php echo $row->contactNumber; ?></p>
            <p><span class="orange">Residential Address:</span> <?php echo $row->residentialAddress; ?></p>
            <p><span class="orange">Mother's Name:</span> <?php echo $row->mother; ?></p>
            <p><span class="orange">Guardian's Name:</span> <?php echo $row->guardian; ?></p>
          </div>

          <div class="col-md-6 two">
            <p><span class="orange">Birthday:</span> <?php echo $birthday; ?></p>
            <p><span class="orange">Email Address:</span> <?php echo $row->emailAddress; ?></p>
            <p><span class="orange">Provincial Address:</span> <?php echo $row->provincialAddress; ?></p>
            <p><span class="orange">Father's Name:</span> <?php echo $row->father; ?></p>
            <p><span class="orange">Guardian's Contact Number:</span> <?php echo $row->guardianContact; ?></p>
          </div>
        </div>
      </div>

      <div class="col-sm-7 col-md-7 educational-info">
        <h3 class="educational-header">Educational Background & Affliations</h3>
        
        <div class="row">
          <div class="col-md-6">
            <h4><span class="orange">High School Graduated: </span> <?php echo $row->highSchoolGraduated; ?></h4>
          </div>
          <div class="col-md-6">
            <h4><span class="orange">High School Type: </span> <?php echo $row->highSchoolType; ?></h4>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6">
            <h5><span class="orange">Scholarship: </span> <?php echo $row->scholarship; ?></h5>
          </div>
          <div class="col-md-6">
            <h5><span class="orange">Scholarship Type: </span> <?php if($row->scholarshipType == '') { echo 'None'; } else { echo $row->scholarshipType; }  ?></h5>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <h5><span class="orange">Awards Received: </span> <?php echo $row->awardsReceived; ?></h5>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12">
             <h5><span class="orange">Skills: </span> <?php echo $row->skills; ?></h5>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <p><span class="orange">Organization: </span> <?php echo $row->organization_one; ?></p>
          </div>
                   
          <div class="col-md-6">
            <p><span class="orange">Position: </span> <?php echo $row->position_one; ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <p><span class="orange">Organization: </span> <?php echo $row->organization_two; ?></p>
          </div>
                   
          <div class="col-md-6">
            <p><span class="orange">Position: </span> <?php echo $row->position_two; ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <p><span class="orange">Organization: </span> <?php echo $row->organization_three; ?></p>
          </div>
                   
          <div class="col-md-6">
            <p><span class="orange">Position: </span> <?php echo $row->position_three; ?></p>
          </div>
        </div>
      </div>

      <div class="col-sm-7 col-md-7 transaction">
          <a href="<?php echo base_url(); ?>profile/profile_transaction">View Transaction History</a> 
        </div>

<?php endforeach; ?>

    </div>
  </div>
</div>

