<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter </title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter </h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi"></td>
			</tr>
			<tr>
				<td>Stok Barang</td>
				<td><input type="numeric" name="stokbarang"></td>
			</tr>
            <tr>
				<td>Harga Barang</td>
				<td><input type="numeric" name="hargabarang"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>