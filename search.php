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
<section class="hero-section pt-5">
  <div class="container pt-5">
    <div class="row pt-5">
      <div class="col-md-12">
      <?php
        // Check if keyword is set
        if(isset($_GET['keyword'])) {
          // Sanitize and escape input to prevent SQL injection
          $keyword = mysqli_real_escape_string($con, $_GET['keyword']);

          // Search books table
          $books_query = "SELECT * FROM books WHERE Book_Name LIKE '%$keyword%' OR Category LIKE '%$keyword%' OR Author LIKE '%$keyword%' OR ISBN LIKE '%$keyword%'";
          $books_result = mysqli_query($con, $books_query);

          // Display books results
          if(mysqli_num_rows($books_result) > 0) {
            echo "<h2 class='my-3'>Books</h2>
                  <ul class='list-group rounded mb-5'>";
            while($row = mysqli_fetch_assoc($books_result)) {
              echo "<li class='list-group-item'><a class='btn btn-secondary mb-2 me-2 col-md-5' href='textbook-detail.php?id=".$row['id']."'>".$row['Book_Name']."</a> by ".$row['Author']." | IBSN: ".$row['ISBN']." </li>";
            }
            echo "<ul>";
          }

          // Search professional_courses table
          $courses_query = "SELECT * FROM professional_courses WHERE Course_Title LIKE '%$keyword%' OR degree_program LIKE '%$keyword%'";
          $courses_result = mysqli_query($con, $courses_query);

          // Display professional courses results
          if(mysqli_num_rows($courses_result) > 0) {
            echo "<h2 class='my-3'>Professional Courses</h2>
                  <ul class='list-group rounded mb-5'>";
            while($row = mysqli_fetch_assoc($courses_result)) {
              echo "<li class='list-group-item'><a class='btn btn-secondary mb-2 me-2 col-md-5'  href='course-detail.php?course_id=".$row['course_id']."'> ".$row['Course_Code']." - ".$row['Course_Title']."</a> Credit Hours: ".$row['Credit_Hours']." | Department: ".$row['degree_program']."</li>";
            }
            echo '</ul>';
          }

          // Search programlist table
          $programs_query = "SELECT * FROM programlist WHERE degree_program LIKE '%$keyword%' OR academic_track LIKE '%$keyword%' OR department LIKE '%$keyword%'";
          $programs_result = mysqli_query($con, $programs_query);

          // Display program list results
          if(mysqli_num_rows($programs_result) > 0) {
            echo "<h2 class='my-3'>Programs</h2> 
                  <ul class='list-group rounded mb-5'>";
            while($row = mysqli_fetch_assoc($programs_result)) {
              echo "<li class='list-group-item'><a class='btn btn-secondary mb-2 me-2 col-md-5' href='program-detail.php?program_id=".$row['id']."'>".$row['degree_program']."</a> Academic Track: ".$row['academic_track']." | Department: ".$row['department']."</li>";
            }
            echo '</ul>';
          }

          // No results found
          if(mysqli_num_rows($books_result) == 0 && mysqli_num_rows($courses_result) == 0 && mysqli_num_rows($programs_result) == 0) {
            echo "<div class='alert alert-warning my-3' role='alert'>No results found.</div>";
          }
        }

        // Close database connection
        mysqli_close($con);
      ?>
      </div>
    </div>
  </div>
</section>
 
    <?php include('footer.php');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
