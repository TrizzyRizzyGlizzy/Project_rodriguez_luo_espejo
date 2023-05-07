<header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php
  include('check_login.php');
  include('header.php');
  ?>
</header>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>St. John's Junior College</title>
    <link rel="icon" type="image" href="https://i.imgur.com/Se45RL3.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body style="background-color:lightgrey">
<div class="mt-5 pt-5">
  <div class="mt-5 pt-5">
    <div class="mt-5 pt-5">
      <?php
    // Get user data from database based on session user_id
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE user_id = $user_id LIMIT 1";
$result = mysqli_query($con, $query);

// Display user data in table
if ($result && mysqli_num_rows($result) > 0) {
    $user_data = mysqli_fetch_assoc($result);
    $user_id = $user_data['User_ID'];
    $first_name = $user_data['User_FName'];
    $last_name = $user_data['User_LName'];
    $email = $user_data['User_Email'];
    $phone = $user_data['User_Phone'];

    echo '<div class="container mt-5">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h1>User Profile</h1>
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <td>First Name</td>
                      <td>' . $first_name . '</td>
                    </tr>
                    <tr>
                      <td>Last Name</td>
                      <td>' . $last_name . '</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>' . $email . '</td>
                    </tr>
                    <tr>
                      <td>Phone</td>
                      <td>' . $phone . '</td>
                    </tr>
                  </tbody>
                </table>';

    // Display edit form for user to update their information
    echo '<h2>Edit Profile</h2>
                <form method="post" action="profile_update.php">
                  <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="' . $first_name . '">
                  </div>
                  <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="' . $last_name . '">
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="' . $email . '">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="phone" class="form-control" id="phone" name="phone" value="' . $phone . '">
                  </div>
                  <button type="submit" class="btn btn-primary mt-2">Save Changes</button>
                </form>
              </div>
            </div>
          </div>';
} else {
  header("Location: error.php");
}
?>
    </div>
  </div>
</div>
<?php include('footer.php');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>