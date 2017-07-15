<!-- NAVBAR -->
    <header id="header" role="banner">      
        <div class="main-nav">
            <div class="container">
                <div class="header-top">
                    <?php

                    if($authorization == ""){
                        echo '<div class="pull-right">';
                        echo '<p>Hello! <b>Guest,</b><a href="' . base_url() . 'login">Log In</a> | <a href="' . base_url() . 'register">Register</a> </p>';
                        echo '</div>';
                    } else {
                        echo '<div class="pull-right">';
                        echo '<p>Hello! <b>' . $authorization . ',</b><a href="' . base_url() . 'profile">My Profile</a> | <a href="' . base_url() . 'logout">Log Out</a> </p>';
                        echo '</div>';
                    }

                    ?>
                </div>     
                <div class="row">                   
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo base_url(); ?>">
                            <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/access-logo.png" alt="logo">
                        </a>                
                    </div>
                    <div class="collapse navbar-collapse">
                        <div class="nav navbar-nav navbar-left">
                            <p>ASSOCIATION OF CONCERNED <br> COMPUTER ENGINEERING STUDENTS FOR SERVICES</p>
                        </div>
                        <ul class="nav navbar-nav navbar-right">                 
                            <li id="navhome" class="scroll"><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li id="navevents" class="scroll"><a href="<?php echo base_url(); ?>events">Events</a></li>
                            <li id="navannouncements" class="scroll"><a href="<?php echo base_url(); ?>announcement">Announcements</a></li>
                            <li id="navabout" class="scroll"><a href="<?php echo base_url(); ?>about">About Us</a></li>
                            <li id="navabout" class="scroll"><a href="<?php echo base_url(); ?>services">Services</a></li>
                            <li class="scroll"><a href="<? echo base_url().'search'; ?>" data-toggle="collapse" data-target="#navbar-search" role="button"><span class="glyphicon glyphicon-search"></span></a></li>       
                        </ul>
                    </div>
                    <!-- Navbar Seach
                    <div class="collapse navbar-search-container" id="navbar-search">
                        <form role="search">
                            <div class="form-group">
                                <div class="input-search">
                                    <span class="glyphicon glyphicon-search"></span>
                                    <input type="text" class="form-control" name="site-search" placeholder="Search ...">
                                    <button type="button" data-target="#navbar-search" data-toggle="collapse" aria-label="Close">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    End navbar Seach -->
                    </div>
                </div>
            </div>
        </div>                    
    </header>
<!-- NAVBAR -->