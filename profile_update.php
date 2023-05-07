<?php
 include('check_login.php');
$user_id = $_SESSION['user_id'];

// Retrieve the user data from the database
$query = "SELECT * FROM users WHERE user_id = '$user_id' LIMIT 1";
$result = mysqli_query($con, $query);

if (!$result || mysqli_num_rows($result) < 1) {
    header("Location: error.php");
    die();
}

$user_data = mysqli_fetch_assoc($result);

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve the form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Update the user data in the database
    $query = "UPDATE users SET User_FName = '$first_name', User_LName = '$last_name', User_Email = '$email', User_Phone = '$phone' WHERE user_id = '$user_id'";
    $result = mysqli_query($con, $query);

    if (!$result) {
        header("Location: error.php");
    } else {
        // Redirect the user to the profile page
        header("Location: profile.php");
        die();
    }
}
?>