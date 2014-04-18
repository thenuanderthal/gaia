<?php 
$title = "Home"; 
include 'include/header.php' 
?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome To Gaia</h1>
        <form class="form-inline" id="create_personal_information" role="form" action="">
          <div class="form-group">
            <label for="language">Select a Language</label>
              <select class="form-control bfh-languages col-md-2" id="language" name="language" placeholder="language" data-language="en"></select>
          </div>
            <br/>
            <br/>
          <button class="btn btn-success btn-lg" type="submit" name="submit" role="button"><i class="fa fa-power-off fa-rotate-90"></i> et it &raquo;</button>
        </form>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-3">
          <h2>Configure Machine</h2>
          <p>Configure this machine to run Gaia</p>
          <p><a class="btn btn-default" href="#" role="button"><i class="fa fa-power-off fa-rotate-90"></i> et it &raquo;</a></p>
        </div>
        <div class="col-md-3">
          <h2>Create Account</h2>
          <p>Create an account on the Gaian Network.</p>
          <p><a class="btn btn-default" href="createaccount.php" role="button"><i class="fa fa-power-off fa-rotate-90"></i> et it &raquo;</a></p>
        </div>
        <div class="col-md-3">
          <h2>Visit Us Online</h2>
          <p>Check out our social media and online resources</p>
          <p><a class="btn btn-default" href="machine" role="button"><i class="fa fa-power-off fa-rotate-90"></i> et it &raquo;</a></p>
        </div>
        <div class="col-md-3">
          <h2>About</h2>
          <p>Learn more about Gaia.</p>
          <p><a class="btn btn-default" href="#" role="button"><i class="fa fa-power-off fa-rotate-90"></i> et it &raquo;</a></p>
        </div>
       </div>  
      </div>
    </div>

<?php include 'include/footer.php' ?>