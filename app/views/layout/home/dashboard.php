<div class="penandaku-profile">
    <img align="left" class="penandaku-image-lg" src="<?php print cdn('img/sampul.png') ?>" alt="Profile image example"/>
    <img align="left" class="penandaku-image-profile thumbnail" src="<?php echo cloud('avatar/wew.jpg') ?>" alt="Profile image example"/>
      <div class="penandaku-profile-text">
            <h1 style="font-family:Roboto;font-weight:300">Fika Ridaul Maulayya</h1>
            <div class="user-username" style="font-size:20px;font-weight:300"> @maulayyacyber</div>
      </div>
</div>
<hr>
<div class="container" style="margin-top:40px">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
          <div class="card-content" style="border-bottom: 1px solid rgba(160, 160, 160, 0.2);">
             <div class="user-company" style="margin-bottom:5px"><i class="fa fa-building-o"></i> <?php if($this->session->userdata('company') == "") { echo '<span style="color:#e8110c">Company Not Found</span>'; } else { echo $this->session->userdata('company'); } ?></div>
             <div class="user-address" style="margin-bottom:5px"><i class="fa fa-map-marker"></i> <?php if($this->session->userdata('address') == "") { echo '<span style="color:#e8110c">Address Not Found</span>'; } else { echo $this->session->userdata('address'); } ?></div>
             <div class="user-website" style="margin-bottom:5px"><i class="fa fa-globe"></i> <?php if($this->session->userdata('website') == "") { echo '<span style="color:#e8110c">Website Not Found</span>'; } else { echo $this->session->userdata('website'); } ?></div>
             <div class="user-join" style="margin-bottom:5px"><i class="fa fa-clock-o"></i> Joined on <?php if($this->session->userdata('joined') == "") { echo '<span style="color:#e8110c">Joined Not Found</span>'; } else { echo $this->session->userdata('joined'); } ?></div>
          </div>
          <div class="card-content" style="border-bottom: 1px solid rgba(160, 160, 160, 0.2);">
            <?php if($this->session->userdata('about') == "") { echo '<span style="color:#e8110c">About Not Found</span>'; } else { echo $this->session->userdata('about'); } ?>
          </div>
      </div>
    </div>

    <div class="col-md-9">

          <div class="card">
              <div class="card-content">
                  <div class="" style="font-size:18px;font-weight:300">Cards for display in portfolio style material design by Google.</div>
                  <div class="date-bookmark" style="margin-top:10px">
                    <div class="bookmark-date"><i class="fa fa-clock-o"></i> Publish 20 - Sept 2016 ─ <i class="fa fa-folder-o"></i> Android Development</div>
                  </div>
              </div>
              <div class="card-action">
                  <a href="#" target="new_blank">Detail Bookmark <i class="fa fa-arrow-right"></i></a>
              </div>
          </div>

          <div class="card">
              <div class="card-content">
                  <div class="" style="font-size:18px;font-weight:300">Cards for display in portfolio style material design by Google.</div>
                  <div class="date-bookmark" style="margin-top:10px">
                    <div class="bookmark-date"><i class="fa fa-clock-o"></i> Publish 20 - Sept 2016 ─ <i class="fa fa-folder-o"></i> Cloud</div>
                  </div>
              </div>
              <div class="card-action">
                  <a href="#" target="new_blank">Detail Bookmark <i class="fa fa-arrow-right"></i></a>
              </div>
          </div>

          <div class="card">
              <div class="card-content">
                  <div class="" style="font-size:18px;font-weight:300">Cards for display in portfolio style material design by Google.</div>
                  <div class="date-bookmark" style="margin-top:10px">
                    <div class="bookmark-date"><i class="fa fa-clock-o"></i> Publish 20 - Sept 2016 ─ <i class="fa fa-folder-o"></i> Web Development</div>
                  </div>
              </div>
              <div class="card-action">
                  <a href="#" target="new_blank">Detail Bookmark <i class="fa fa-arrow-right"></i></a>
              </div>
          </div>

    </div>
  </div>
</div>
<hr style="margin-top:100px;width:100%">
