<div class="modal fade" id="DeleteAccount" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Apakah Anda benar-benar yakin?</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning">
          <strong>Perhatian!</strong> Baca pesan peringatan dibawah ini.
        </div>

        <?php
          $attributes = array('id' => 'frm_login');
          echo form_open('user/dashboard/delete/', $attributes)
          ?>
          <div class="form-group">
            <p>
              Tindakan ini munkin tidak bisa dipulihkan, ini akan menghapus account Anda secara permanen.
            </p>
            <label style="font-weight:normal;margin-bottom:5px" for="username">Silahkan masukan username Anda untuk mengkonfirmasi.</label>
            <input type="text" name="username" class="form-control" id="username">
          </div>
          <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Deleting..." class="penandaku-btn-destroy btn btn-default btn-md" style="width:100%;color:#df3e3e;padding: 9px 12px;">saya mengerti, tetap lanjutkan hapus</button>
          <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="container">
    <p style="font-family: 'Roboto'; font-weight:normal;font-size:15px">Copyright &copy; 2016 Penandaku, Inc. All Rights Reserved. <span style="float:right"> <a v-bind:href='url_about' style="margin-left:20px"> About</a> <a v-bind:href='url_feedback' style="margin-left:20px"> Feedback</a> <a v-bind:href='url_bug' style="margin-left:20px"> Report Bug</a> <a v-bind:href='url_terms' style="margin-left:20px">Terms of Us</a> <a v-bind:href='url_policies' style="margin-left:20px"> Privacy Policy</a> </span> </p>
  </div>
</footer>
<script src="<?php print cdn('js/jquery.min.js') ?>"></script>
<script src="<?php print cdn('js/bootstrap.min.js') ?>"></script>
<script src="<?php print cdn('js/vue.js') ?>"></script>
<script src="<?php print cdn('js/vue-router.js') ?>"></script>
<script src="<?php print cdn('js/toastr.js') ?>"></script>
<script src="<?php print cdn('js/custom.js') ?>"></script>
<script>
    jQuery(document).ready(function() {
       <?php print $this->session->flashdata("pesan_notif"); ?>
    });
    $('.penandaku-btn-register').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 1000);
    });
    $('.penandaku-btn-join').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 1000);
    });
    $('.penandaku-login').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 1000);
    });
    $('.penandaku-btn-feedback').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 1000);
    });
    $('.penandaku-btn-bug').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 1000);
    });
    $('.penandaku-btn-destroy').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 1000);
    });
    $('.penandaku-btn-login').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 1000);
    });
</script>
</div>
</body>
</html>
