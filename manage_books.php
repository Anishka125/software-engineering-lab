<?php
include 'header.php';
include 'config.php';
include 'sidebar.php';
?>

<div class="content">

<h2>Manage Books</h2>

<table border="1" cellpadding="10">

<tr>
    <th>Title</th>
    <th>Author</th>
    <th>ISBN</th>
    <th>Quantity</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM books");

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['title']}</td>
            <td>{$row['author']}</td>
            <td>{$row['isbn']}</td>
            <td>{$row['quantity']}</td>
          </tr>";
}
?>

</table>

</div>

<?php include 'footer.php'; ?>
