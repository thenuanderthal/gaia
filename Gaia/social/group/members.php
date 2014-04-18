<?php 
$title = "Our Members";
include '../../include/group_header.php'; 
?>
      <div class="container">
          <div class="row">
              <div class="col-md-3">
                        <i class="fa fa-users fa-5x" ></i>
                  <ul class="nav nav-pills nav-stacked">
                      <li><a href="index.php"><i class="fa fa-eye"></i> Our Administration</a></li>
                      <li class="active"><a href="members.php"><i class="fa fa-user"></i> Our Members</a></li>
                      <li><a href="groups.php"><i class="fa fa-group"></i> Our Groups</a></li>
                      <li><a href="machines.php"><i class="fa fa-laptop"></i> Our Machines</a></li>
                      <li><a href="activities.php"><i class="fa fa-list"></i> Our Activities</a></li>
                      <li><a href="honors.php"><i class="fa fa-bookmark"></i> Our Honors</a></li>
                      <li><a href="constitution.php"><i class="fa fa-legal"></i> Our Constitution</a></li>
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
                  <li class="active"><a href="#contacts" data-toggle="tab"><i class="fa fa-user"></i> Our Members</a></li>
                  <li><a href="#create" data-toggle="tab"><i class="fa fa-pencil"></i> Create</a></li>


                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="contacts">Our Members</div>
                  <div class="tab-pane" id="create">Create</div>
                </div>
                </div>
          </div>
      </div>  
<?php include '../../include/group_footer.php' ?>
