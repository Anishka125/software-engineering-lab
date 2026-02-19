<?php
include 'header.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

include 'sidebar.php';
?>

<div class="content">

    <div class="topbar">
        <h2>Dashboard</h2>
        <div>
            👤 <?php echo $_SESSION['username']; ?> 
            (<?php echo $_SESSION['role']; ?>)
        </div>
    </div>

    <div class="card-container">

        <div class="card">
            <h4>Total Books</h4>
            <p>120</p>
        </div>

        <div class="card">
            <h4>Issued Books</h4>
            <p>35</p>
        </div>

        <div class="card">
            <h4>Pending Returns</h4>
            <p>8</p>
        </div>

    </div>

</div>

<?php include 'footer.php'; ?>
