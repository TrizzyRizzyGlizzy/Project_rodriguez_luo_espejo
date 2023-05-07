<header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php
  include('check_login.php');
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
        <h1>TextBook orders</h1>
        <h4>Your books will be provided to you at the libary <br> Simply show this list and pay in-person</h4>
        <?php
      // Retrieve the book orders associated with the currently logged-in user
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM book_orders WHERE user_id = '$user_id'";
$result = mysqli_query($con, $sql);

// Display the book orders in pretty rows using Bootstrap 5
if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-striped table-hover'>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>ISBN</th>
                </tr>
            </thead>
            <tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        $order_id = $row['order_id'];
        $book_id = $row['book_id'];
        $book_name = $row['book_name'];
        $isbn = $row['isbn'];
        echo "<tr>
                <td>$order_id</td>
                <td>$book_id</td>
                <td>$book_name</td>
                <td>$isbn</td>
            </tr>";
    }
    echo "</tbody></table>";
} else {
  header("Location: error.php");
}

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