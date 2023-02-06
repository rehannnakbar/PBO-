<?php
include "index.php";
session_start();
?>
<html>
    <body>
        <table border="2" height="40%" width ="80%" align="center">
    <td><h3 align="center">selamat datang <?php echo $_SESSION['username']; ?> di pengaduan laporan masyarakat</h3></td>
        </table>
    </body>
</html>