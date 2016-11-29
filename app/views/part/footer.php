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
