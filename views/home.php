<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ACCESS | Home</title>
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-access.ico">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/home.css">
</head>
<body>

    <div id="home"> 
        <div id="main-slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
                <li data-target="#main-slider" data-slide-to="3"></li>
                <li data-target="#main-slider" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
<? 
        foreach(array_slice(array_reverse($banner),0,1) as $banner_result){
            
            echo '<div class="item active">';
            echo '<img class="img-responsive" src="http://amiscms.likesyou.org/uploads/'. $banner_result->postImage .'" alt="slider">';
            echo '<div class="carousel-caption">';
            //echo '<h4>'.$banner_result->title.'</h4>';
            echo '</div>';
            echo '</div>';    
        }
        foreach(array_slice(array_reverse($banner),1,4) as $banner_result){
            
            echo '<div class="item">';
            echo '<img class="img-responsive" src="http://amiscms.likesyou.org/uploads/'. $banner_result->postImage .'" alt="slider">';
            echo '<div class="carousel-caption">';
            //echo '<h4>''</h4>';
            echo '</div>';
            echo '</div>';    
        }
?>
                <!--<div class="item">
                    <img class="img-responsive" src="<?php //echo base_url(); ?>assets/img/banner-02.jpg" alt="slider">   
                    <div class="carousel-caption">
                        <h2>register for our next event </h2>
                        <h4>Lorem ipsum</h4>
                        <a href="#contact">See More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>-->
                             
            </div>
        </div>      
    </div>
    <!-- HOME -->

    <!-- EVENTS -->
    <div id="events">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 events-calendar">
                    <h4>Upcoming <span>Events</span></h4>
                    <span class="glyphicon glyphicon-calendar"></span>
                    <div class="event-content">
                        <ul class="event-list">

<?
    foreach(array_slice($events,0,7) as $events_results){
        $event_month = date('M', strtotime($events_results->eventDate));
        $event_day = date('d', strtotime($events_results->eventDate));
        echo '<li class="event-details">
                                <div class="event-inner">
                                    <div class=" event-date">
                                        <span class="event-month">'.$event_month.'</span>
                                        <span class="event-day">'.$event_day.'</span>
                                    </div>
                                    <div class=" event-title">
                                        <h5 class="event-title-details">
                                        <a href="' . base_url() . 'events/view_event/' . $events_results->postCode . '">'.substr($events_results->postTitle, 0, 80).'</a>
                                    </h5>
                                    </div>
                                </div>
                            </li>';
    }    
?>
                            <!--<li class="event-details">
                                <div class="event-inner">
                                    <div class=" event-date">
                                        <span class="event-month">Jun</span>
                                        <span class="event-day">3</span>
                                    </div>
                                    <div class=" event-title">
                                        <h5 class="event-title-details">
                                        <a href="">Lorem Ipsum: lorem lorem ipsum lorem lorem blahblah blaha jhsdjas jnshjdhspd ..</a>
                                        --><!-- 80 characters max -->
                                    <!--</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="event-details">
                                <div class="event-inner">
                                    <div class="event-date">
                                        <span class="event-month">Jun</span>
                                        <span class="event-day">4</span>
                                    </div>
                                    <div class="event-title">
                                        <h5 class="event-title-details">
                                        <a href="">Lorem Ipsum: lorem lorem ipsum lorem lorem blahblah</a>
                                    </h5>
                                    </div>
                                </div>
                            </li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 events-articles">
                    <h2>Recent Events</h2>
<?
    foreach(array_slice($recent_events,0,2) as $recent_events_results){

        $recent_event_month = date('M', strtotime($recent_events_results->eventDate));
        $recent_event_day = date('d', strtotime($recent_events_results->eventDate));        
        echo '<div class="col-md-6 articles-details">
                        <div class="img-container" align="center">
                            <img src="http://amiscms.likesyou.org/uploads/' . $recent_events_results->postImage . '">
                        </div>
                        <div class="details-container">
                            <div class="row">
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <h4>'.$recent_event_month.'<br>'.$recent_event_day.'</h4>
                                </div>
                                <div class="col-xs-10 col-sm-10 col-md-10">
                                    <p>'.substr($recent_events_results->postDetails, 0, 150).'...</p>
                                    <!-- 150 characters max -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 readmore">
                                    <h6><a href="' . base_url() . 'events/view_event/' . $recent_events_results->postCode . '">Read More</a></h6>
                                </div>
                            </div>     
                        </div>
                    </div>';
    }
