<?php
include 'config.php';
session_start();

$bookId = $_GET['id'];
$userId = $_SESSION['user_id'];

$issueDate = date("Y-m-d");
$dueDate = date("Y-m-d", strtotime("+7 days"));

/* Insert Transaction */
$sql = "INSERT INTO transactions (user_id, book_id, issue_date, due_date)
        VALUES ('$userId', '$bookId', '$issueDate', '$dueDate')";

if ($conn->query($sql)) {

    /* Update Book Availability */
    $conn->query("UPDATE books SET available=0 WHERE id=$bookId");

    echo "Book Issued Successfully <br>";
    echo "<a href='view_books.php'>Back</a>";

} else {
    echo "Error Issuing Book";
}
?>
