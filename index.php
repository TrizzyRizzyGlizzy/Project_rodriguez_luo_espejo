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
<style> 
    body {
      background-image: url("https://www.americamagazine.org/sites/default/files/main_image/2022/05/17/20220512T1330-BELIZE-JESUIT-ST-JOHNS-1690893.JPG.JPG");
      min-height: 500px;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    </style>
<body style="background-color:lightgrey">
<section class="hero-section pt-5">
  <div class="container pt-5">
    <div class="row pt-5">
      <div class="col-md-12">
        <p class="fs-1 fw-bold">Welcome to St. John's Junior College</p>
        <p style="color:grey">We are a leading institution for junior college education, offering a range of programs in science, arts, and commerce. Our mission is to provide our students with a world-class education that prepares them for success in their careers and in life.</p>
        <a href="about.php" class="btn btn-primary mb-2">Learn More</a>
      </div>
    </div>
  </div>
</section>
<section class="departments-section pt-5 mb-5">
    <div class="container-fluid pt-4"> 
      <div class="row pt-3">

        <style>
        .center {
            margin: auto;
            width: 60%;
            border: 2px solid white;
            padding: 10px;
            background-color: black;
          }
        </style>

<style>
    .center2 {
        margin: auto;
        width: 60%;
        border: 10px solid black;
        padding: 10px;
        background-color: white;
      }
    </style>
        <div class ="center p-5">
          <div class="department-card">
            <div style = "color: white;" class="department-icon"><i class="bi bi-briefcase"></i></div>
            <h3 style = "color: white;"><b>Business</b></h3>
            <p style = "color: white;">Introduction to Business covers the scope and sequence of most introductory business courses. It introduces the application of business concepts, with attention to the knowledge and skills necessary for student success in this course and beyond.</p>   
            <a href="programs.php?department=bus" class="btn btn-light">Learn More</a>
            <img src="https://png.pngtree.com/png-vector/20190330/ourmid/pngtree-vector-business-plan-icon-png-image_894841.jpg" style = "float: right" width="150" height="150">
          </div>
        </div>
        <div class="center2 p-5">
          <div class="department-card">
            <div class="department-icon"><i class="bi bi-laptop"></i></div>
            <h3><b>Computer Science</b></h3>
            <p>Introduction to a broad and robust understanding of Computer Science and Programming. It helps one to think algorithmically and solve programming problems efficiently.</p>
            <a href="programs.php?department=cs" style = "background-color: black; color: white;" class="btn btn-light">Learn More</a>
            <img src="https://cdn-icons-png.flaticon.com/512/3067/3067260.png" style = "float: right" width="150" height="150">
          </div>
        </div>
        <div class="center p-5">
          <div class="department-card">
            <div style = "color: white;" class="department-icon"><i class="bi bi-book"></i></div>
            <h3 style = "color: white;"><b>Humanities & Education</b></h3>
            <p style = "color: white;">Introduction to Humanities and Education provides knowledge that concern themselves with human beings and their culture or with analytic and critical methods of inquiry derived from an appreciation of human values and of the unique ability of the human spirit to express itself.</p>
            <a href="programs.php?department=humedu" class="btn btn-light">Learn More</a>
            <img src="https://www.pngkit.com/png/full/127-1277427_education-icon-white-png-education-logo-png-white.png" style = "float: right" width="150" height="150">
          </div>
        </div>
        <div class="center2 p-5">
          <div class="department-card">
            <div class="department-icon"><i class="bi bi-calculator"></i></div>
            <h3><b>Math & Science</b></h3>
            <p>Introduction to Math & Science allow students to learn the basic concepts, processes, ways of thinking, and applications in math and natural science, and promotes an understanding of central issues related to the impacts of science and technology on society.</p>
            <a href="programs.php?department=mthsci" style = "background-color: black; color: white;" class="btn btn-light">Learn More</a>
            <img src="https://cdn4.iconfinder.com/data/icons/online-course-2/512/science-technology-engineering-maths-512.png" style = "float: right" width="150" height="150">
          </div>
        </div>
        <div class="center p-5">
          <div class="department-card">
            <div style = "color: white;" class="department-icon"><i class="bi bi-calculator"></i></div>
            <h3 style = "color: white;"><b>Social Science</b></h3>
            <p style = "color: white;">Introduction to Social Science gives one various aspects of human society, which include its functioning and development, interaction and interpersonal relationships between individuals, etc.</p>
            <a href="programs.php?department=soc" class="btn btn-light">Learn More</a>
            <img src="https://flaticons.net/icon.php?slug_category=people&slug_icon=user-group" style = "float: right" width="150" height="150">
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include('footer.php');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>