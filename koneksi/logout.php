<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['nama']);
session_destroy();
echo "<center><h3>Anda telah keluar sistem</h3><br><h2>Terima Kasih</h2> </center> ";
echo "<meta http-equiv='refresh' content='1;url=../'>";
?>