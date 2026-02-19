<?php
include 'header.php';
include 'config.php';
include 'sidebar.php';

if ($_SESSION['role'] != 'librarian') {
    die("Access Denied");
}
?>

<div class="content">

<h2>Add Book</h2>

<form method="POST">

    <input type="text" name="title" placeholder="Title" required>
    <input type="text" name="author" placeholder="Author" required>
    <input type="text" name="isbn" placeholder="ISBN" required>
    <input type="number" name="quantity" placeholder="Quantity" required>

    <button type="submit">Add Book</button>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $author = $_POST['author'];
    $isbn = $_POST['isbn'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO books (title, author, isbn, quantity)
            VALUES ('$title','$author','$isbn','$quantity')";

    if ($conn->query($sql)) {
        echo "<p style='color:green;'>Book Added ✅</p>";
    }
}
?>

</div>

<?php include 'footer.php'; ?>
