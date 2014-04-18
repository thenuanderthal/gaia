<?php 
$title = "My Machines";
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
                      <li class="active"><a href="machines.php"><i class="fa fa-laptop"></i> My Machines</a></li>
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
                  <li class="active"><a href="#machines" data-toggle="tab"><i class="fa fa-laptop"></i> Network Machines</a></li>
                  <li><a href="#create" data-toggle="tab"><i class="fa fa-pencil"></i> Create</a></li>


                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="Machines">
                                            <br/>
                      <form action="" id="list_organizer">
                          Order 
                          <select name="list_order" form="contact_list_organizer">
                            <option value="chronological">Chronological</option>
                            <option value="alphabetical">Alphabetical</option>
                            <option value="random">Random</option>
                          </select>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs">Ascending</button>                              
                            <button type="button" class="btn btn-default btn-xs">Descending</button> 
                          </div>
                          List
                          <select name="list_options" form="contact_list_organizer">
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="all">All</option>
                          </select>
                          Filter For
                          <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs">None</button>                              
                            <button type="button" class="btn btn-default btn-xs">Mine</button>
                            <button type="button" class="btn btn-default btn-xs">Friend</button>
                            <button type="button" class="btn btn-default btn-xs">Group</button>
                            <button type="button" class="btn btn-default btn-xs">Other</button>
                          </div>
                    <button type="button" class="btn btn-success btn-xs">
                      Save
                    </button>                            
                      <br/>    
                      </form>
                        <br/>                    
                            <button type="button" class="btn btn-default">
                              <i class="fa fa-check-square-o"></i> Mark All
                            </button>                
                            <button type="button" class="btn btn-default">
                              <i class="fa fa-pencil-square-o"></i> Add to logs
                            </button>
                            <button type="button" class="btn btn-default">
                              <i class="fa fa-ban"></i> Block
                            </button>
                            <button type="button" class="btn btn-default">
                              <i class="fa fa-minus-circle"></i> Remove
                            </button>                    
                                            
                       <ul class="list-group">
                          <br/>
                           <li class="list-group-item">
                            <input type="checkbox" name="1" value="1">
                            <a href="#">Machine A Spirit Name:</a>
                            Owner: <a href="#">User A Spirit Name</a>
                            Server
                            <button type="button" class="btn btn-default btn-xs">
                              <i class="fa fa-pencil-square-o"></i> 
                            </button>
                            <button type="button" class="btn btn-default btn-xs">
                              <i class="fa fa-ban"></i> 
                            </button>
                            <button type="button" class="btn btn-default btn-xs">
                              <i class="fa fa-minus-circle"></i> 
                            </button>
                        </li>     
                        <li class="list-group-item">
                            <input type="checkbox" name="1" value="1">
                            <a href="#">Machine A Spirit Name:</a>
                            Owner: <a href="#">User A Spirit Name</a>
                            Lap Top
                            <button type="button" class="btn btn-default btn-xs">
                              <i class="fa fa-pencil-square-o"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-xs">
                              <i class="fa fa-ban"></i> 
                            </button>
                            <button type="button" class="btn btn-default btn-xs">
                              <i class="fa fa-minus-circle"></i> 
                            </button>
                        </li>  
                        <li class="list-group-item">
                            <input type="checkbox" name="1" value="1">
                            <a href="#">Machine A Spirit Name:</a>
                            Owner: <a href="#">User A Spirit Name</a>
                            Tablet
                            <button type="button" class="btn btn-default btn-xs">
                              <i class="fa fa-pencil-square-o"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-xs">
                              <i class="fa fa-ban"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-xs">
                              <i class="fa fa-minus-circle"></i>
                            </button>
                        </li>     
                        <li class="list-group-item">
                            <input type="checkbox" name="1" value="1">
                            <a href="#">Machine A Spirit Name:</a>
                            Owner: <a href="#">User A Spirit Name</a>
                            Desktop
                            <button type="button" class="btn btn-default btn-xs">
                              <i class="fa fa-pencil-square-o"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-xs">
                              <i class="fa fa-ban"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-xs">
                              <i class="fa fa-minus-circle"></i>
                            </button>
                        </li>    
                        <li class="list-group-item">
                            <input type="checkbox" name="1" value="1">
                            <a href="#">Machine A Spirit Name:</a>
                            Owner: <a href="#">User A Spirit Name</a>
                            Mobile
                            <button type="button" class="btn btn-default btn-xs">
                              <i class="fa fa-pencil-square-o"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-xs">
                              <i class="fa fa-ban"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-xs">
                              <i class="fa fa-minus-circle"></i>
                            </button>
                        </li>       
                  </div>
                  <div class="tab-pane" id="create">Create</div>
                </div>
                </div>
          </div>
      </div>
<?php include '../../include/social_footer.php' ?>
