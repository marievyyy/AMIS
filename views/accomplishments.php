<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ACCESS | Accomplishments</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-access.ico">

    <!-- CSS -->
    <link href ="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/accomplishments.css"> 
    

    </head>
   

    <!-- HEADER PAGE -->
    <section id="accomplishments-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <!-- TITLE -->
            <h1>ACCOMPLISHMENTS</h1> 
          </div>

          <div class="col-md-12">
          <!-- TITLE DETAILS -->
            <p>ACCESS, CpE Department, and CpE Students Accomplishment will be summaried and posted in here. </p>
          </div>
        </div>
      </div>
    </section>
<?php 

foreach(array_slice(array_reverse($accomplishments), 1, 1) as $row):
$imgs = explode(',', $row->accomplishmentImage);

?>
    <div id="accomplishments-content">
        <div class="container-fluid">
            <div class="accomplishments-list">
                <h2 class="group-title"><?php echo $row->accomplishmentTitle . ' ' . $row->accomplishmentYear; ?></h2>
            </div>
        </div>
    </div>

        <!-- GALLERY -->
    <div id="gallery">
        <div class="container">            
            <div class="row">
                <div class="col-lg-4 col-sm-6 container-img">
                    <a class="gallery-box" href="<?php echo base_url(); ?>assets/img/1.jpg" data-lightbox="image-1" data-title="Your caption">
                        <img src="http://amiscms.likesyou.org/uploads/<?php echo $imgs[0]; ?>" alt="1">
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 container-img">
                    <a class="gallery-box" href="<?php echo base_url(); ?>assets/img/1.jpg" data-lightbox="image-1" data-title="Your caption">
                        <img src="http://amiscms.likesyou.org/uploads/<?php echo $imgs[1]; ?>" alt="1">
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 container-img">
                    <a class="gallery-box" href="<?php echo base_url(); ?>assets/img/1.jpg" data-lightbox="image-1" data-title="Your caption">
                        <img src="http://amiscms.likesyou.org/uploads/<?php echo $imgs[2]; ?>" alt="1">
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 container-img">
                    <a class="gallery-box" href="<?php echo base_url(); ?>assets/img/1.jpg" data-lightbox="image-1" data-title="Your caption">
                        <img src="http://amiscms.likesyou.org/uploads/<?php echo $imgs[3]; ?>" alt="1">
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 container-img">
                    <a class="gallery-box" href="<?php echo base_url(); ?>assets/img/1.jpg" data-lightbox="image-1" data-title="Your caption">
                        <img src="http://amiscms.likesyou.org/uploads/<?php echo $imgs[4]; ?>" alt="1">
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 container-img">
                    <a class="gallery-box" href="<?php echo base_url(); ?>assets/img/1.jpg" data-lightbox="image-1" data-title="Your caption">
                        <img src="http://amiscms.likesyou.org/uploads/<?php echo $imgs[5]; ?>" alt="1">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- GALLERY -->

    <div class="accomplishments-subtitle">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php echo $row->accomplishmentSubtitle; ?></h2>
                    <hr class="divider">
                    <p><?php echo $row->accomplishmentNarrative; ?></p>                   
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>