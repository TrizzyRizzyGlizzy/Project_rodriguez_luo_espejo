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
      <div class="container my-5">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTJVjHhnWN38ebyke3zd9bTA2j65AxU5heWwN1idDBDLiHx_tlO" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tyler Rodriguez</h5>
            <p class="card-text">Tyler is responsible for the functionality and overall design of this project. He is a student in the CIS 286 WWW Interactive Class.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTCb5hYFwiBGc7ApTRNW3BpYM7biLb70GGMq431Hyoq-9NyNMy6" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Vincent Luo</h5>
            <p class="card-text">Vincent is responsible for the database of this project using SQL. He is a student in the CIS 286 WWW Interactive Class.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Javon Espejo</h5>
            <p class="card-text">Javon is responsible for the CSS/JS of this project. He is a student in the CIS 286 WWW Interactive Class.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
      </div>
    </div>
  </div>
</section>
<?php include('footer.php');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>