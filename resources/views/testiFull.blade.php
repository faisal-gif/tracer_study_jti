<?php
include "koneksi.php";
$id_testimoni = abs (intval ($_GET['id_testimoni']));
$sql = "SELECT * FROM testimonis WHERE id_testimoni='$id_testimoni' LIMIT 1";
$query = mysql_query($sql);
$r = mysql_fetch_array($query);
echo "<h2>".$r['judul']."</h2>";
echo $r['isi'];
?>

