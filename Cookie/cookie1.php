<?php
    $value = "Shasa";
    $value2 = "Shabrina Talita Kuswoyo";

    setcookie("username", $value);
    setcookie("fullname", $value2);

    echo "<h1>Ini Halaman Pengetesan cookie</h1>";

    echo "<h2>Klik <a href='cookie2.php'>disini</a>Untuk pengetesan cookie</h2>";
?>