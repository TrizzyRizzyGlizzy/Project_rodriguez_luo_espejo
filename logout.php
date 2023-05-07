<?php
    // start the session
    session_start();
    
    // check if the user is logged in
    if(isset($_SESSION['user_id'])) {
        // if logged in, unset the session and destroy it
        unset($_SESSION['user_id']);
        session_destroy();
    }
    
    // redirect the user to the login page
    header("Location: index.php");
    exit;
?>
