<?php
$conn = mysqli_connect('localhost', 'root', '', 'signup');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if (isset($_POST['Submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $stmt = $conn->prepare("INSERT INTO users(username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    echo "Registered Successfully....";

    $stmt->close();
}
$conn->close();
?>