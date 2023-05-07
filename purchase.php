<?php
    include('check_login.php');
    include('header.php');
    // Get the textbook ID from the URL parameter
    if (isset($_GET['id'])) {
        $textbook_id = $_GET['id'];
        
        // Query the books table to get the book information
        $book_query = "SELECT id, Book_Name, ISBN FROM books WHERE id = '$textbook_id'";
        $book_result = mysqli_query($con, $book_query);
        
        if ($book_result && mysqli_num_rows($book_result) > 0) {
            $user_id = $_SESSION['user_id'];
            $book_data = mysqli_fetch_assoc($book_result);
            $book_id = $book_data['id'];
            $book_name = $book_data['Book_Name'];
            $isbn = $book_data['ISBN'];
            
            // Insert the order into the book_orders table
            $order_query = "INSERT INTO book_orders (user_id, book_id, book_name, isbn) VALUES ('$user_id', '$book_id', '$book_name', '$isbn')";
            $order_result = mysqli_query($con, $order_query);
            
            if ($order_result) {
                echo "Order successfully placed.";
            } else {
                echo "Error placing order: " . mysqli_error($con);
            }
        } else {
            echo "Book not found.";
        }
    } else {
        echo "Textbook ID not specified.";
    }

    header("location: textbook-orders.php");
// Close the database connection
mysqli_close($con);


?>