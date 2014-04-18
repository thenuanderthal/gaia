<?php 
$title = "Group Logs";
include '../../include/group_header.php'; 
?>
      <div class="container">
          <div class="row">
              <div class="col-md-3">
                        <i class="fa fa-user fa-5x" ></i>
                  <ul class="nav nav-pills nav-stacked">
                      <li><a href="index.php"><i class="fa fa-eye"></i> Group Profile</a></li>
                      <li><a href="members.php"><i class="fa fa-user"></i> Group Members</a></li>
                      <li><a href="groups.php"><i class="fa fa-group"></i> Group Groups</a></li>
                      <li><a href="machines.php"><i class="fa fa-laptop"></i> Group Machines</a></li>
                      <li><a href="politics.php"><i class="fa fa-legal"></i> Group Politics</a></li>                    
                      <li><a href="calendar.php"><i class="fa fa-calendar"></i> Group Calendar</a></li>
                      <li><a href="library.php"><i class="fa fa-book"></i> Group Library</a></li>
                      <li class="active"><a href="logs.php"><i class="fa fa-pencil"></i> Group Logs</a></li>
                      <li><hr/></li>
                      <li><a href="message.php"><i class="fa fa-envelope"></i> Send a Message</a></li>
                  </ul>
              </div>
              <div class="col-md-9">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#mylogs" data-toggle="tab"><i class="fa fa-pencil"></i> User Logs</a></li>
                  <li><a href="#machines" data-toggle="tab"><i class="fa fa-laptop"></i> Machines</a></li>
                  <li><a href="#users" data-toggle="tab"><i class="fa fa-user"></i> Users</a></li>
                  <li><a href="#groups" data-toggle="tab"><i class="fa fa-users"></i> Groups</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="userlogs">User Logs</div>
                  <div class="tab-pane" id="machines">Machines</div>
                  <div class="tab-pane" id="users">Users</div>
                  <div class="tab-pane" id="groups">Groups</div>
                </div>
                </div>
          </div>
      </div>  
<?php include '../../include/group_footer.php' ?>