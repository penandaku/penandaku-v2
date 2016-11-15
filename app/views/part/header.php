<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Penandaku.com - Layanan Penyedia Bookmark Online.">
    <link rel="icon" href="<?php print cdn('img/favicon.png') ?>">
    <title><?php print $title ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="<?php print cdn('css/font-awesome/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?php print cdn('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php print cdn('css/jumbotron.css') ?>">
  </head>
  <body>
    <nav class="penandaku-navbar navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="penandaku-logo-navbar" href="<?php print base_url() ?>">
               <img class="penandaku-logo" src="<?php print cdn('img/wew.svg') ?>" alt="Penandaku.com - Simple Apps for Save and Access <br> Bookmark online" />
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php if($this->session->userdata('users_id')) { ?>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a class="dropdown-toggle" style="padding-top: 10px;line-height: 30px;padding-bottom:9px;" data-toggle="dropdown" href="#"><img src="https://www.gravatar.com/avatar/568a6cd892b6be27a4331830f99b94c1?s=100?s=45&amp;d=mm&amp;r=g" width="45" height="45" alt="" style="border-radius:25px" class="avatar alignnone photo avatar-default"> <?php print $this->session->userdata('nama_user'); ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php print base_url() ?>user/dashboard/"><i class="fa fa-home"></i> Dashboard</a></li>
                  <li><a href="<?php print base_url() ?>user/dashboard/"><i class="fa fa-folder-open"></i> Your label</a></li>
                  <li><a href="<?php print base_url() ?>user/dashboard/"><i class="fa fa-bookmark"></i> Your bookmark</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php print base_url() ?>user/setting/"><i class="fa fa-cogs"></i> Setting</a></li>
                  <li><a href="<?php print base_url() ?>user/dashboard/logout/"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
              </li>
            </ul>

          <?php }else{ ?>
            <?php
              $attributes = array('id' => 'frm_login', 'class' => 'navbar-form navbar-right', 'style' => 'margin-top:16px');
              echo form_open('login/', $attributes)
              ?>
                <div class="form-group">
                  <input type="text" name="username" placeholder="Enter Username" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" name="password" placeholder="Enter Password" class="form-control">
                </div>
                <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Signing in..." class="penandaku-login btn btn-default" style="font-family:Roboto;font-weight:normal">Sign in</button>
                <a href="<?php print base_url() ?>join?source=header&utf8=✓" type="submit" class="btn btn-success" style="font-family:Roboto;font-weight:normal">Sign up</a>
              <?php echo form_close(); ?>
         <?php } ?>
        </div>
      </div>
    </nav>
