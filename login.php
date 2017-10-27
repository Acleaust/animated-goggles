<?php
    include 'header-2.php';
?>
    
<br><br>

<?php
    if (isset($_SESSION['id'])) {
        echo "Olet jo kirjautunut sisään!";
    } else {
        echo    "<p>Kirjaudu sisään</p>
                <form action='includes/login.inc.php' method='post'>
                    <input type='text' name='knimi' placeholder='Nimimerkki'><br>
                    <input type='password' name='pwd' placeholder='Salasana'><br>
                    <button type='submit'>Kirjaudu sisään</button>
                </form>
                <br><br><br>
                <form action='signup.php'>
	               <button type='submit'>Luo tunnus</button>
                </form>";  
    }
?> 



    
</body>
</html>