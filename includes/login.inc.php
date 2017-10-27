<?php
    session_start();

include '../databaseconn.php';

$knimi = $_POST['knimi'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM kayttaja WHERE knimi='$knimi' AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
    echo "Väärä nimimerkki tai salasana!";
} else {
    $_SESSION['id'] = $row['id'];
    header("Location: ../index.php");
}
