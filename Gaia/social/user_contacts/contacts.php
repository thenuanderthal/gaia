<?php 
$title = "User Contacts";
include '../../include/group_header.php'; 
?>
      <div class="container">
          <div class="row">
              <div class="col-md-3">
                        <i class="fa fa-user fa-5x" ></i>
                  <ul class="nav nav-pills nav-stacked">
                      <li><a href="index.php"><i class="fa fa-eye"></i> User Profile</a></li>
                      <li class="active"><a href="contacts.php"><i class="fa fa-phone"></i> User Contacts</a></li>
                      <li><a href="groups.php"><i class="fa fa-group"></i> User Groups</a></li>
                      <li><a href="machines.php"><i class="fa fa-laptop"></i> User Machines</a></li>
                      <li><a href="politics.php"><i class="fa fa-legal"></i> User Politics</a></li>                    
                      <li><a href="calendar.php"><i class="fa fa-calendar"></i> User Calendar</a></li>
                      <li><a href="library.php"><i class="fa fa-book"></i> User Library</a></li>
                      <li><a href="logs.php"><i class="fa fa-pencil"></i> User Logs</a></li>
                      <li><hr/></li>
                      <li><a href="message.php"><i class="fa fa-envelope"></i> Send a Message</a></li>
                  </ul>
              </div>
              <div class="col-md-9">
                  <h1>User Network Feed</h1>
                  <div class="well">
                      
                      Content Here
                      
                  </div>
              </div>
          </div>
      </div>  
<?php include '../../include/group_footer.php' ?>
