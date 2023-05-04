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