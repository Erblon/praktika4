<?php
// Establish a database connection (replace these values with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "detyra";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sanitize input to prevent SQL injection (consider using prepared statements)
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Kontrollo nëse kredencialet janë të sakta për admin
    if ($username == "admin" && $password == "admin") {
        $_SESSION["username"] = $username;
        header("Location: admin.html");
        exit();
    } else {
        // Përdorues jo-admin, kontrollo në bazën e të dhënave
        $sql = "SELECT * FROM puntoret WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        // Nëse gjen një regjistrim të përshtatshëm, ridrejto në faqjapuntori.html
        if ($result->num_rows > 0) {
            header("Location: faqjapuntori.html");
            exit();
        } else {
            // Kredenciale jovalide, ridrejtohu përsëri në faqen e login-it
            header("Location: login.html");
            exit();
        }
    }
}

// Close the database connection
$conn->close();
?>
