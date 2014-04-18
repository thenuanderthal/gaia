<?php 
$title = "Group Politics";
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
                      <li class="active"><a href="politics.php"><i class="fa fa-legal"></i> Group Politics</a></li>                    
                      <li><a href="calendar.php"><i class="fa fa-calendar"></i> Group Calendar</a></li>
                      <li><a href="library.php"><i class="fa fa-book"></i> Group Library</a></li>
                      <li><a href="logs.php"><i class="fa fa-pencil"></i> Group Logs</a></li>
                      <li><hr/></li>
                      <li><a href="message.php"><i class="fa fa-envelope"></i> Send a Message</a></li>
                  </ul>
              </div>
              <div class="col-md-9">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activities" data-toggle="tab"><i class="fa fa-list"></i> Current Activites</a></li>
                  <li><a href="#honors" data-toggle="tab"><i class="fa fa-bookmark"></i> Honors</a></li>
                  <li><a href="#constitution" data-toggle="tab"><i class="fa fa-legal"></i> Constitution</a></li>
                  <li><a href="#statistics" data-toggle="tab"><i class="fa fa-info-circle"></i> Statistics</a></li>
                  <li><a href="#history" data-toggle="tab"><i class="fa fa-pencil-square-o"></i> History</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="activities">Current Activities</div><!-- INclude Constitutional Drafts here! -->
                  <div class="tab-pane" id="honors">Honors</div>
                  <div class="tab-pane" id="constitution">Constitution</div>
                  <div class="tab-pane" id="statistics">Statistics</div>
                  <div class="tab-pane" id="history">History</div>
                </div>
                </div>
          </div>
      </div>  
<?php include '../../include/group_footer.php' ?>