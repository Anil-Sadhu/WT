<?php
include "db.php";

$username = trim($_POST['username']);
$password = trim($_POST['password']);

$username = strtolower($username);

$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Database Error");
}

$row = mysqli_fetch_assoc($result);

if (!$row) {
    die("User not found");
}

// Case-sensitive comparison
if (strcmp($password, $row['password']) === 0) {
    echo "Login Successful";
    print "<br>Welcome " . htmlspecialchars($row['name']);
} else {
    die("Invalid Password");
}
?>