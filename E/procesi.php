<?php
ob_start(); // Fillo buffering

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "njoftimet";

// Krijo lidhjen me bazën e dhënash
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollo lidhjen
if ($conn->connect_error) {
    die("Lidhja me bazën e dhënash ka deshtuar: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $titulli = $_POST['titulli'];
    $puntori = $_POST['puntori'];
    $orari = $_POST['orari'];
    $pushimi = $_POST['pushimi'];
    $paga = $_POST['paga'];

    // Shto njoftimin në tabelën e duhur
    $sql = "INSERT INTO njoftimet (titulli, puntori, orari, pushimi, paga)
            VALUES ('$titulli', '$puntori', '$orari', '$pushimi', '$paga')";

    if ($conn->query($sql) === TRUE) {
        // Njoftimi u shtua me sukses
        header("Location: Njoftimet.html");
        ob_end_flush(); // Dërgo output-in dhe mbylle buffering
        exit();
    } else {
        echo "Gabim: " . $sql . "<br>" . $conn->error;
    }

    // Mbylle lidhjen me bazën e dhënash
    $conn->close();
}
ob_end_flush(); // Nëse nuk kalohet në if, dërgo output-in dhe mbylle buffering
?>
