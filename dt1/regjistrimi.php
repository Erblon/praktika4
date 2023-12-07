<?php
// Lidhja me bazën e të dhënave
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "detyra";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrolloni lidhjen
if ($conn->connect_error) {
    die("Lidhja me bazën e të dhënave dështoi: " . $conn->connect_error);
}

// Marrja e të dhënave nga forma
$emri = $_POST['emri'];
$mbiemri = $_POST['mbiemri'];
$email = $_POST['email'];
$fjalekalimi = $_POST['fjalekalimi'];

// Shto të dhënat në tabelën e përshtatshme
$sql = "INSERT INTO puntoret (emri, mbiemri, email, fjalekalimi) VALUES ('$emri', '$mbiemri', '$email', '$fjalekalimi')";

if ($conn->query($sql) === TRUE) {
    echo "Regjistrimi u krye me sukses!";
} else {
    echo "Gabim gjatë regjistrimit: " . $conn->error;
}

// Mbylle lidhjen me bazën e të dhënave
$conn->close();
?>
