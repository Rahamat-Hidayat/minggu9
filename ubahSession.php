<?php
    session_start();
?>

<html>
    <body>
        <?php
            $_SESSION["makananfav"] = "Sate Padang";

            echo "Session makanan telah diset";
        ?>
    </body>
</html>