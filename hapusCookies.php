<?php
    setcookie("mahasiswa", "", time()-600);
    setcookie("Kelas", "", time()-3600);
?>

<html>
    <body>
        <?php
            echo "Cookies mahasiswa telah dihapus <br>";
            echo "Cookies kelas telah dihapus";
        ?>
    </body>
</html>
