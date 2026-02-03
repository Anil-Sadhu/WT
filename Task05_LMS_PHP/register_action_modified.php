<?php
include "db.php";

$username = trim($_POST['username']);
$password = trim($_POST['password']);
$name = trim($_POST['name']);

// Clean input
$username = strtolower($username);
$name = ucwords($name);

// Validation
if (strlen($username) < 4) {
    die("Username must be at least 4 characters");
}

if (strlen($password) < 6) {
    die("Password must be at least 6 characters");
}

// Secure strings
$username = addslashes($username);
$password = addslashes($password);
$name = addslashes($name);

// Insert query
$sql = "INSERT INTO users (username, password, name)
        VALUES ('$username', '$password', '$name')";

if (!mysqli_query($conn, $sql)) {
    die("Registration Failed");
}

echo "Registration Successful";
?>