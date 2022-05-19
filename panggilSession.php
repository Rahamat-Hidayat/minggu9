<?php
    session_start();
?>
<html>
    <body>
        <?php
            echo "Makanan favorit saya adalah ".$_SESSION["makananfav"];  
            echo "<br>";
            echo "Minuman favorit saya adalah ".$_SESSION["minumanfav"];

            print_r($_SESSION);
        ?>
    </body>
</html>
