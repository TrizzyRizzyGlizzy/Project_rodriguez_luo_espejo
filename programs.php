<header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php
  include("connection.php");
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
    <h2>List of Degree Programs</h2>
    <ul class="list-group">
    <?php
    {
        if (isset($_GET['department'])){
            $department = $_GET['department'];
            $result = mysqli_query($con, "SELECT * FROM programlist WHERE department_id = '$department'");
        } else {
            $result = mysqli_query($con, "SELECT * FROM programlist");
        }

        // Check if any results were found
        if (mysqli_num_rows($result) == 0) {
            echo 'No degree programs found in ' . $department;
        } else {
            // Loop through each row in the result set and display the degree program
            echo '<ul class="list-group">';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li class="list-group-item">' . '<h5>' . $row['degree_program'] . '</h5>' . '</li>';
            }
            echo '</ul>';
        }
    }
    ?>
    </ul>
    </div>
    </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



