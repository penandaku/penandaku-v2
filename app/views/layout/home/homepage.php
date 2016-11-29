<div class="jumbotron" style="background-image: url('<?php print cdn('img/bg-header-4.jpg') ?>'); position:relative;background-color:#333">
  <div class="container" style="color:#fff;margin-top:15px">
    <div class="col-md-8">
    <h2 style="font-family: 'Roboto'; font-weight:300;font-size:40px;margin-top:100px;margin-bottom:25px"><strong>PENANDA</strong> KU<br> Layanan Penyimpanan Bookmark Online</h2>
    <p style="font-family: 'Roboto'; font-weight:100;font-size:25px">Aplikasi sederhana untuk menyimpan dan akses Bookmark secara online dimanapun dan kapanpun.</p>
    </div>
    <div class="col-md-4" style="margin-top:30px">
      <div class="sign-up-home">
      <?php
        $attributes = array('id' => 'frm_login');
        echo form_open(base_url('join/source_home?&utf8=✓'), $attributes)
        ?>
        <div class="form-group">
          <input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>" id="username" placeholder="Masukkan Username." style="height:45px;font-size:16px;font-family:'Roboto';font-weight:normal">
          <?php echo form_error('username'); ?>
        </div>
        <div class="form-group">
          <input type="text" name="email" class="form-control" value="<?php echo set_value('email') ?>" id="email" placeholder="Masukkan email address." style="height:45px;font-size:16px;font-family:'Roboto';font-weight:normal">
          <?php echo form_error('email'); ?>
        </div>
        <div class="form-group">
          <input type="text" name="password" class="form-control" value="<?php echo set_value('password') ?>" id="password" placeholder="Masukkan Password." style="height:45px;font-size:16px;font-family:'Roboto';font-weight:normal">
          <?php echo form_error('password'); ?>
        </div>
        <div class="form-group">
          <?php echo $recaptcha_html;?>
        </div>
          <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Creating account..." class="penandaku-btn-register btn btn-success btn-lg">Create an account</button>
          <span class="penandaku-note-register text-center">
            Dengan mengeklik "Create Account", berarti anda menyetujui
            <a class="text-white" href="<?php print base_url() ?>terms/" target="_blank">layanan</a> and
            <a class="text-white" href="<?php print base_url() ?>policies/" target="_blank">kebijakan privacy</a> <span class="js-email-notice">kami.</span>
          </span>
      <?php echo form_close(); ?>
    </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-9" style="font-family:'Roboto';font-weight:300;font-size:19px">
        <p style="font-size:25px;"> Tentang Kami</p>
        <p>Penandaku adalah App penyedia layanan penyimpanan bookmark secara online, sehingga anda tidak perlu kawatir menyimpan dan mengakses bookmark anda dimanapun dan kapanpun saja.</p>
    </div>
    <div class="col-md-3">
      <img class="img-responsive" src="<?php print cdn('img/penandaku-laptop.png') ?>" style="width:100%;margin-left:50px">
    </div>
  </div>

  <div class="row" style="font-family:'Roboto';font-weight:300;font-size:16px">
    <div class="penandaku-batas"></div>
      <div class="col-md-12">
        <div class="col-md-4">
          <p style="font-size:20px;text-align:center"><i class='fa fa-database'></i> UNLIMITED</p>
          <p style="font-size:18px;">Layanan penyimpanan dengan kapasitas tidak terbatas atau unlimited anda tidak perlu kawatir untuk menyimpan ribuan bahkan jutaan data.</p>
        </div>
        <div class="col-md-4">
          <p style="font-size:20px;text-align:center"><i class='fa fa-lock'></i> PRIVACY</p>
          <p style="font-size:18px;">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
       </div>
        <div class="col-md-4">
          <p style="font-size:20px;text-align:center"><i class='fa fa-cloud'></i> CLOUD</p>
          <p style="font-size:18px;">Data anda akan kami tempatkan di server cloud kami dengan teknologi SSD (Solid State Hybrid).</p>
        </div>
     </div>
   <div class="penandaku-batas"></div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <img class="img-responsive" src="<?php print cdn('img/penandaku-laptop.png') ?>" style="width:100%;">
    </div>
    <div class="col-md-9" style="font-family:'Roboto';font-weight:300;font-size:19px">
        <p style="font-size:25px;"> Join Developers</p>
        <p>Jadilah salah satu dari team kami, untuk pengembangan penandaku kedepannya, available jobs for programmer, UI/UX Designer, Backend Developer, Mobile Developer, dll.</p>
        <a href="<?php //echo $this->facebook->login_url(); ?>" class="btn-green-primary btn btn-md" style="background: #333;color:#fff;"><i class="fa fa-github"></i> Join on Github</a>
    </div>
  </div>

  </div>
  <hr style="margin-top:100px;width:100%">
