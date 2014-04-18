<?php 
$title = "Messaging";
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
                      <li><a href="statistics.php"><i class="fa fa-bar-chart-o"></i> My Statistics</a></li>
                      <li><a href="logs.php"><i class="fa fa-pencil-square-o"></i> My Logs</a></li>
                      <li><hr/></li>
                      <li class="active"><a href="communicate.php"><i class="fa fa-comment-o"></i> Communicate</a></li>
                      <li><a href="spirits.php"><i class="fa fa-fire"></i> My Spirits</a></li>
                      <li><a href="seed.php"><i class="fa fa-leaf"></i> My Network Seed</a></li>
                  </ul>
              </div>
              <div class="col-md-9">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#compose" data-toggle="tab"><i class="fa fa-pencil"></i> Compose</a></li>
                  <li><a href="#inbox" data-toggle="tab"><i class="fa fa-sign-in fa-rotate-90"></i> Inbox</a></li>
                  <li><a href="#outbox" data-toggle="tab"><i class="fa fa-sign-out fa-rotate-270"></i> Outbox</a></li>
                  <li><a href="#drafts" data-toggle="tab"><i class="fa fa-pencil-square-o"></i> Drafts</a></li>
                  <li><a href="#chat" data-toggle="tab"><i class="fa fa-comment-o"></i> Chat</a></li>
                  <li><a href="#video" data-toggle="tab"><i class="fa fa-video-camera"></i> Video Conference</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="compose">
                    <br/>
                      <div>
                        <form action="#" id="message">
                            <div class="row">                            
                                <div class="col-md-12">
                                  <div class="input-group">
                                    <input type="text" name="spiritname" placeholder="Enter Spirit Name" class="form-control">
                                    <span class="input-group-btn">
                                      <button class="btn btn-default" name="search" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                                  </div>
                                </div>
                            </div>
                          <hr/>
                        </form>
                          <textarea class="form-control" rows="10" name="content" form="#"></textarea><br/><br/>
                          <button class="btn btn-default" type="submit" formmethod="post" name="submit" form="#">Send</button>
                          <button class="btn btn-default" type="submit" formmethod="post" name="draft" form="#">Save As Draft</button>
                      </div>
                  </div>
                  <div class="tab-pane" id="inbox">Inbox</div>
                  <div class="tab-pane" id="outbox">Outbox</div>
                  <div class="tab-pane" id="drafts">Drafts</div>
                  <div class="tab-pane" id="chat">Chat</div>
                  <div class="tab-pane" id="video">Video Conference</div>
                </div>
                </div>
              </div>
          </div>
      </div>
<?php include '../../include/social_footer.php' ?>