?>
                    <!--<div class="col-md-6 articles-details">
                        <div class="img-container" align="center">
                            <img src="<?php //echo base_url(); ?>assets/img/3.jpg">
                        </div>
                        <div class="details-container">
                            <div class="row">
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <h4>Oct<br>4</h4>
                                </div>
                                <div class="col-xs-10 col-sm-10 col-md-10">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. Sed ut perspiciatis unde omnis...</p>-->
                                    <!-- 150 characters max -->
                       <!--         </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 readmore">
                                    <h6><a href="">Read More</a></h6>
                                </div>
                            </div>     
                        </div>
                    </div>
                    <div class="col-md-6 articles-details">
                        <div class="img-container" align="center">
                            <img src="<?php //echo base_url(); ?>assets/img/3.jpg">
                        </div>
                        <div class="details-container">
                            <div class="row">
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <h4>Oct <br> 4</h4>
                                </div>
                                <div class="col-xs-10 col-sm-10 col-md-10">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 readmore">
                                    <h6><a href="">Read More</a></h6>
                                </div>
                            </div>     
                        </div>
                    </div>-->
                    <div class="seemore">
                        <div class="row">
                            <p><a href="<?php echo base_url(); ?>events">See More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- EVENTS -->

    <!-- ANNOUNCEMENTS -->
    <div id="announcement">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 announcement-title">
                    <h2>Announcements</h2>
                </div>
            </div>
            <div class="row announcement-content">
<?
    foreach(array_slice(array_reverse($announcement),0,6) as $announcement_result){
        
        $announcement_month = date('M', strtotime($announcement_result->postTimeCreated));
        $announcement_day = date('d', strtotime($announcement_result->postTimeCreated));
        echo '
                <div class="col-md-6">
                    <div class="row announcement-container">
                        <div class="col-xs-2 col-md-2 col-md-2 date">
                            <h4>'.$announcement_month.'<br>'.$announcement_day.'</h4>
                        </div>
                        <div class="col-xs-10 col-md-10 col-md-10 info">
                            <p>'.substr($announcement_result->postDetails, 0, 180).'...</p>
                        </div>
                    </div>
                </div>';
    }
?>
            </div>
            <!--<div class="row announcement-content">
                <div class="col-md-6">
                    <div class="row announcement-container">
                        <div class="col-xs-2 col-md-2 col-md-2 date">
                            <h4>Sept <br> 15</h4>
                        </div>
                        <div class="col-xs-10 col-md-10 col-md-10 info">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                    </div>
                </div>-->
            <div  class="row">
                <div class="seemore">
                    <p><a href="<?php echo base_url() . 'announcement'?>">See More</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- ANNOUNCEMENTS -->

    <!-- GALLERY -->
    <div id="gallery">
        <div class="container-fluid">
            <h2>Our <span>Gallery</span></h2>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="gal-button-cont">
                        <div class="gallery-btn-container row">
                            <div class="col-md-2">
                                <button class="gallery-btn">ALL</button>
                            </div>
                            <div class="col-md-4">
                                <button class="gallery-btn">COMPUTER ENGINEERING WEEK</button>
                            </div>
                            <div class="col-md-3">
                                <button class="gallery-btn">ENGINEERING WEEK</button>
                            </div>
                            <div class="col-md-3">
                                <button class="gallery-btn">OUTSIDE CAMPUS ACTIVITIES</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <a class="gallery-box" href="<?php echo base_url(); ?>assets/img/1.jpg" data-lightbox="image-1" data-title="Your caption">
                        <img src="<?php echo base_url(); ?>assets/img/1.jpg" class="img-responsive" alt="1">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-caption-content">
                                <div class="gallery-category text-faded">
                                    Category
                                </div>
                                <div class="gallery-name">
                                     Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="gallery-box" href="<?php echo base_url(); ?>assets/img/1.jpg" data-lightbox="image-1" data-title="Your caption">
                        <img src="<?php echo base_url(); ?>assets/img/1.jpg" class="img-responsive" alt="1">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-caption-content">
                                <div class="gallery-category text-faded">
                                    Category
                                </div>
                                <div class="gallery-name">
                                 Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="gallery-box" href="<?php echo base_url(); ?>assets/img/1.jpg" data-lightbox="image-1" data-title="Your caption">
                        <img src="<?php echo base_url(); ?>assets/img/1.jpg" class="img-responsive" alt="1">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-caption-content">
                                <div class="gallery-category text-faded">
                                    Category
                                </div>
                                <div class="gallery-name">
                                     Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="gallery-box" href="<?php echo base_url(); ?>assets/img/1.jpg" data-lightbox="image-1" data-title="Your caption">
                        <img src="<?php echo base_url(); ?>assets/img/1.jpg" class="img-responsive" alt="1">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-caption-content">
                                <div class="gallery-category text-faded">
                                    Category
                                </div>
                                <div class="gallery-name">
                                     Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="gallery-box" href="<?php echo base_url(); ?>assets/img/1.jpg" data-lightbox="image-1" data-title="Your caption">
                        <img src="<?php echo base_url(); ?>assets/img/1.jpg" class="img-responsive" alt="1">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-caption-content">
                                <div class="gallery-category text-faded">
                                    Category
                                </div>
                                <div class="gallery-name">
                                     Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="gallery-box" href="<?php echo base_url(); ?>assets/img/1.jpg" data-lightbox="image-1" data-title="Your caption">
                        <img src="<?php echo base_url(); ?>assets/img/1.jpg" class="img-responsive" alt="1">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-caption-content">
                                <div class="gallery-category text-faded">
                                    Category
                                </div>
                                <div class="gallery-name">
                                     Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- GALLERY -->

