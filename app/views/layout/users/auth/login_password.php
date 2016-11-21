<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Penandaku.com - Layanan Penyedia Bookmark Online.">
    <link rel="icon" href="<?php print cdn('img/home.svg') ?>">
    <title><?php print $title ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="<?php print cdn('css/font-awesome/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?php print cdn('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php print cdn('css/jumbotron.css') ?>">
  </head>
  <body style="background-color:#fff">
    <div class="container" style="margin-top:30px">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <div class="login-logo">
          <a href="<?php echo base_url() ?>"> <img src="<?php echo cdn('img/logo-login.png') ?>" style="width:300px;margin-bottom:10px;padding:0px 0px"></a>
        </div>
          <div class="card-login" style="font-family:'Roboto'">
            <div class="panel-body body-login">
              <?php
                  //kondisi image user
                  $photo = $this->session->userdata('foto_user');
                  if($photo == "")
                  {
                    $path = cdn('img/user-thumb.png');
                  }else{
                    $path = cloud('avatar/'.$photo.'');
                  }
              ?>
              <div class="thumb-login" style="background-image: url('<?php echo $path ?>')">
                <canvas id="canvas" class="circle" width="96" height="96"></canvas>
              </div>
              <div class="user-register">
                <?php  echo $this->session->userdata('nama_user');  ?>
              </div>
              <?php
                $attributes = array('id' => 'frm_login');
                echo form_open('login/next?source=header&utf8=✓', $attributes)
                ?>

                <div class="form-group">
                  <input type="password" name="password" class="form-control"  style="height:44px;font-size:16px" value="<?php echo set_value('password') ?>" placeholder="Enter password">
                  <?php echo form_error('password'); ?>
                  <div class="error-login" style="margin-top:10px;">
                    <?php if(isset($error)) { echo $error; }; ?>
                  </div>
                </div>
                <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Signing in..." class="penandaku-btn-login btn btn-sm btn-success">Sign in</button>
              <?php echo form_close(); ?>
              <div class="forgot" style="margin-top:10px;float:right">
                <a href="<?php echo base_url() ?>login/forgot?source=header&utf8=✓"> Lupa password ?</a>
              </div>
            </div>
        </div>

        <div class="text-center">
          <a href="<?php //echo $this->facebook->login_url(); ?>" class="btn-green-primary btn" style="background: #3b5999;color:#fff;"><i class="fa fa-facebook"></i> Facebook</a>
          <a href="<?php //echo $this->google->login_url(); ?>" class="btn-green-primary btn" style="background: #dc4e41;color:#fff"><i class="fa fa-google-plus"></i> Google +</a>
        </div>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <script src="<?php print cdn('js/jquery.min.js') ?>"></script>
    <script src="<?php print cdn('js/bootstrap.min.js') ?>"></script>
    <script src="<?php print cdn('js/custom.js') ?>"></script>
    <script>
      $('.penandaku-btn-login').on('click', function() {
          var $this = $(this);
              $this.button('loading');
              setTimeout(function() {
                $this.button('reset');
              }, 2000);
      });
    </script>
  </body>
</html>
