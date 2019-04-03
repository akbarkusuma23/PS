<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter </title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter </h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($barang as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="kdbarang" value="<?php echo $u->kdbarang ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi" value="<?php echo $u->deskripsi ?>"></td>
			</tr>
			<tr>
				<td>Stok Barang</td>
				<td><input type="numeric" name="stokbarang" value="<?php echo $u->stokbarang ?>"></td>
			</tr>
            <tr>
				<td>Harga Barang</td>
				<td><input type="numeric" name="hargabarang" value="<?php echo $u->hargabarang ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>