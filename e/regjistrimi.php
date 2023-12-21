

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


 if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $emri = $_POST['emri'];
    $password = $_POST['password'];
    
    // Shto të dhënat në tabelën e përshtatshme
    $sql = "INSERT INTO puntoret (emri, password) VALUES ('$emri','$password')";
    

    if ($conn->query($sql) === TRUE) {
        echo  '<script>alert("Regjistrimi u krye me sukses!");</script>';
        echo '<script>window.location.href = "regjistrimi.html";</script>';
    } else {
        echo "Gabim gjatë regjistrimit: " . $conn->error;
    }

 }
// Mbylle lidhjen me bazën e të dhënave
$conn->close();
?>
