<!DOCTYPE html>
<html>
<head>
    <title>Library System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>📚 Library Management System</h1>
    <p>Welcome to your digital library</p>

    <?php
    if (isset($_GET['registered'])) {
        echo "<p style='color:green;'>Registration Successful ✅ Please Login</p>";
    }
    ?>

    <div class="buttons">
        <a href="login.php" class="btn">Login</a>
        <a href="register.php" class="btn secondary">Register</a>
    </div>

</div>

</body>
</html>
