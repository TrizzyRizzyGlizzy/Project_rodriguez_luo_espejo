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
<header>
    <nav class="navbar navbar-expand-lg navbar-dark p-4 fixed-top" data-bs-theme="dark" style="background-color: darkblue;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
        <img src="https://sjcconnect.sjc.edu.bz/images/logo.png" alt="SJCJC Logo" width="30" height="30" class="d-inline-block align-text-top">
        St. John's Junior College
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="d" data-bs-toggle="dropdown" aria-expanded="false">
                Academics
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="departments.php">Departments</a></li>
                <li><a class="dropdown-item" href="programs.php">Degree Programs</a></li>
                <li><a class="dropdown-item" href="courses.php">Courses</a></li>
            </ul>
            </li>
        </ul>
        <form class="d-flex" role="search" method="get" action="search.php">
            <input class="form-control me-2" name="keyword" type="search" placeholder="Search..." aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="profile.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                <li><a class="dropdown-item" href="purchases.php">Purchases</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</header>
<section class="mt-5">
    <div class="mt-5 p-3">
    <div class="container mt-5 pt-5">
    <h2>List of Degree Programs</h2>
    <ul class="list-group">
    <?php
    include("connection.php");
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



