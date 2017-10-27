<?php

    session_start();

    include 'databaseconn.php';

  $sql = "SELECT kuvaID FROM kuva WHERE kuvaID=$id";
    array_rand($resultset);
  $result = mysqli_query($conn, $sql);

    $kuvaID = $_GET['id'];

  $row = mysql_fetch_assoc($result);

    //header("Content-type: image/jpeg");
    //echo '<img src="kuva/'.$row[kuvaID].'"/>';
    echo $row['id'];

//select * from table order by rand() limit 10
?>

