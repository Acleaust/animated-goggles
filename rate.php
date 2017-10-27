<?php
    include 'header-3.php'; 
//Includet
?> 
<br><br>
    
<h1>Arvioi kuva</h1>

<?php
$dir = "imgs/";
$images = scandir($dir);
$i = rand(2, sizeof($images)-1);
//Random kuva
    
$_SESSION['ima'] = $i;
$kayid = $_SESSION['id'];
//Muuttujat

$sql = "SELECT arvostelijaID, kuvanID FROM arvostelut WHERE arvostelijaID= '$kayid' AND kuvanID= '$i'";
$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_assoc($result)) { ?>
   <img src="imgs/<?php echo $images[$i]; ?>"/>
<?php
    
} elseif($row = mysqli_fetch_assoc($result)) {
    //header("Refresh:0");
    echo "Oho! Kuvat loppuivat";
} else {
    header("Refresh:0");
    //echo "Oho! Kuvat loppuivat";
} ?>

<br>

<?php
if (isset($_SESSION['id'])) { ?>

<form name="arvostelu" action="includes/rate.inc.php" method="POST">
    <input type="radio" name="arvosana" value="1">
    <label for="1">1</label>
    <input type="radio" name="arvosana" value="2">
    <label for="2">2</label>
    <input type="radio" name="arvosana" value="3" checked>
    <label for="3">3</label>
    <input type="radio" name="arvosana" value="4">
    <label for="4">4</label>
    <input type="radio" name="arvosana" value="5"> 
    <label for="5">5</label>
    <br>
    <button type="submit" name="vastaa" >Vastaa</button>
</form> <?php
;
} else {
    echo "Et ole kirjautunut sisään!";
}
?>