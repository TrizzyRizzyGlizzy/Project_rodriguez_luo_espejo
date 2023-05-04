<header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php
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
    <section class="m-4">
    <?php
include("connection.php");

// Check if keyword is set
if(isset($_GET['keyword'])) {
  $keyword = mysqli_real_escape_string($con, $_GET['keyword']);

  // Search database
  $query = "SELECT * FROM programlist WHERE degree_program LIKE '%$keyword%'";
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

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
