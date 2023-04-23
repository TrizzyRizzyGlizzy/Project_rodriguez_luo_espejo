<?php

// Database connection settings
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sjcjc_academics";

// Create a database connection
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Start a session
session_start();

// Set the inactivity timeout to 10 minutes (600 seconds)
$timeout = 600;

// List of pages that require authentication
$auth_pages = array("logout.php", "profile.php", "purchases.php");

// Function to check login
function check_login() 
{
    global $con;

    if(isset($_SESSION['user_id'])) {
        $email = $_POST['User_Email'];
        $password = $_POST['User_Password'];

        $sql = "SELECT * FROM users WHERE User_Email = '$email' AND User_Password = '$password'";

        $result = $con->query($sql);

        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        } else {
            echo "error check login";
        }

        // Redirect to login
        header("Location: login.html");
        die;
    }
}

// Check if the user is logged in and if the current page requires authentication
if (isset($_SESSION['user_id']) && in_array(basename($_SERVER['PHP_SELF']), $auth_pages)) {
    // User is logged in and the current page requires authentication
    // Check if the user has been inactive for too long
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
        // User has been inactive for too long
        // Destroy the session and redirect to the login page
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit();
    }
    // Update the last activity time
    $_SESSION['last_activity'] = time();

    // Call the check_login function
    check_login();
} elseif (in_array(basename($_SERVER['PHP_SELF']), $auth_pages)) {
    // User is not logged in and the current page requires authentication
    // Redirect to the login page
    header("Location: login.php");
    exit();
}

?>

