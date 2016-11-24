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
          <button type="button" class="navbar-toggle collapsed" style="position: relative;float: right;padding: 9px 10px;margin-top: 17px;margin-right: 1px;margin-bottom: 8px;background-color: rgb(127, 127, 133);background-image: none;border: 1px solid #7f7f85;border-radius: 4px;" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
                <a class="dropdown-toggle" style="padding-top: 11px;line-height: 30px;padding-bottom:9px;" data-toggle="dropdown" href="#"><img src="<?php echo cloud('avatar/wew.jpg') ?>" width="45" height="45" alt="" style="border-radius:25px" class="avatar alignnone photo avatar-default"> <?php print $this->session->userdata('nama_user'); ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu" style="min-width:200px;">
                  <div style="color:#333;margin-left:17px">Signed in as</div>
                  <div style="color:#333;margin-left:17px;font-weight: 500;"><?php print $this->session->userdata('username'); ?></div>
                  <li class="divider"></li>
                  <li><a href="<?php print base_url() ?>user/dashboard/"><i class="fa fa-home"></i> Dashboard</a></li>
                  <li><a href="<?php print base_url() ?>user/label/"><i class="fa fa-folder-open"></i> Your label</a></li>
                  <li><a href="<?php print base_url() ?>user/bookmark/"><i class="fa fa-bookmark"></i> Your bookmark</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php print base_url() ?>user/setting/"><i class="fa fa-cogs"></i> Setting</a></li>
                  <li><a href="<?php print base_url() ?>user/dashboard/logout/"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          <?php }else{ ?>
              <div  class="navbar-form navbar-right" style = 'margin-top:13px;'>
                <?php if($this->uri->segment(1) == "join") { ?>
                <a href="<?php print base_url() ?>login?source=header&generate_token=<?php echo $this->security->get_csrf_hash(); ?>&utf8=✓" class="btn btn-default" style="padding: 9px 15px;font-family:Roboto;font-weight:normal"><i class="fa fa-sign-in"></i> Sign in</a>
                <?php }else { ?>
                  <a href="<?php print base_url() ?>login?source=header&generate_token=<?php echo $this->security->get_csrf_hash(); ?>&utf8=✓" class="btn btn-default" style="padding: 9px 15px;font-family:Roboto;font-weight:normal"><i class="fa fa-sign-in"></i> Sign in</a>
  				        <a href="<?php print base_url() ?>join?source=header&generate_token=<?php echo $this->security->get_csrf_hash(); ?>&utf8=✓" class="btn btn-success" style="padding: 9px 15px;font-family:Roboto;font-weight:normal"><i class="fa fa-user-plus"></i> Sign up</a>
                <?php } ?>
              </div>
         <?php } ?>
        </div>
      </div>
    </nav>
