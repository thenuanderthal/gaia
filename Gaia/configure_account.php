<?php 
$title = "Create An Account";
include 'include/header.php'; 
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
           <form class="form-horizontal" id="create_personal_information" role="form" action="">
              <div class="col-md-2"></div>
              <h1 class="col-md-10"><i class="fa fa-camera-retro"></i> Profile Photo</h1>
                <div class="form-group">
                  <label class="col-md-2" for="photo">Select Photograph</label>
                  <div class="col-md-10">
                    <div class="col-md-12">
                      <a href="#" class="thumbnail">
                        <img data-src="js/holder.js/100%x400/text:Your Photo Here" alt="...">
                      </a>
                    </div>  <br/>
                    <input type="file" name="photo" id="photo">
                    <p class="help-block">Select a photo from your computer</p>
                  </div><br/><br/>
                </div>
              <div class="col-md-2"></div>
              <h1 class="col-md-10"><i class="fa fa-user"></i> Personal Information</h1>
                <div class="form-group">
                  <label class="col-md-2" for="language">Language</label>
                  <div class="col-md-10">
                    <select class="form-control bfh-languages" id="language" name="language" data-language="en"></select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2" for="firstname">First Name</label>
                  <div class="col-md-10">
                    <input class="form-control" id="firstname" name="firstname" type="text" placeholder="First Name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2" for="middlename">Middle Name</label>
                  <div class="col-md-10">
                    <input class="form-control" id="middlename" name="middlename" type="text" placeholder="Middle Name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2" for="lastname">Last Name</label>
                  <div class="col-md-10">
                    <input class="form-control" id="lastname" name="lastname" type="text" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2">Birthday</label>
                  <div class="col-md-10">
                    <div class="bfh-datepicker"></div>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2" for="country">Country</label>
                    <div class="col-md-10">
                        <select class="form-control bfh-countries" id="country" data-country="US"></select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2" for="state">State</label>
                    <div class="col-md-10">
                        <select class="form-control bfh-states" id="state"" data-country="country"></select>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2" for="city">City</label>
                  <div class="col-md-10">
                    <input class="form-control" id="city" name="city" type="text" placeholder="City">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2" for="address">Address</label>
                  <div class="col-md-10">
                    <input class="form-control" id="address" name="address" type="text" placeholder="Address">
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2" for="timezone">Time Zone</label>
                    <div class="col-md-10">
                        <select class="form-control bfh-timezones" id="timezone" name="timezone" data-country="country"></select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-power-off fa-rotate-90"></i> et it
                    </div>
                </div>
            </form>
        </div>
            <div class="col-md-6">
              <div class="col-md-2"></div>
              <h1 class="col-md-10"><i class="fa fa-cog"></i> Network Settings</h1>
              <div class="form-group">
                  <label class="col-md-2" for="sharing">Sharing</label>
                  <div class="col-md-10">
                      <div class="bfh-selectbox" id="sharing" data-name="selectbox">
                        <div data-value="1">All Contacts</div>
                        <div data-value="2">Family</div>
                        <div data-value="3">Anyone</div>
                        <div data-value="4">2 degrees</div>
                        <div data-value="5">3 degrees</div>
                      </div>
                  </div>
              </div>
              <div class="col-md-2"></div>
              <h1 class="col-md-10"><i class="fa fa-lock"></i> Security Settings</h1>
                <div class="form-group">
                  <label class="col-md-2" for="securedir">Create Secure Directory</label>
                  <div class="col-md-10">
                    <input class="form-control" id="address" name="securedir" type="text" placeholder="Enter Secure Directory Name">
                  </div>
                </div>
              <div class="col-md-2"></div>
              <h1 class="col-md-10"><i class="fa fa-users"></i> Add Contacts</h1>
                <div class="form-group">
                  <label class="col-md-2" for="contact1">Add Contact</label>
                  <div class="col-md-10">
                    <input class="form-control" id="contact1" name="contact1" type="text" placeholder="Enter User, Group, or Machine Spirit Name">
                  </div><!-- add js for + more form inputs -->
                </div>
            </div>
    </div>
<!-- recompile css into less with code below to allow for centered content: 

    .col-centered{
    float: none;
    margin: 0 auto;
} -->
</div>
<?php include 'include/footer.php' ?>