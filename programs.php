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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/filterizr/2.2.4/css/filterizr.min.css">
</head>
<body class="bg-dark-subtle">
<section class="mt-5">
    <div class="mt-5 p-3">
    <div class="container mt-5 pt-5">
    <h2>List of Degree Programs</h2>
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
            header("Location: error.php");
        } else {

            $program_id = array();
            $program = array();
            $track = array();
            $department = array();
            $department_id = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $program_id[] = $row['id'];
                $program[] = $row['degree_program'];
                $track[] = $row['academic_track'];
                $department[] = $row['department'];
                $department_id[] = $row['department_id'];
            }

            $programid_json = json_encode($program_id);
            $program_json = json_encode($program);
            $track_json = json_encode($track);
            $department_json = json_encode($department);
            $departmentid_json = json_encode($department_id);
            mysqli_close($con);
            
        }
    }
    ?>
<div class="m-2 row">
        <div class="rounded col-sm-3 p-4" style="background-color: darkgrey;">
        <div class="d-grid gap-2">
            <a type="button" class="btn btn-primary" href="programs.php?department=bus">Business</a>
            <a type="button" class="btn btn-primary" href="programs.php?department=cs">Computer Science</a>
            <a type="button" class="btn btn-primary" href="programs.php?department=humedu">Humanities & Education</a>
            <a type="button" class="btn btn-primary" href="programs.php?department=mthsci">Math & Science</a>
            <a type="button" class="btn btn-primary" href="programs.php?department=soc">Social Sciences</a>
        </div>
        </div>
        <div class="btn-container col-sm-9" id="button-container">
            <ul class="list-inline p-1 rounded" style="background-color: #002561">
                <?php
                // Create button elements for each item
                for ($i = 0; $i < count($program); $i++) {
                    echo '<li class="list-group-item p-2 border-bottom border-dark-subtle"><a type="button" class="btn btn-primary m-1 program " href="program-detail.php?program_id='.$program_id[$i].'">'.$program[$i].'</a>';
                    echo '<a type="button" class="btn btn-outline-secondary m-1 track" aria-disabled="true">'.$track[$i].'</a>';
                    echo '<a type="button" class="btn btn-outline-secondary m-1 department" aria-disabled="true">'.$department[$i].'</a></li>';
                }
                ?>
            </ul>
        </div>
</div>

</div>
    
    <script>
    // Parse JSON data from PHP
    var program_id = <?php echo $programid_json; ?>;
    var program = <?php echo $program_json; ?>;
    var track = <?php echo $track_json; ?>;
    var department = <?php echo $department_json; ?>;
    var department_id = <?php echo $departmentid_json; ?>;
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/filterizr/2.2.4/jquery.filterizr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



