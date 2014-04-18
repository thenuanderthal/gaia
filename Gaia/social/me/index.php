<?php 
$title = "My Administration";
include '../../include/social_header.php';
/* Create an if else statement that selects either the group or social header depending on what sessions are active*/
?>
      <div class="container">
          <div class="row">
              <div class="col-md-3">
                  <img src="holder.js/100%x250/text:User Profile Photo"><br/>
                   <!--     <center><i class="fa fa-user fa-5x" ></i></center> -->
                  <ul class="nav nav-pills nav-stacked">
                      <li class="active"><a href="index.php"><i class="fa fa-eye"></i> My Administration</a></li>
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
                      <li><a href="communicate.php"><i class="fa fa-comment-o"></i> Communicate</a></li>
                      <li><a href="spirits.php"><i class="fa fa-fire"></i> My Spirits</a></li>
                      <li><a href="seed.php"><i class="fa fa-leaf"></i> My Network Seed</a></li>
                  </ul>
              </div>
              <div class="col-md-9">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#feed" data-toggle="tab"><i class="fa fa-list"></i> Gaia Feed</a></li>
                  <li><a href="#rss" data-toggle="tab"><i class="fa fa-rss-square"></i> RSS Feed</a></li>
                  <li><a href="#edit" data-toggle="tab"><i class="fa fa-pencil"></i> Edit Profile</a></li>
                  <li><a href="#settings" data-toggle="tab"><i class="fa fa-cog"></i> Feed Settings</a></li>
                  
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <br/>
                  <div class="tab-pane active" id="feed">
                   <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="#">Group X</a> Awarded you a <a href="#">Badge of Honor</a> from <a href="#">Machine Z</a> on April 14th 2014 at 5:11 PM</h3>
                    </div>
                    <div class="panel-body">
                        <h3><a href="#"><i class="fa fa-bookmark-o"></i> Distinguished Benefactor Award</a></h3><br/>
                        We would like to present you with our Distinguished Benefactor Award for contributing $20.00 to our organization on March 9th 2014 at 2:32PM
                    </div>
                   </div>
                      
                            <div class="media">
                              <a class="pull-left" href="#">
                                <img class="media-object" data-src="holder.js/64x64/text:img" alt="...">
                              </a>
                              <div class="media-body">
                                  <h4 class="media-heading"><a href="#">User Y</a> sent you a friend request from <a href="#">Machine X</a> on April 14th at 7:22 AM</h4>
                                    <button type="button" class="btn btn-default btn-xs">
                                      <i class="fa fa-plus-circle"></i> Accept
                                    </button>
                                    <button type="button" class="btn btn-default btn-xs">
                                      <i class="fa fa-minus-circle"></i> Deny
                                    </button>
                              </div>
                            </div>        
    
                      <div class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object" data-src="holder.js/64x64/text:img" alt="...">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">User X</a> posted on your wall from <a href="#">Machine Y</a> on April 12th at 9:12 PM</h4>
                          I'll be in town next week, we should get together and talk about life!
             
                            <div class="media">
                              <a class="pull-left" href="#">
                                <img class="media-object" data-src="holder.js/64x64/text:img" alt="...">
                              </a>
                              <div class="media-body">
                                  <h4 class="media-heading"><a href="#">You</a> replied from <a href="#">Gaia_Omega</a> on April 13th at 4:03 PM</h4>
                                Awesome! I was actually just thinking about you, when will you be in town?
                              </div>
                            </div>
                            <div class="media">
                              <a class="pull-left" href="#">
                                <img class="media-object" data-src="holder.js/64x64/text:img" alt="...">
                              </a>
                              <div class="media-body">
                                <h4 class="media-heading"><a href="#">User X</a> replied from <a href="#">Machine Y</a> on April 14th at 7:22 AM</h4>
                                I'll be arriving late on the 16th, <a href="#">User Y</a> Will be picking me up from the airport and was genrous
                                enough to let me stay in their guest room while I'm there on business. I'll be there until April 21st so 
                                if we can figure something out in that time frame that would be fantastic!
                              </div>
                            </div>                          
                    </div>
                   </div>             
                  </div>
                  <div class="tab-pane" id="rss">Rss</div>
                  <div class="tab-pane" id="edit">Edit Profile</div>  
                  <div class="tab-pane" id="statistics">Statistics</div>
                  <div class="tab-pane" id="privacy">Privacy</div>
                  <div class="tab-pane" id="settings">Settings</div>
                </div>
                </div>
              </div>
          </div>
      </div>
<?php include '../../include/social_footer.php' ?>
