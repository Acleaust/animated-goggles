<?php
    include 'header-index.php';
?>

<br><br><br>
    
<br><br><br>
<div id="keski2">
    <h1>Arvioi kuvia</h1>
</div>
<div id="keski">
<?php
    if (isset($_SESSION['id'])) {
        echo "
        <h2>Tervetuloa!</h2>
        
        <form action='rate.php'>
            <button type='submit'>Arvioi kuvia</button>
        </form>
        <br>
        <form action='profile.php'>
            <button type='submit'>Profiilini</button>
        </form>
        <br>
        <form action='includes/logout.inc.php'>
	       <button type='submit'>Kirjaa minut ulos</button>
        </form>";
    } else {
        echo "<br><br>
        <div style='font-weight:500; font-size: 26px;'>Tervetuloa arvioimaan kuvia!</div>
        <br>
        <div style='font-weight:500; font-size: 26px;'>Klikkaa Aloita, luo itsellesi tunnus ja aloita kuvien arviointi!</div>
        <div id='maker'>
            TeamHasul
        </div>
        <div id='nappi'>
            <div style='position: relative; left: -50%;'>
            <form action='login.php'>
            <button type='submit'>Aloita</button>
            </form>
            </div>
        </div>";  
    }
?> 
</div>

</body>
</html>