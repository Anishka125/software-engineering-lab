<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Register</h2>

<form method="POST">

    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <select name="role">
        <option value="student">Student</option>
        <option value="librarian">Librarian</option>
    </select>

    <button type="submit">Register</button>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $sql = "INSERT INTO users (username, email, password, role)
            VALUES ('$username', '$email', '$password', '$role')";

    if ($conn->query($sql)) {
        echo "<p style='color:green;'>Registration Successful ✅</p>";
    } else {
        echo "<p class='error'>Error: {$conn->error}</p>";
    }
}
?>

<a href="index.php">← Back</a>

</div>

</body>
</html>
