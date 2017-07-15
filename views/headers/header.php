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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/home.css">
</head>
<body>

<div class="container navbar">
  <div class="row top-nav">
    <div class="col-md-1 logo">
      <img src="<?php echo base_url(); ?>assets/img/logo-access.png" alt="access-logo">
    </div>
    <div class="col-md-9 title">
      <h4>ACCESS</h4>
      <h5><span>A</span>ssociation of <span>C</span>oncerned <span>C</span>omputer <span>E</span>ngineering <span>S</span>tudents for <span>S</span>ervice</h5>
    </div>
    <div class="col-md-2 auth">
      <h4>&nbsp;</h4>
      <h5>Hi, <span>Guest<span>!</h5>
    </div>
  </div>
  <nav>
    <div class="row">
      <div class="col-md-9 navlist">
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="#">EVENTS</a></li>
          <li><a href="#">GALLERY</a></li>
          <li><a href="#">CONTACT US</a></li>
          <li><a href="#">ABOUT US</a></li>
        </ul>
      </div>
      <div class="col-md-3 search">
        <div class="form-group">
          <input type="text" name="search" placeholder="Search" class="form-control search-input">
          <span class="glyphicon glyphicon-search"></span>
        </div>
      </div>
    </div>
  </nav>
</div>
