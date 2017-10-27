<?php
    session_start();

include '../databaseconn.php';

$knimi = $_POST['knimi'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM kayttaja WHERE knimi ='$knimi'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
        $sql = "INSERT INTO kayttaja (knimi, pwd) 
        VALUES ('$knimi', '$pwd')";
        $result = mysqli_query($conn, $sql);
        header("Location: ../login.php");
} else {
    echo "Nimimerkki on jo käytössä.";
}