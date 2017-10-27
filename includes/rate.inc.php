<?php
    session_start();

include '../databaseconn.php';

$arvosana = $_POST['arvosana'];
$kayid = $_SESSION['id'];
$kuvanID = $_SESSION['ima'];

//arvostelu
        $sql = "INSERT INTO arvostelut (arvosana, kuvanID, arvostelijaID)
        VALUES ('$arvosana', '$kuvanID', '$kayid')";

        
//
if (mysqli_multi_query($conn, $sql)); {
    echo("Tiedot tallennettu!");
    $sql = "UPDATE kayttaja SET pisteet = (pisteet + 1) WHERE id ='$kayid'";
    mysqli_query($conn, $sql);
}
header("Location: ../rate.php");