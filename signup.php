<?php
    include 'header-1.php';
?>
    
<br><br>
    
<?php
    if (isset($_SESSION['id'])) {
        echo "<p>Olet jo kirjutunut sisään!";
    } else {
        echo    "<p>Luo tunnus</p>
                <form action='includes/signup.inc.php' method='POST'>
                    <input type='text' name='knimi' placeholder='Nimimerkki'><br>
                    <input type='password' name='pwd' placeholder='Salasana'><br>
                    <button type='submit'>Tallenna</button><br>
                </form>";  
    }
?> 
    
<br>

</body>
</html>