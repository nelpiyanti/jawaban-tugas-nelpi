<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="gaya.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form action="" method="post" >
	<center>
	<table >
	

<tr>
	<td>Nomor Mesin Kendaraan</td>
	<td><input type="text" name="a" id="a" autofocus="" autocomplete="off" required="" minlength="3"></td>
</tr>
<tr>
	<td>Nomor Rangka Kendaraan</td>
	<td><input type="text" name="b" id="b" autocomplete="off" required="" minlength="3"></td>
	</tr>
	<tr>
	<td>Jenis Kendaraan</td>
	<td><select name="c" id="c">
		<option>Sepeda Motor</option>
		<option>Mobil</option>
		<option>Sedan</option>
		<option>Bus</option>
		<option>Truk</option>
	</select></td>
	</tr>
	<tr>
	<td>Nama Kendaraan </td>
	<td><input type="text" name="d" id="d" autocomplete="off" required="" minlength="3"></td>
	</tr>
	<tr>
	<td>Tanggal Buat</td>
	<td><input type="date" name="e" id="e"></td>
	</tr><tr>
	<td>Nomor BPKB</td>
	<td><input type="text" name="g" id="g" autocomplete="off" required="" minlength="3"></td>
	</tr>
	<tr>
	<td>Nomor STNK</td><td><input type="text" name="h" id="h" autocomplete="off" required="" minlength="3"></td></tr>
	<tr>
	<td>Status STNK</td>
	<td><select name="i" id="i">
		<option>Pajak Masih Aktif</option>
		<option>Pajak Sudah Mati </option>
	</select></td>
	</tr>	
<tr>
<td>Catatan Kondisi</td>
<td>
<textarea id="f" name="f" required="" minlength="3"></textarea></td>
</tr>
<tr> 
<td></td>

	<td>
<button type="submit" name="kirim">Kirim</button>
<b><button><a href="daftar kendaraan dan cari.php" style="text-decoration: none;">Kembali Kedaftar</a></button></b>
</td>
</tr>
</table>
</center>
</body>
<footer >
 <p style="text-align: center; color: yellow;"> &copy;Evita Rahmadona 2021</p>
</footer>
</html>
<?php 
if (isset($_POST['kirim'])) {

	$nomer_mesin=htmlspecialchars($_POST['a']);
	$nomer_rangka=htmlspecialchars($_POST['b']);
	$jenis_kendaraan=htmlspecialchars($_POST['c']);
	$nama_kendaraan=htmlspecialchars($_POST['d']);
	$tanggal=htmlspecialchars($_POST['e']);
	$nomer_BPKB=htmlspecialchars($_POST['g']);
	$nomer_STNK=htmlspecialchars($_POST['h']);
	$status_STNK=htmlspecialchars($_POST['i']);
	$Catatan=htmlspecialchars($_POST['f']);
	
	$koneksi= new mysqli("localhost", "root", "", "kendaraan");/* baris ini untuk menghubungkan kedatabase */
	$sql="INSERT INTO `kendaraan` VALUES ('', '".$nomer_mesin."', '".$nomer_rangka."', '".$jenis_kendaraan."', '".$nama_kendaraan."', '".$tanggal."', '".$nomer_BPKB."', '".$nomer_STNK."', '".$status_STNK."', '".$Catatan."');";
	$q=$koneksi->query($sql);
if ($q) {
	echo "<script> alert(' data BERHASIL tambahkan');
document.location.href = 'daftar kendaraan dan cari.php';
	
	</script>";
}

else{
	echo "<script> alert(' data GAGAL tambahkan');
document.location.href = 'inputdata.php';
	</script>";
}

}



 ?>

<?php 
/*
halaman ini dibuat oleh nelpi yanti,
tanggal 01 Juni sampai 02 Juni 2021.!!!!

 */

 ?>
