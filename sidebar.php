<div class="sidebar">

    <h3>📚 Library</h3>

    <a href="dashboard.php">Dashboard</a>

    <?php if ($_SESSION['role'] == 'librarian') { ?>
        <a href="add_book.php">Add Book</a>
        <a href="manage_books.php">Manage Books</a>
        <a href="issued_books.php">Issued Books</a>
    <?php } ?>

    <?php if ($_SESSION['role'] == 'student') { ?>
        <a href="search_books.php">Search Books</a>
        <a href="my_books.php">My Books</a>
    <?php } ?>

    <a href="logout.php">Logout</a>

</div>
