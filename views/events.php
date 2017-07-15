<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ACCESS | Events</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-access.ico">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  
    <!-- CSS -->
    <link href ="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/events.css"> 


  </head>

<body>

<!-- HEADER PAGE -->
<section id="events-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <!-- TITLE -->
        <h1>EVENTS</h1> 
      </div>

      <div class="col-md-12">
      <!-- TITLE DETAILS -->
        <p>Ready for CPE Week 2016? <br>
            Prepare yourselves for this big event! <br>
            Spongecola, Hale, Secondhand Seranade will be there! <br> So keep updated and keep the CpE Week Spirit! </p>
      </div>
    </div>
  </div>
</section>

<!-- EVENT DIVIDER -->
<div class="event-main">
  <div class="container-fluid">
    <div id="eventspage-header" class="divider">
      <div class="row">
        <div class="event-title">
          <h1>Events</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- EVENT CONTENTS -->
<div class="container-fluid section-container">
  <div class="row section-container-row">
  <?php 
    foreach($results as $row):
    $tempDate = new DateTime($row->eventDate);
    $date = $tempDate->format("F j, Y");
  ?>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="section-block">
                <div class="section-block-img">
                    <img src="http://amiscms.likesyou.org/uploads/<?php echo $row->postImage; ?>">
                </div>
                <div class="section-block-info" align="center">
                    <h3><?php echo $row->postTitle;?></h3>
                    <ul class="event-info">
                      <li class="event-date">
                        <span class="glyphicon glyphicon-calendar"></span>
                        <?php echo $date; ?>
                      </li>
                      <li class="event-time">
                        <!-- <span class="glyphicon glyphicon-time"></span>
                        1:30 PM -->
                      </li>
                      <li class="event-location">
                        <span class="glyphicon glyphicon-map-marker"></span>
                        <?php echo $row->eventLocation; ?>
                      </li>
                    </ul>
                    <p><?php echo substr($row->postDetails, 0, 267); ?>...</p>
                    <!-- 270 characters including elipsis in 150px height -->
                </div>
                <div class="outline">
                  <p class="readmore"><span class="glyphicon glyphicon-eye-open"></span><?php echo $row->postviews . ' view[s]'; ?><a href="<?php echo base_url() . 'events/view_event/' . $row->postCode; ?>"> Read more...</a></p>
                </div>
            </div>
        </div>
      <?php endforeach; ?>
    </div>
</div>


<!-- PAGINATION -->
<div class="page-container">
  <div class="container">
    <div class="row" align="center">
      <div class="col-md-12">
        <div class="page">
          <?php echo $links ?>
        </div>
      </div>
    </div>
  </div>
</div>


