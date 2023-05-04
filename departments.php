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
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
<section class="departments-section pt-5">
  <div class="container-fluid pt-4">
    <div class="row pt-3">
      <div class="col-12 bg-primary p-5" style="min-height: 70vh">
        <div class="department-card">
          <div class="department-icon"><i class="bi bi-briefcase"></i></div>
          <h3>Business</h3>
          <p>Our business department offers programs in accounting, finance, marketing, and more.</p>
          <a href="programs.php?department=bus" class="btn btn-light">Learn More</a>
        </div>
      </div>
      <div class="col-12 bg-secondary p-5" style="min-height: 70vh">
        <div class="department-card">
          <div class="department-icon"><i class="bi bi-laptop"></i></div>
          <h3>Computer Science</h3>
          <p>Our computer science department offers programs in software development, data science, and more.</p>
          <a href="programs.php?department=cs" class="btn btn-light">Learn More</a>
        </div>
      </div>
      <div class="col-12 bg-success p-5" style="min-height: 70vh">
        <div class="department-card">
          <div class="department-icon"><i class="bi bi-book"></i></div>
          <h3>Humanities & Education</h3>
          <p>Our humanities & education department offers programs in English, history, education, and more.</p>
          <a href="programs.php?department=humedu" class="btn btn-light">Learn More</a>
        </div>
      </div>
      <div class="col-12 bg-danger p-5" style="min-height: 70vh">
        <div class="department-card">
          <div class="department-icon"><i class="bi bi-calculator"></i></div>
          <h3>Math & Science</h3>
          <p>Our math & science department offers programs in mathematics, physics, biology, and more.</p>
          <a href="programs.php?department=mthsci" class="btn btn-light">Learn More</a>
        </div>
      </div>
      <div class="col-12 p-5" style="min-height: 70vh; background-color: yellow;">
        <div class="department-card">
          <div class="department-icon"><i class="bi bi-calculator"></i></div>
          <h3>Social Science</h3>
          <p>Our math & science department offers programs in mathematics, physics, biology, and more.</p>
          <a href="programs.php?department=soc" class="btn btn-light">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>