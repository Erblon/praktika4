<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shtodetyrat";

// Krijo lidhjen me bazën e dhënash
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollo lidhjen
if ($conn->connect_error) {
    die("Lidhja me bazën e dhënash ka deshtuar: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $emri = $_POST['emri'];
    $detyrat = $_POST['detyrat'];

    // Shto detyrën në tabelën e duhur
    $sql = "INSERT INTO detyrat (emri, detyrat) VALUES ('$emri', '$detyrat')";

    if ($conn->query($sql) === TRUE) {
        // Detyra u shtua me sukses
        header("Location: detyrat.html");
        exit();
    } else {
        echo "Gabim: " . $sql . "<br>" . $conn->error;
    }
}

// Mbylle lidhjen me bazën e dhënash
$conn->close();
?>
