<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ACCESS | About Us</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-access.ico">

    <!-- CSS -->
    <link href ="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/about.css"> 
    

    </head>
    <body>
      

        <div class="abt-bg-image">
            <div class="container">
                <div class="col-md-12" align="center">
                    <h1>ACCESS</h1>
                    <h3>- ABOUT US -</h3>
                </div>
            </div>
        </div>

        <div class="about-us">
            <div class="container-fluid">
                <div class="row about-details">
                    <div class="col-sm-6 col-md-6 about-info">
                        <p class="story-title">ABOUT <span class="access-orange">US</span></p>
                        <hr class="star-dark"/>
                        <p class="story-desc">
                            ACCESS or Association of Concerned Computer Engineering Students for Service is the mother organization of Computer Engineering Students of Computer Engineering Department, Polytechnic University of the Philippines. ACCESS aims to provide CpE Students with basic services to keep them up in their college life. ACCESS is located at PUP College of Engineering and Architecture Building, Pureza corner Anonas Street Sta. Mesa Manila.
                        </p>
                    </div>
                    <div class="col-md-6 about-image">
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="our-team">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 team-details">
                            <p class="team-title">PEOPLE<span class="access-orange"><br> ON</span> OUR<span class="access-orange"> TEAM </span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 images" align="center">
                        <div class="row">
                            <?php


                            foreach(array_slice($people, 0, 3) as $row) {
                                echo '<div class="col-md-4 access-officer">';
                                echo '<div class="item">';
                                echo '<img src="http://amiscms.likesyou.org/uploads/'. $row->officerImage .'" alt="access-officer">';
                                echo '</div>';
                                echo '<div class="officer-caption">';
                                echo '<p class="officer-position">' . $row->officerPosition . '</p>';
                                echo '<p class="officer-name">' . $row->officerFirstName . ' ' . $row->officerMiddleInitial . ' ' .  $row->officerLastName . '</p>';
                                echo '</div>';
                                echo '</div>';
                            }

                            ?>
                        </div>
                        <div class="row">
                            <?php


                            foreach(array_slice($people, 3, 3) as $row) {
                                echo '<div class="col-md-4 access-officer">';
                                echo '<div class="item">';
                                echo '<img src="http://amiscms.likesyou.org/uploads/'. $row->officerImage .'" alt="access-officer">';
                                echo '</div>';
                                echo '<div class="officer-caption">';
                                echo '<p class="officer-position">' . $row->officerPosition . '</p>';
                                echo '<p class="officer-name">' . $row->officerFirstName . ' ' . $row->officerMiddleInitial . ' ' .  $row->officerLastName . '</p>';
                                echo '</div>';
                                echo '</div>';
                            }

                            ?>
                        </div>
                        <div class="row">
                            <?php


                            foreach(array_slice($people, 6, 3) as $row) {
                                echo '<div class="col-md-4 access-officer">';
                                echo '<div class="item">';
                                echo '<img src="http://amiscms.likesyou.org/uploads/'. $row->officerImage .'" alt="access-officer">';
                                echo '</div>';
                                echo '<div class="officer-caption">';
                                echo '<p class="officer-position">' . $row->officerPosition . '</p>';
                                echo '<p class="officer-name">' . $row->officerFirstName . ' ' . $row->officerMiddleInitial . ' ' .  $row->officerLastName . '</p>';
                                echo '</div>';
                                echo '</div>';
                            }

                            ?>
                        </div>
                        <div class="row">
                            <?php


                            foreach(array_slice($people, 9, 3) as $row) {
                                echo '<div class="col-md-4 access-officer">';
                                echo '<div class="item">';
                                echo '<img src="http://amiscms.likesyou.org/uploads/'. $row->officerImage .'" alt="access-officer">';
                                echo '</div>';
                                echo '<div class="officer-caption">';
                                echo '<p class="officer-position">' . $row->officerPosition . '</p>';
                                echo '<p class="officer-name">' . $row->officerFirstName . ' ' . $row->officerMiddleInitial . ' ' .  $row->officerLastName . '</p>';
                                echo '</div>';
                                echo '</div>';
                            }

                            ?>
                        </div>
                        <div class="row">
                            <?php


                            foreach(array_slice($people, 12, 3) as $row) {
                                echo '<div class="col-md-4 access-officer">';
                                echo '<div class="item">';
                                echo '<img src="http://amiscms.likesyou.org/uploads/'. $row->officerImage .'" alt="access-officer">';
                                echo '</div>';
                                echo '<div class="officer-caption">';
                                echo '<p class="officer-position">' . $row->officerPosition . '</p>';
                                echo '<p class="officer-name">' . $row->officerFirstName . ' ' . $row->officerMiddleInitial . ' ' .  $row->officerLastName . '</p>';
                                echo '</div>';
                                echo '</div>';
                            }

                            ?>
                        </div>
                        <div class="row">
                            <?php

                            foreach(array_slice($people, 15, 1) as $row) {
                                echo '<div class="col-md-4 access-officer">';
                                echo '<div class="item">';
                                echo '<img src="http://amiscms.likesyou.org/uploads/'. $row->officerImage .'" alt="access-officer">';
                                echo '</div>';
                                echo '<div class="officer-caption">';
                                echo '<p class="officer-position">' . $row->officerPosition . '</p>';
                                echo '<p class="officer-name">' . $row->officerFirstName . ' ' . $row->officerMiddleInitial . ' ' .  $row->officerLastName . '</p>';
                                echo '</div>';
                                echo '</div>';
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>            
        </div>


        <div class="container-fluid advisers">
            <div class="row">
                <div class="col-md-12 advisers-title">
                    <p class="team-title">OUR<span class="access-orange"><br> ADVISERS</span></p>
                </div>
            </div>
            <div class="row team-details">
                <div class="col-xs-12 col-sm-12 col-md-12 images" align="center">
                    <div class="row access-officer">
                        <?php

                        foreach(array_slice($people, 16, 3) as $row) {
                            echo '<div class="col-md-4">';
                                echo '<div class="item">';
                                echo '<img src="http://amiscms.likesyou.org/uploads/'. $row->officerImage .'" alt="access-officer">';
                                echo '<div class="officer-caption">';
                                echo '<p class="officer-position">' . substr($row->officerPosition, 0, 7) . '</p>';
                                echo '<p class="officer-name">' . $row->officerFirstName . ' ' . $row->officerMiddleInitial . ' ' .  $row->officerLastName . '</p>';
                                echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="accomplishment" align="center">
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-md-6">
                        <a href="<?php echo base_url(); ?>accomplishments"><h2>View ACCESS Accomplishments</h2></a> 
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo base_url(); ?>financial"><h2>View ACCESS Financial Report</h2></a> 
                    </div>
                </div>
            </div>
        </div>

        <section class="container-fluid location-container">
            <div class="container">
                <h1 class="contact-call">What Are You Waiting For? Join Us Today!</h1>
            </div>
        </section>



