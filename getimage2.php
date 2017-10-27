<?php
    session_start();

include 'databaseconn.php';

$result = mysqli_query("SELECT * FROM kuva ORDER BY RAND()");

while($row = mysqli_fetch_assoc($result)){       
    echo '<img src="get.php?id='.$row[id].'" />';
}

?>