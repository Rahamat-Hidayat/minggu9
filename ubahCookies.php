<?php
    $name = "mahasiswa";
    $value = "Rahmat Hidayat";
    setcookie($name, $value, time()+600);

    setcookie("Kelas", "MI-1E", time()+3600);
?>

<html>
    <body>
        <?php
            echo "Cookies telah dibuat";
        ?>
    </body>
</html>
