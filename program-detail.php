<header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php
  include("connection.php");
  session_start();
  include('header.php');
  ?>
</header>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/filterizr/2.2.4/css/filterizr.min.css">
</head>
<body class="bg-dark-subtle">
<section class="mt-5">
    <div class="mt-5 p-3">
    <div class="container mt-5 pt-5">
    <h2>Program Details</h2>
    <?php
// get program_id from URL parameter
$program_id = $_GET['program_id'];

if($program_id==null){
  header("Location: error.php");
}
// search for degree program information based on program_id
$program_query = "SELECT degree_program, academic_track, department FROM programlist WHERE id = $program_id";
$program_result = mysqli_query($con, $program_query);
$program_row = mysqli_fetch_assoc($program_result);
if($program_row==null){
  header("Location: error.php");
}

// search for professional courses based on matching Course_Code
$course_query = "SELECT Course_Code, Course_Title, Credit_Hours, Course_ID FROM professional_courses WHERE Course_Code IN (SELECT Course_Code FROM degree_course WHERE program_id = $program_id)";
$course_result = mysqli_query($con, $course_query);

// sum up credit hours
$credit_hours = 0;
while ($course_row = mysqli_fetch_assoc($course_result)) {
    $credit_hours += $course_row['Credit_Hours'];
}

// display degree program information
echo "<p>Degree Program: " . $program_row['degree_program'] . "</p>";
echo "<p>Academic Track: " . $program_row['academic_track'] . "</p>";
echo "<p>Department: " . $program_row['department'] . "</p>";

// display credit hours total
echo "<p>Total Professional Credit Hours: $credit_hours</p>";

// display professional courses

mysqli_data_seek($course_result, 0); // reset result pointer
echo  '<div class="container col-sm-9">';
echo "Course Code - Course Title - Credit Hours";
echo  '<ul>';
while ($course_row = mysqli_fetch_assoc($course_result)) {

  echo  '<li class="list-group-item p-2 border-bottom border-dark-subtle"><a type="button" class="btn btn-primary m-1" href="course-detail.php?course_id=' . $course_row['Course_ID'] . '" class="course-button">' . $course_row['Course_Code'] . ' - ' . $course_row['Course_Title'] . ' - ' . $course_row['Credit_Hours'] . ' Credit Hours</a></li>';

}
echo  '</ul>';
echo  '</div>';

// close database connection
mysqli_close($con);
?>
 <?php include('footer.php');?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/filterizr/2.2.4/jquery.filterizr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>