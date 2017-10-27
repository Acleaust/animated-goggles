<?php 
    include 'header-3.php';
    
    $kayid = $_SESSION['id'];

?>




<div id="sivupalkki">
    <div id="sivukuva">
        <img src="assets/profileicon.png">
    </div>
    <table style="width:100%;margin-top: 1px;">
    <p style="font-size: 30px;">
        <?php 
        $sql = "SELECT knimi FROM kayttaja WHERE id = $kayid";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        
            $kaynimi = $row['knimi'];
        echo "$kaynimi";
    ?>
    </p>
    <p>
        <a href="profile.php">Tiedot</a>
    </p>    
    <p>
        <a href="profile.php">Omat kuvat</a>
    </p>
        
</table>
</div>