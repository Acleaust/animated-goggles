<?php
    include 'header-3-1.php';
//Includet


?> 
<br><br>

<h1 style="font-size:30px;margin-left:15%;">Tietosi, <?php echo "$kaynimi";?>!</h1>

<div id="boksi">
    <table style="width:100%;font-size:24px;">
        <tr>
            <th>Pisteet:</th>
            <th>Arvostelujen keskiarvo</th>
        </tr>
        <tr>
            <th style="font-size:520%;padding-top:0px;width:40%;">
            <?php 
            $sql = "SELECT pisteet FROM kayttaja WHERE id = $kayid";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        
            $kaynimi = $row['pisteet'];
        echo "$kaynimi";
    ?>
            </th>
            <th style="font-size:520%;padding-top:0px;">
            <?php 
            $sql = "SELECT Avg(arvosana) AS keskiarvo FROM arvostelut WHERE arvostelijaID = $kayid";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        
            $aka = $row['keskiarvo'];
        echo "$aka";
                ?>
            </th>
        </tr>
    </table>
</div>

<div id="boksi">
    <table style="width:100%;font-size:24px;">
        <tr>
            <th style="height:70px;width:40%;">Sähköposti</th>
            <th>Lisää säköposti:<form><input type="text" name="sposti" placeholder="Sähköposti"></form></th>
        </tr>
        <tr>
            <th>Salasana</th>
            <th>Syötä uusi salasana: <form><input type='password' name='pwd' placeholder='Salasana'>
                </form></th>
        </tr>
    </table>
</div>






<?php