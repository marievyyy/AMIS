<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->helper('url');
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ERROR 404</title>

        <!-- CSS -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/index.css"/> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/commons.css"/>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/auth.js"></script>
        
    </head>

<body>


<!-- END OF NAVIGATION -->

    <div>
        <!-- For the banner section -->
        <div>
            <figure>
                <div class="main-banner">
                </div>
            </figure>
            <figure>
                <div class="main-banner two">
                </div>
            </figure>
            <figure>
                <div class="main-banner three">
                </div>
            </figure>
        </div>

        <!-- Login section -->

        <div>
            <div class="login-container" class-md="w-75%" padding-md="l10 r0" margin-md="t50">
                <h1>404</h1>
                <h4>Oooops, Something goes wrong</h4>
                <button>Go back to Home Page</button>
            </div>
        </div>
    </div>

  </body>
</html>