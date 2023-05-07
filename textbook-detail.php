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
      <div class="col-md-6">
      <?php
// Get the textbook ID from the query string
$textbook_id = $_GET['id'];

// Prepare the database query to retrieve textbook details
$query = "SELECT Book_Name, Year, Category, Page_Count, Author, Publisher, ISBN, price, Description FROM books WHERE id = $textbook_id";

// Execute the query and handle any errors
$result = mysqli_query($con, $query);
if (!$result) {
  die('Database query failed: ' . mysqli_error($con));
}

// Retrieve the textbook details
$row = mysqli_fetch_assoc($result);
$book_name = $row['Book_Name'];
$year = $row['Year'];
$category = $row['Category'];
$page_count = $row['Page_Count'];
$author = $row['Author'];
$publisher = $row['Publisher'];
$isbn = $row['ISBN'];
$price = $row['price'];
$description = $row['Description'];

// Display the textbook details
echo "<h2>$book_name</h2>";
echo "<p><strong>Year:</strong> $year</p>";
echo "<p><strong>Category:</strong> $category</p>";
echo "<p><strong>Page Count:</strong> $page_count</p>";
echo "<p><strong>Author:</strong> $author</p>";
echo "<p><strong>Publisher:</strong> $publisher</p>";
echo "<p><strong>ISBN:</strong> $isbn</p>";
echo "<p><strong>Price:</strong> $price</p>";
echo "<p><strong>Description:</strong> $description</p>";

// Display the "Purchase" button
echo "<a href='purchase.php?id=$textbook_id' class='btn btn-primary'>Purchase</a>";

// Close the database connection
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