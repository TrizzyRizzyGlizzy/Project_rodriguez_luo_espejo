<?php
session_start();
include("connection.php");
include("functions.php");

// Check if keyword is set
if(isset($_POST['keyword'])) {
  $keyword = mysqli_real_escape_string($con, $_POST['keyword']);

  // Search database
  $query = "SELECT * FROM program_list WHERE degree_program LIKE '%$keyword%'";
  $result = mysqli_query($con, $query);

  // Display results
  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "<p>".$row['degree_program']."</p>";
    }
  } else {
    echo "<script>alert('No results found.');</script>";
  }
}

// Close database connection
mysqli_close($con);
?>
