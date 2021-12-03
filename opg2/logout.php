<?php
$active_page = 'logout';
include_once 'header.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
        <title>PHP Utlogging</title>
    </head>
    <body>
        <p>Vil du logge ut?</p>
        <form method="post">
            
            
            <input type="submit" value="Ja" name="submit" />
        </form>
    </body>
    <?php
        if(isset($_POST['submit'])){
            //Gjøre om POST-data til variabler
            
                //Gyldig logout
                //unset($_SESSION["password"]);
                //unset($_SESSION["username"]);
                session_destroy();
                
                header('location: index.php');
        }
    ?>
</html>