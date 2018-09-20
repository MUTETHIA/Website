<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home-Kelvin Omieno</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>public/images/logo_2.png">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>public/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Ion Icons -->
    <link href="<?php echo base_url(); ?>public/assets/ionicons/css/ionicons.min.css" rel="stylesheet">
    <!-- Flex Slider -->
    <link href="<?php echo base_url(); ?>public/assets/FlexSlider/flexslider.css" rel="stylesheet">
    <!-- Core Style -->
    <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">
        <!-- slider navigation -->

     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/sliderengine/engine1/style.css" />
    <!-- Color Style -->
    <link id="main" href="<?php echo base_url(); ?>public/css/colors/color-01.css" rel="stylesheet">
    <link id="theme" href="<?php echo base_url(); ?>public/css/colors/color-01.css" rel="stylesheet">




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <!-- ==============================================
                    **PAGE LOADER**
        =============================================== -->
  <!--<div id="page-loader">
    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
    </div>
  </div>-->
      <!-- ==============================================
                    **MAIN HEADER**
        =============================================== -->
  <header>
      <div class="top-header">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="welcome-note">
                          <p>Welcome to Kelvin Omieno Personal Website.</p>
                      </div>
                  </div>
                  <div class="col-md-6 col-sm-6 hidden-xs">
                      <div class="top-social">
                          <ul>
                              <li><a href="#"><span class="ion-social-facebook-outline"></span><span class="ion-social-facebook-outline"></span></a></li>
                              <li><a href="#"><span class="ion-social-twitter-outline"></span><span class="ion-social-twitter-outline"></span></a></li>
                              <li><a href="#"><span class="ion-social-linkedin-outline"></span><span class="ion-social-linkedin-outline"></span></a></li>
                              <li><a href="#"><span class="ion-social-dribbble-outline"></span><span class="ion-social-dribbble-outline"></span></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="mid-header">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 col-sm-4 col-xs-12">
                      <a href="#"><img src="<?php echo base_url(); ?>public/images/logo_2.PNG" alt="logo"></a>
                  </div>
                  <div class="col-md-3 col-sm-4 hidden-xs">
                      <article class="contact-item">
                          <div class="media-left">
                              <div class="icon"><span class="ion-ios-telephone-outline"></span></div>
                          </div>
                          <div class="media-body">
                              <h6>Call Us On</h6>
                              <p>+254-726 849 197</p>
                          </div>
                      </article>
                  </div>
                  <div class="col-md-3 col-sm-4 hidden-xs">
                      <article class="contact-item">
                          <div class="media-left">
                              <div class="icon"><span class="ion-ios-email-outline"></span></div>
                          </div>
                          <div class="media-body">
                              <h6>Leave a message</h6>
                              <p>kelvin@kelvinomieono.net</p>
                          </div>
                      </article>
                  </div>
              </div>
          </div>
      </div>
      <div class="menu-header">
          <div class="container">
              <div class="row">
                  <div class="col-md-11 col-sm-11 col-xs-12">
                      <div id="mainmenu">
                          <ul>
                              <li><a href="<?php echo site_url('Site/index'); ?>">Home</a></li>
                              <li><a href="<?php echo site_url('Site/about'); ?>">About</a></li>
                               <li><a href="">News Updates</a></li>
                              <li>
                                  <a href="#">Publications</a>
                                  <ul>
                                      <li><a href="<?php echo site_url('Site/book_publication'); ?>">Book Publication</a></li>
                                      <li><a href="<?php echo site_url('Site/journal_publication'); ?>">Journal Publication</a></li>
                                       <li><a href="<?php echo site_url('Site/conference_publication'); ?>">Conference proceedings</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="#">Downloads</a>
                                  <ul>
                                      <li>
                                          <a href="#">Student Resources</a>
                                          <ul>
                                              <?php
                                                foreach($university as $row){
                                                    $name= $row['name'];
                                                    $id= $row['uniID'];
                                                    ?>
                                                   <li><a href="<?php echo site_url('Site/student_resources/'.$id); ?>"><?php echo $name; ?></a></li>
                                                    <?php
                                                }
                                              ?>
                                          </ul>
                                      </li>

                                      <li><a href="">Other Resources</a></li>


                                  </ul>
                              </li>
                              <li>
                                  <a href="#">My Projects</a>
                                  <ul>
                                      <li>
                                          <a href="#">VLS Model</a></li>
                                        <li><a href="">Project 2</a> </li>
                                  </ul>
                              </li>
                              <li><a href="<?php echo site_url('Site/my_gallery'); ?>">Gallery</a></li>
                              <li><a href="<?php echo site_url('Site/contact'); ?>">Contact</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-md-1 col-sm-1 hidden-xs">
                      <div class="search-holder">
                          <div class="search-icon">
                              <a href="#"><span class="ion-search"></span></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- ==============================================
                    **SEARCH**
        =============================================== -->
      <div class="search-container">
          <div class="container">
              <form>
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search for...">
                              <span class="input-group-btn">
                                  <button class="btn btn-search" type="submit">Search</button>
                              </span>
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->
                  </div><!-- /.row -->
              </form>
          </div>
      </div>
  </header>