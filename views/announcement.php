
<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ACCESS | Announcements</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-access.ico">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  
    <!-- CSS -->
    <link href ="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/announcements.css"> 


  </head>

<body>


<section id="events-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <h1>ANNOUNCEMENTS</h1>
      </div>

      <div class="col-md-12">
        <p>Keep updated with Computer Engineering Department's <br> announcements, College of Engineering and University wide announcements.</p>
      </div>
    </div>
  </div>
</section>


<div class="event-main">
  <div class="container">
    <div id="eventspage-header" class="divider">
      <div class="row">
        <div class="event-title">
          <h1>Announcements</h1>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="event-details">
  <div class="container">
  <?php

  foreach($results as $announcement_result):
  // birthdate
  $tempDate = new DateTime($announcement_result->postTimeCreated);
  $date = $tempDate->format("F j, Y");

  ?>
  <div class="row section-container">
      <div class="col-md-6 section-block-img">
          <?php 
            echo '<img class="img-responsive" src="http://amiscms.likesyou.org/uploads/'. $announcement_result->postImage .'" alt="announcement-image">';
          ?>
      </div>
      <div class="col-md-6 section-block-info">
        <h2><?php echo $announcement_result->postTitle; ?></h2>
        <hr>
        <span class="glyphicon glyphicon-pencil"></span><?php echo $date; ?>
        <p>
         <?php echo $announcement_result->postDetails; ?>
        </p>
      </div>
  </div>

  <?php endforeach; ?>
</div>
</div>


<div class="page-container">
  <div class="container">
    <div class="row" align="center">
      <div class="col-md-12">
        <div class="page">
          <!--<nav class="pagination" role="navigation">
            <a class="prev" href="#">< Previous</a>
            <a class="active" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a class="next" href="#">Next ></a>
          </nav>-->
          <?php 
              echo $links;
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

