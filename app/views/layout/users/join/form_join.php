<div class="container">
  <div class="row">
    <div class="text-center" style="text-align: center;color: #555;font-size: 30px;font-weight: 300;margin-top: 50px;margin-bottom: 50px;">
      Create your account
    </div>
    <div class="col-md-12">
      <div class="col-md-8">
      </div>
      <div class="col-md-4">
        <div class="card-login" style="font-family:'Roboto'">
          <div class="panel-body body-login" style="padding:20px 20px">
            <div class="error-login" style="margin-top:10px;">
              <?php if(isset($error)) { echo $error; }; ?>
            </div>
            <?php
              $attributes = array('id' => 'frm_login');
              echo form_open('join?source=header&utf8=✓', $attributes)
              ?>
              <div class="form-group">
                <label style="font-weight:400">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control"  style="height:40px;font-size:16px" value="<?php echo set_value('nama') ?>" placeholder="Masukkan Nama Lengkap">
                <?php echo form_error('nama'); ?>
              </div>
              <div class="form-group">
                <label style="font-weight:400">Alamat Email</label>
                <input type="text" name="email" class="form-control"  style="height:40px;font-size:16px" value="<?php echo set_value('email') ?>" placeholder="Masukkan Alamat Email">
                <?php echo form_error('email'); ?>
              </div>
              <div class="form-group">
                <label style="font-weight:400">Username</label>
                <input type="text" name="username" class="form-control"  style="height:40px;font-size:16px" value="<?php echo set_value('username') ?>" placeholder="Masukkan Username">
                <?php echo form_error('username'); ?>
              </div>
              <div class="form-group">
                <label style="font-weight:400">Password</label>
                <input type="text" name="password" class="form-control"  style="height:40px;font-size:16px" value="<?php echo set_value('password') ?>" placeholder="Masukkan Password">
                <?php echo form_error('password'); ?>
              </div>
              <div class="form-group">
                <?php echo $recaptcha_html;?>
              </div>
              <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Creating account..." class="penandaku-btn-login btn btn-sm btn-success">Create a account</button>
            <?php echo form_close(); ?>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>
<hr style="margin-top:100px;width:100%">
