<?php 
$title = "My Honors";
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
                      <li  class="active"><a href="honors.php"><i class="fa fa-bookmark"></i> My Honors</a></li>
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
                  <li class="active"><a href="#honors" data-toggle="tab"><i class="fa fa-bookmark-o"></i> Honors</a></li>
                  <li><a href="#disgrace" data-toggle="tab"><i class="fa fa-bookmark"></i> Disgrace</a></li>
                  <li><a href="#create" data-toggle="tab"><i class="fa fa-pencil"></i> Create</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="honors">            
                  <div class="tab-pane" id="honors">
                      <br/>
                      <div class="panel-group" id="honors">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#honors" href="#collapseOne">
                                  <i class="fa fa-bookmark-o"></i> Notable Community Member of the Month</a> from <a href="#">Group Z</a> on Janruary 29th 2014 at 12:15 PM
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                We would like to recognize you for your distinguished performance within our organization by presenting you this award.
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                <i class="fa fa-bookmark-o"></i> Charitable Deed Award</a> from <a href="#">User Z</a> on March 9th 2014 at 2:34 PM
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                I would like to thank you for offering me a ride while I was walking to work on March 2nd, I appreciate the assistance, God bless!
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                  <i class="fa fa-bookmark-o"></i> Distinguished Benefactor Award</a> from <a href="#">Group X</a> on April 14th 2014 at 5:11 PM
                            </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                We would like to present you with our Distinguished Benefactor Award for contributing $20.00 to our organization on March 9th 2014 at 2:32PM
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  </div>
                  <div class="tab-pane" id="disgrace">
                        <br/>
                      <div class="panel-group" id="disgrace">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#disgrace" href="#collapseOne">
                                  <i class="fa fa-bookmark"></i> Offensive Language Mark</a> from <a href="#">Group M</a> on November 13th 2013 at 7:25 PM
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                We have given you this mark of disgrace because of the offensive post you sent to our administrator <a href="#">user Q</a> on November 11th 2013 at 3:44 PM. This mark of disgrace will disappear after 6 months of good behavior on our page.
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>        
                  </div>
                  <div class="tab-pane" id="create">
                      
                  </div>  
                </div>
                </div>
          </div>
      </div>
<?php include '../../include/social_footer.php' ?>