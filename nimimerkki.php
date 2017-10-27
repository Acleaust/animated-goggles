<?php
    session_start();

include 'databaseconn.php';

$kauttajanimi = $_POST['kauttajanimi'];

$sql = "INSERT INTO kayttaja (kauttajanimi) 
VALUES ('$kauttajanimi')";
$result = mysqli_query($conn, $sql);

//session

$sql = "SELECT * FROM kayttaja WHERE kauttajanimi= ('$kauttajanimi') ";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
    $_SESSION['Kauttajanimi'] = $row['id'];
    //header("Location: etusivu.php");
} else {
    echo "Nimimerkki on jo käytössä.";
}

//header("Location: etusivu.php");

//ignore


$sql = "SELECT * FROM kayttaja WHERE kauttajanimi= ('$kauttajanimi') ";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
    echo "Tertulemast";
} else {
    echo "Nimimerkki on jo käytössä.";
}

//header("Location: etusivu.php");


