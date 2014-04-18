<?php 
$title = "My Logs";
include '../../include/social_header.php'; 
?>
      <div class="container">
          <div class="row">
              <div class="col-md-3">
                  <img src="holder.js/100%x250/text:User Profile Photo"><br/>
                   <!--     <center><i class="fa fa-user fa-5x" ></i></center> -->  
                  <ul class="nav nav-pills nav-stacked">
                      <li><a href="index.php"><i class="fa fa-eye"></i> My Administration</a></li>
                      <li><a href="privacy.php"><i class="fa fa-lock"></i> My Privacy</a></li>
                      <li><a href="contacts.php"><i class="fa fa-user"></i> My Contacts</a></li>
                      <li><a href="groups.php"><i class="fa fa-group"></i> My Groups</a></li>
                      <li><a href="machines.php"><i class="fa fa-laptop"></i> My Machines</a></li>
                      <li><a href="activities.php"><i class="fa fa-list"></i> My Activities</a></li>
                      <li><a href="honors.php"><i class="fa fa-bookmark"></i> My Honors</a></li>
                      <li><a href="calendar.php"><i class="fa fa-calendar"></i> My Calendar</a></li>
                      <li><a href="library.php"><i class="fa fa-book"></i> My Library</a></li>
                      <li class="active"><a href="statistics.php"><i class="fa fa-bar-chart-o"></i> My Statistics</a></li>
                      <li><a href="logs.php"><i class="fa fa-pencil-square-o"></i> My Logs</a></li>
                      <li><hr/></li>
                      <li><a href="communicate.php"><i class="fa fa-comment-o"></i> Communicate</a></li>
                      <li><a href="spirits.php"><i class="fa fa-fire"></i> My Spirits</a></li>
                      <li><a href="seed.php"><i class="fa fa-leaf"></i> My Network Seed</a></li>
                  </ul>
              </div>
              <div class="col-md-9">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#mylogs" data-toggle="tab"><i class="fa fa-pencil"></i> My Logs</a></li>
                  <li><a href="#machines" data-toggle="tab"><i class="fa fa-laptop"></i> Machines</a></li>
                  <li><a href="#users" data-toggle="tab"><i class="fa fa-user"></i> Users</a></li>
                  <li><a href="#groups" data-toggle="tab"><i class="fa fa-users"></i> Groups</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="mylogs">My Logs</div>
                  <div class="tab-pane" id="machines">Machines</div>
                  <div class="tab-pane" id="users">Users</div>
                  <div class="tab-pane" id="groups">Groups</div>
                </div>
                </div>
          </div>
      </div>
<?php include '../../include/social_footer.php' ?>