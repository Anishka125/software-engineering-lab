<?php 
include 'config.php'; 
session_start();
?>

<h2>Books List</h2>

<?php
$sql = "SELECT * FROM books";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {

    echo $row['title'] . " - " . $row['author'];

    if ($row['available'] == 1) {

        echo " (Available)";

        if ($_SESSION['role'] == "student") {
            echo " <a href='issue_book.php?id=".$row['id']."'>Issue</a>";
        }

    } else {
        echo " (Issued)";
    }

    echo "<br>";
}
?>
