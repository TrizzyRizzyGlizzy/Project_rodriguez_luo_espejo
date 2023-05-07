<?php
    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        //check if post from forms was used
        //read database
        $email = $_POST['email'];
        $password = $_POST['password'];

        //check email is correct
        $query = "SELECT * FROM users WHERE User_Email = '$email' LIMIT 1";
        $result = mysqli_query($con, $query);

        //if email correct, check password
        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['User_Password'] === $password) {
                // Start a new session
                session_start();
                $_SESSION['user_id'] = $user_data['User_ID'];
                $_SESSION['User_FName'] = $user_data['User_FName'];
                header("Location: index.php");
                die;
            } else {
                // Incorrect password
                $error = "Incorrect password. Please try again.";
            }
        } else {
            // Email not found in database
            $error = "Incorrect email. Please try again.";
        }
    }
?>

<!-- Display error message if login fails -->
<?php if(isset($error)): ?>
    <div class="alert alert-danger"><?php echo $error; ?></div>
<?php endif; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="row">
          <div class="col-lg-4 offset-md-3 border rounded p-4 mx-auto shadow p-3 mb-5 bg-body-tertiary rounded position-absolute top-50 start-50 translate-middle">
            <img src="https://sjcconnect.sjc.edu.bz/images/logo.jpg" class="rounded mx-auto d-block" style="width:20%;" alt="logo">
            <h3 class="text-center">Welcome to St. John's College<br>Junior College</h3>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab" aria-controls="signup" aria-selected="false">Sign Up</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <form action="login.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
                </div>
                <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                    <form class="row g-3 needs-validation" novalidate action="register.php" method="post">
                        <div class="col-md-6">
                          <label for="validationfname" class="form-label">First name</label>
                          <input type="text" class="form-control" id="validationfname" name="first_name" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationlname" class="form-label">Last name</label>
                          <input type="text" class="form-control" id="validationlname" name="last_name" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationEmail" class="form-label">Email Address</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="email" class="form-control" id="validationEmail" name="email" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                              Please enter a valid email address.
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationEmailConfirm" class="form-label">Confirm Email Address</label>
                            <div class="input-group has-validation">
                              <span class="input-group-text" id="inputGroupPrepend">@</span>
                              <input type="email" class="form-control" id="validationEmailConfirm" aria-describedby="inputGroupPrepend" required>
                              <div class="invalid-feedback">
                                Please confirm your email address.
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label for="validationPassword" class="form-label">Password</label>
                            <div class="input-group has-validation">
                              <span class="input-group-text" id="inputGroupPrepend">@</span>
                              <input type="password" class="form-control" id="validationPassword" name="password" required>
                              <div class="invalid-feedback">
                                Please enter a valid password.
                              </div>
                            </div>
                          </div>
                        <div class="col-md-6">
                          <label for="validationPhone" class="form-label">Phone number</label>
                          <input type="tel" class="form-control" id="validationPhone" name="phone" required>
                          <div class="invalid-feedback">
                            Please provide a valid phone number.
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                              Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                              You must agree before submitting.
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                      </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

