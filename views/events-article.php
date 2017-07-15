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

    <!-- CSS -->
    <link href ="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbardark.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/event-article.css"> 
    

    </head>
   
    <div class="article-header">
        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
    </div>
<?php 

foreach($event as $row):

$tempDate = new DateTime($row->eventDate);
$date = $tempDate->format("F j, Y");
$temppDate = new DateTime($row->postTimeCreated);
$datee = $temppDate->format("F j, Y");

?>
    <div class="article-main">
      <div class="container">
        <div id="article-header" class="divider">
          <div class="row">
            <div class="article-title">
                <!-- Event Title -->
              <h1><?php echo $row->postTitle; ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>

<div id="events-content">
  <div class="container">
    <div class="page-content-inner">
      <div class="event-list-page event-page">
        <div class="row">
            <div class="col-md-12">
                <article class="event-article">
                    <div class="event-inner c-content-box">
                        <div class="event-image">
                            <a href=""><img class="img-responsive" src="http://amiscms.likesyou.org/uploads/<?php echo $row->postImage; ?>"></a>
                        </div>
                        <div class="event-core">
                            <ul class="event-info">
                                <li class="event-date">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                    <?php echo 'Event Date: '.$date;  ?>
                                </li>
                                <li class="event-time">
                                    <!-- <span class="glyphicon glyphicon-time"></span>
                                    3:00PM -->
                                </li>
                                <li class="event-location">
                                    <span class="glyphicon glyphicon-map-marker"></span>
                                    <?php echo $row->eventLocation; ?>
                                </li>
                                <li class="event-author">
                                    <span class="glyphicon glyphicon-paperclip"></span>Event Organizer: <?php echo $row->eventManager; ?>
                                </li>
                                <li class="event-contact">
                                    <span class="glyphicon glyphicon-phone"></span><?php echo $row->eventContact; ?>
                                </li>
                                <li class="event-dateposted">
                                    <span class="glyphicon glyphicon-pencil"></span>Date Posted: <?php echo $datee; ?>
                                </li>
                                <li class="event-views">
                                    <span class="glyphicon glyphicon-eye-open"></span><?php echo $row->postviews . ' view[s]'; ?>
                                </li>
                            </ul>
                        </div>
                        <div class="event-details">
                            <p><?php echo $row->postDetails; ?></p>
                        </div>
                    </div>
                </article>
            </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
