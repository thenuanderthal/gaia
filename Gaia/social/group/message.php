<?php 
$title = "Messaging";
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
                      <li><a href="library.php"><i class="fa fa-book"></i> Our Library</a></li>
                      <li><hr/></li>
                      <li class="active"><a href="message.php"><i class="fa fa-envelope"></i> Messaging</a></li>
                      <li><a href="seed.php"><i class="fa fa-leaf"></i> Our Seed</a></li>
                      <li><a href="privacy.php"><i class="fa fa-eye-slash"></i> Our Privacy</a></li>
                      <li><a href="logs.php"><i class="fa fa-pencil-square-o"></i> Our Logs</a></li>
                  </ul>
              </div>
              <div class="col-md-9">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#compose" data-toggle="tab"><i class="fa fa-pencil"></i> Compose</a></li>
                  <li><a href="#inbox" data-toggle="tab"><i class="fa fa-sign-in fa-rotate-90"></i> Inbox</a></li>
                  <li><a href="#outbox" data-toggle="tab"><i class="fa fa-sign-out fa-rotate-270"></i> Outbox</a></li>
                  <li><a href="#drafts" data-toggle="tab"><i class="fa fa-pencil-square-o"></i> Drafts</a></li>
                  <li><a href="#chat" data-toggle="tab"><i class="fa fa-comment-o"></i> Chat</a></li>
                  <li><a href="#video" data-toggle="tab"><i class="fa fa-laptop"></i> Video Conference</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="compose">Compose</div>
                  <div class="tab-pane" id="inbox">Inbox</div>
                  <div class="tab-pane" id="outbox">Outbox</div>
                  <div class="tab-pane" id="drafts">Drafts</div>
                  <div class="tab-pane" id="chat">Chat</div>
                  <div class="tab-pane" id="video">Video Conference</div>
                </div>
                </div>
          </div>
      </div>  
<?php include '../../include/group_footer.php' ?>
