<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Access | Search</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-access.ico">


    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>


    <!-- CSS -->
    <link href ="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbardark.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/search.css"> 

  </head>

<body>

<div class="search-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
    </div>
</div>

<div class="search-main">
  <div class="container">
    <div id="searchpage-header" class="divider">
      <div class="row">
        <div class="search-title">
          <h1>Search Posts</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="search-container">
    <div class="container">
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="dropdown">
                    <button class="dropbtn">Sorted from: Newest to Oldest</button>
                    <div class="dropdown-content">
                        <a href="#">Sorted from: Alphabetical(a-z)</a>
                        <a href="#">Sorted from: Alphabetical(z-a)</a>
                        <a href="#">Sorted from: Date(New-Old)</a>
                        <a href="#">Sorted from: Date(Old-New)</a>
                    </div>
                </div>
            </div>
        </div>
 -->        <div class="row">
            <div class="col-md-12">
                <form class="wrapper" method="post" action="<?php echo base_url() . "search"; ?>">
                    <div class="searchArea" align="center">
                        <input type="text" placeholder="Search" value="<?php echo set_value('search'); ?>" class="search" name="search" />         
                        <button class="searchBtn" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="search-details">
                    <ul>
                    <?php if($total > 0){ ?>
                        <?php for($i=0; $i < count($results); ++$i){ ?>
                            <li>
                                <h3><?php echo $results[$i]->postTitle; ?></h3>
                                <h6><?php echo date("F j, Y", strtotime($results[$i]->eventDate)); ?></h6>
                                <p><?php echo substr($results[$i]->postDetails, 0, 250); ?>...</p>
                                <div class="button">
                                <?php 
                                    if(substr($results[$i]->postCode, 0, 2) == 'EV') {
                                        echo '<a href="http://amis.likesyou.org/events/view_event/' . $results[$i]->postCode . '"><button class="more">See Event</button></a>';
                                    } else if(substr($results[$i]->postCode, 0, 2) == '') {
                                        echo '<a href="http://amis.likesyou.org/announcement/"><button class="more">See Announcements</button></a>';
                                    }
                                ?>
                                </div>
                            </li>
                        <?php } ?>
                    <?php } else { ?>
                        <h3 align="center"> No results found. </h3>
                    <?php } ?>
                        <!-- <li>
                            <h3>Lorem ipsum</h3>
                            <h6>October 2, 2016</h6>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="button">
                              <button class="more">See More</button>
                            </div>
                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-container">
  <div class="container">
    <div class="row" align="center">
      <div class="col-md-12">
        <div class="page">
          <?php echo $links; ?>
        </div>
      </div>
    </div>
  </div>
</div>



    