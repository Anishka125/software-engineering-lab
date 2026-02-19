<?php
include 'config.php';
session_start();

$bookId = $_GET['id'];
$dueDate = $_GET['due'];

$returnDate = date("Y-m-d");

$fine = 0;

if (strtotime($returnDate) > strtotime($dueDate)) {

    $daysLate = (strtotime($returnDate) - strtotime($dueDate)) / (60 * 60 * 24);
    $fine = $daysLate * 5;   // ₹5 per day
}

/* Update Transaction */
$conn->query("
    UPDATE transactions 
    SET return_date='$returnDate', fine='$fine'
    WHERE book_id=$bookId 
    AND user_id=".$_SESSION['user_id']."
    AND return_date IS NULL
");

/* Make Book Available Again */
$conn->query("UPDATE books SET available=1 WHERE id=$bookId");

echo "Book Returned Successfully <br>";
echo "Fine: ₹".$fine."<br>";
echo "<a href='return_book.php'>Back</a>";
?>
