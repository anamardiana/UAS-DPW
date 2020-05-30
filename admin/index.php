<?php 
include 'header.php';
?>

<?php
$a = mysql_query("select * from barang_laku");
?>

<div>
	<h3>Selamat datang</h3>	
    <h3>Sistem Informasi</h3>
    <h3>Toko Berkah</h3>
</div>
<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>

<?php 
include 'footer.php';

?>