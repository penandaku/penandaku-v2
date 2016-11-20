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
    <div class="container" style="margin-top:70px">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <div class="login-logo">
            <a href="<?php echo base_url() ?>"> <img src="<?php echo cdn('img/logo-login.png') ?>" style="width:300px;margin-bottom:10px;padding:0px 0px"></a>
        </div>
        <div class="card-login" style="font-family:'Roboto';padding:30px 30px">
          akun belum aktif, silahkan mengaktifkan akun melalui link pada email anda
        </div>
        <div class="button-verify">
          <a href="<?php echo base_url() ?>" type="reset" class="btn btn-success" style="width:100%">Kembali ke Beranda</a>
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
