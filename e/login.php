<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "detyra";

$conn = new mysqli($servername, $username, $password, $database);
// Kontrollo nëse forma është paraqitur
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
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

// Mbyll lidhjen me bazën e të dhënave në fund të skriptit (pas përpunimit të kërkesës)
$conn->close();
?>
