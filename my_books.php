<?php
include 'header.php';
include 'config.php';
include 'sidebar.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];
?>

<div class="content">

<h2>My Books</h2>

<table>

<tr>
    <th>Title</th>
    <th>Author</th>
    <th>Issue Date</th>
    <th>Return Date</th>
</tr>

<?php

$sql = "SELECT books.title, books.author, issued_books.issue_date, issued_books.return_date
        FROM issued_books
        JOIN books ON issued_books.book_id = books.id
        WHERE issued_books.user_id = '$user_id'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td>{$row['title']}</td>
                <td>{$row['author']}</td>
                <td>{$row['issue_date']}</td>
                <td>{$row['return_date']}</td>
              </tr>";
    }

} else {
    echo "<tr><td colspan='4'>No Books Issued 📚</td></tr>";
}

?>

</table>

</div>

<?php include 'footer.php'; ?>
