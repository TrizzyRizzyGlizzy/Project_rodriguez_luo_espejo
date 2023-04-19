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
    <?
    session_start();
    include("connection.php");
    include("functions.php");
    ?>
    <header class="d-flex flex-column justify-content-center container pt-4">
    <div class="d-flex justify-content-center row">
    <nav class="navbar navbar-expand-sm mb-2 rounded col-12 col-md-6 col-lg-12" data-bs-theme="dark" style="background-color: darkblue;">
    <div class="container-fluid col">
    <a class="navbar-brand icon-link icon-link-hover d-flex justify-content-center align-items-center fw-semibold text-white m-3" href="index.php">
        <img src="https://sjcconnect.sjc.edu.bz/images/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top m-3">
        St. John's Junior College
    </a>
    <div class="btn-group m-4 flex-wrap" role="group" aria-label=" Navbar Button group with nested dropdown">
        <a type="button" href="index.php" class="btn btn-light">Home</a>
        <div class="d-flex justify-content-center align-items-center btn-group" role="group">
            <li class="nav-item dropdown list-unstyled">
                <a class="nav-link dropdown-toggle p-2 bg-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Academics
                </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Departments</a></li>
                <li><a class="dropdown-item" href="#">Degree Programs</a></li>
                <li><a class="dropdown-item" href="#">Courses</a></li>
            </ul>
            </li>
        </div>
        <button type="button" class="btn btn-light bg-white">News</button>
        <button type="button" class="btn btn-light bg-white">Contact</button>
        <button type="button" class="btn btn-light bg-white">About</button>
    </div>
        <form class="d-flex m-4 col" role="search" method="post" action="search.php">
        <input class="form-control me-2" type="search" name="keyword" placeholder="Search..." aria-label="Search">
        <button class="btn btn-outline-success text-white" style="border-width: 1px; border-color: white;" type="submit">Search</button>
      </form>
    <div class="d-flex justify-content-end m-4">
        <div class="btn-group col">
            <a href="account.php" class="btn btn-primary">
                <i class="bi bi-person-circle"></i> 
            </a>
            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Textbook Orders</a></li>
                <li><a class="dropdown-item" href="#">Account Information</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    </div>
    </div>
    </nav>
    </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>