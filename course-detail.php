<header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php
  include("connection.php");
  session_start();
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
<section class="mt-5">
  <div class="mt-5 p-3">
    <div class="container mt-5 pt-5">
      <h2>Course Details</h2>

      <?php
      // Get the course ID from the query string
      $course_id = $_GET['course_id'];

      if($course_id==null){
        header("Location: error.php");
      }

      // Prepare the database query to retrieve course details
      $query = "SELECT Course_Code, Course_Title, Credit_Hours, Description FROM professional_courses WHERE course_id = $course_id";

      // Execute the query and handle any errors
      $result = mysqli_query($con, $query);
      if ($result==null) {
        header("Location: error.php");
      }
      // Display the course details
      $row = mysqli_fetch_assoc($result);
      if ($row==null) {
        header("Location: error.php");
      }
      echo "<h2>{$row['Course_Code']} - {$row['Course_Title']}</h2>";
      echo "<p><strong>Credit Hours:</strong> {$row['Credit_Hours']}</p>";
      echo "<p><strong>Description:</strong> {$row['Description']}</p>";

      // Retrieve the course code from the course details
      $course_code = $row['Course_Code'];

      // Prepare the database query to retrieve book details
      $query = "SELECT id, Book_Name, Category, Author, price FROM books WHERE Course_Code = '$course_code'";

      // Execute the query and handle any errors
      $result = mysqli_query($con, $query);
      if (!$result) {
        die('Database query failed: ' . mysqli_error($con));
      }

      // Display the book details in a button
      $row = mysqli_fetch_assoc($result);
      echo '<button class="btn btn-primary">';
      echo "<strong>{$row['Book_Name']}</strong><br>";
      echo "Category: {$row['Category']}<br>";
      echo "Author: {$row['Author']}<br>";
      echo "Price: {$row['price']}<br>";
      echo "<a href='textbook-detail.php?id={$row['id']}' class='btn btn-outline-secondary'>More Details</a>";
      echo "</button>";

      // Close the database connection
      mysqli_close($con);
      ?>

    </div>
  </div>
</section>

<?php include('footer.php');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>