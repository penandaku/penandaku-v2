<div class="container" style="margin-top:50px">
  <div class="row">
    <div class="col-md-3">
      <div class="list-group">
        <div class="list-group-item" style="background-color:#f5f5f5">Panel System</div>
        <a href="<?php print base_url() ?>user/dashboard/" class="list-group-item <?php if(isset($dashboard)) { echo 'active-panel-member'; } ?>"><i class="fa fa-home"></i> Dashboard </a>
        <a href="<?php print base_url() ?>user/bookmark/" class="list-group-item <?php if(isset($bookmark)) { echo 'active-panel-member'; } ?>"><i class="fa fa-bookmark"></i> Kelola Bookmark</a>
        <a href="<?php print base_url() ?>user/label/" class="list-group-item <?php if(isset($label)) { echo 'active-panel-member'; } ?>"><i class="fa fa-folder"></i> Kelola Label</a>
        <a href="<?php print base_url() ?>user/export/" class="list-group-item <?php if(isset($export)) { echo 'active-panel-member'; } ?>"><i class="fa fa-cloud-download"></i> Export Bookmark</a>
        <a href="<?php print base_url() ?>user/bookmark/delete/" class="list-group-item <?php if(isset($delete)) { echo 'active-panel-member'; } ?>"><i class="fa fa-times-circle"></i> Hapus Bookmark</a>
      </div>
      <div class="list-group">
        <div class="list-group-item" style="background-color:#f5f5f5">Account Setting</div>
          <a href="<?php print base_url() ?>user/api/" class="list-group-item <?php if(isset($api)) { echo 'active-panel-member'; } ?>"><i class="fa fa-fire"></i> Api Token</a>
          <a href="<?php print base_url() ?>user/setting/" class="list-group-item <?php if(isset($setting)) { echo 'active-panel-member'; } ?>"><i class="fa fa-cogs"></i> Setting</a>
      </div>
    </div>
