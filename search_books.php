<?php
include 'header.php';
include 'config.php';
include 'sidebar.php';
?>

<div class="content">

<h2>Search Books</h2>

<form method="GET">
    <input type="text" name="search" placeholder="Enter title">
    <button type="submit">Search</button>
</form>

<?php
if (isset($_GET['search'])) {

    $search = $_GET['search'];

    $result = $conn->query(
        "SELECT * FROM books WHERE title LIKE '%$search%'"
    );

    while ($row = $result->fetch_assoc()) {
        echo "<div class='card'>
                📚 {$row['title']} <br>
                Author: {$row['author']} <br>
                Available: {$row['quantity']}
              </div>";
    }
}
?>

</div>

<?php include 'footer.php'; ?>
