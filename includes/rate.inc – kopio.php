<?php
    session_start();
    include '../databaseconn.php';

$arvosana = $_POST['arvosana'];
$kid = $_SESSION['id'];
$kuvanID = $_SESSION['ima'];

$sql = "SELECT * FROM arvostelut WHERE kuvanID=$kuvanID AND arvostelijaID=$kid";
$result = mysqli_query($conn, $sql);
    mysql_select_db("proto");
if (!$row = mysqli_fetch_assoc($result)) {
$sql = "INSERT INTO arvostelut (arvosana,kuvanID,arvostelijaID)       
        VALUES ( '$arvosana', '$kuvanID', '$kid' )";
        $result = mysqli_query($conn, $sql);
}

mysql_query($sql) or die(mysql_error() . "<br/>Query was: " . $sql);

//if (isset($_POST['arvosana'])) {
//        $sql = "INSERT INTO arvostelut (arvosana,kuvanID,arvostelijaID) 
//        VALUES ( '$arvosana', '$kuvanID', '$kid' )";
//        //if (!mysqli_query($conn, $sql)) {}
//        $result = mysqli_query($conn, $sql);
//        //header("Location: ../rate.php");
//        //echo "Arvosana: $arvosana, Kuva: $kuvanID, ID:$kid";
//            if(!$conn) {
//            die("Cannot connect : " . mysql_error());
//            }
//} else {
//    echo "Jotai meni vikaan.";
//}