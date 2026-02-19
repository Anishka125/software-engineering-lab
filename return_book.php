<?php
include 'config.php';
session_start();

$userId = $_SESSION['user_id'];

echo "<h2>Your Issued Books</h2>";

$sql = "SELECT books.id, books.title, transactions.due_date 
        FROM transactions
        JOIN books ON books.id = transactions.book_id
        WHERE transactions.user_id = $userId 
        AND transactions.return_date IS NULL";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {

    echo $row['title'];

    echo " <a href='process_return.php?id=".$row['id']."&due=".$row['due_date']."'>Return</a>";

    echo "<br>";
}
?>
