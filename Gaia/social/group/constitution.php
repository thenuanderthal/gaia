<?php 
$title = "Our Constitution";
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
                      <li class="active"><a href="constitution.php"><i class="fa fa-legal"></i> Our Constitution</a></li>
                      <li><a href="calendar.php"><i class="fa fa-calendar"></i> Our Calendar</a></li>
                      <li><a href="library.php"><i class="fa fa-book"></i> Our Library</a></li>
                      <li><hr/></li>
                      <li><a href="message.php"><i class="fa fa-envelope"></i> Messaging</a></li>
                      <li><a href="seed.php"><i class="fa fa-leaf"></i> Our Seed</a></li>
                      <li><a href="privacy.php"><i class="fa fa-eye-slash"></i> Our Privacy</a></li>
                      <li><a href="logs.php"><i class="fa fa-pencil-square-o"></i> Our Logs</a></li>
                  </ul>
              </div>
              <div class="col-md-9">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#change" data-toggle="tab"><i class="fa fa-legal"></i> Constitution</a></li>
                  <li><a href="#draft" data-toggle="tab"><i class="fa fa-pencil"></i> Draft</a></li>
                  <li><a href="#draftlist" data-toggle="tab"><i class="fa fa-list"></i> Draft List</a></li>
                  <li><a href="#history" data-toggle="tab"><i class="fa fa-pencil-square-o"></i> History</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="constitution">Constitution</div>
                  <div class="tab-pane" id="draft">Draft</div>
                  <div class="tab-pane" id="draftlist">Draft List</div>
                  <div class="tab-pane" id="history">History</div>
                </div>
                </div>
          </div>
      </div>  
<?php include '../../include/group_footer.php' ?>
