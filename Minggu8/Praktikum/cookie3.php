<?php
setcookie("username", "", time() - 3600);
setcookie("namalengkap", "", time() - 3600);
echo "<h1>Cookie Berhasil dihapus.</h1>";
echo "<h2>Klik <a href='coba-cookie1.php'>di sini</a> untuk penciptaan cookies</h2>";
echo "<h2>Klik <a href='coba-cookie2.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>