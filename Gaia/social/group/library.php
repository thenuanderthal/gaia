<?php 
$title = "Our Library";
include '../../include/group_header.php'; 
?>
      <div class="container">
          <div class="row">
              <div class="col-md-3">
                        <i class="fa fa-users fa-5x" ></i>
                  <ul class="nav nav-pills nav-stacked">
                      <li><a href="index.php"><i class="fa fa-eye"></i> Our Administration</a></li>
                      <li><a href="members.php"><i class="fa fa-user"></i> Our Members</a></li>
                      <li><a href="groups.php"><i class="fa fa-group"></i> Our Groups</a></li>
                      <li><a href="machines.php"><i class="fa fa-laptop"></i> Our Machines</a></li>
                      <li><a href="activities.php"><i class="fa fa-list"></i> Our Activities</a></li>
                      <li><a href="honors.php"><i class="fa fa-bookmark"></i> Our Honors</a></li>
                      <li><a href="constitution.php"><i class="fa fa-legal"></i> Our Constitution</a></li>
                      <li><a href="calendar.php"><i class="fa fa-calendar"></i> Our Calendar</a></li>
                      <li class="active"><a href="library.php"><i class="fa fa-book"></i> Our Library</a></li>
                      <li><hr/></li>
                      <li><a href="message.php"><i class="fa fa-envelope"></i> Messaging</a></li>
                      <li><a href="seed.php"><i class="fa fa-leaf"></i> Our Seed</a></li>
                      <li><a href="privacy.php"><i class="fa fa-eye-slash"></i> Our Privacy</a></li>
                      <li><a href="logs.php"><i class="fa fa-pencil-square-o"></i> Our Logs</a></li>
                  </ul>
              </div>
              <div class="col-md-9">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#upload" data-toggle="tab"><i class="fa fa-upload"></i> Upload</a></li>
                  <li><a href="#sharing" data-toggle="tab"><i class="fa fa-share"></i> Sharing</a></li>
                  <li><a href="#documents" data-toggle="tab"><i class="fa fa-book"></i> Documents</a></li>
                  <li><a href="#images" data-toggle="tab"><i class="fa fa-camera"></i> Images</a></li>
                  <li><a href="#audio" data-toggle="tab"><i class="fa fa-microphone"></i> Audio</a></li>
                  <li><a href="#video" data-toggle="tab"><i class="fa fa-film"></i> Video</a></li>
                  <li><a href="#multi-media" data-toggle="tab"><i class="fa fa-info-circle"></i> Multi-Media</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="upload">Upload</div>
                  <div class="tab-pane" id="sharing">Sharing</div>
                  <div class="tab-pane" id="documents">Documents</div>
                  <div class="tab-pane" id="images">Images</div>
                  <div class="tab-pane" id="audio">Audio</div>
                  <div class="tab-pane" id="video">Video</div>
                  <div class="tab-pane" id="multi-media">Multi-Media</div>
                </div>
                </div>
          </div>
      </div>  
<?php include '../../include/group_footer.php' ?>