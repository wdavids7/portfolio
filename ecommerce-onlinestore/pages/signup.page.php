<?php
// Header
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/header.php";
// Search Bar
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/search-bar.php";
?>


<!-- Sign up form content starts -->
<div class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">

          <div class="card-header">
            <h4>Sign Up</h4>
          </div>

          <!-- Sign up form starts -->
          <form action="../includes/signup.inc.php" method="POST">
            <div class="card-body">
              <!-- Username label -->
              <div class="form-group mb-3">
                <label>Enter Username</label>
                <input type="text" name="uid" placeholder="Username" class="form-control" required>
              </div>

              <!-- Password label -->
              <div class="form-group mb-3">
                <label>Enter Password</label>
                <input type="password" name="pwd" placeholder="Password" class="form-control" required>
              </div>

              <!-- Confirm password label -->
              <div class="form-group mb-3">
                <label>Confirm Password</label>
                <input type="password" name="pwdRepeat" placeholder="Confirm Password" class="form-control" required>
              </div>

              <!-- Email address label -->
              <div class="form-group mb-3">
                <label>Enter Email Address</label>
                <input type="text" name="email" placeholder="E-mail" class="form-control" required>
              </div>

              <!-- Login submit button -->
              <div class="form-group mb-3">
                <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
              </div>

            </div>
          </form>
          <!-- Sign up form ends -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Sign up form content ends -->


<!-- Footer -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php";
?>
<!-- Footer -->