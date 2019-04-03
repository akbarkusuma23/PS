<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter </h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>Kode Barang</th>
			<th>Nama</th>
			<th>Deskripsi</th>
            <th>Stok Barang</th>
            <th>Harga Barang</th>
			<th>Action</th>
		</tr>
		<?php 
		$kdbarang = 1;
		foreach($barang as $u){ 
		?>
		<tr>
			<td><?php echo $kdbarang++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->deskripsi ?></td>
            <td><?php echo $u->stokbarang ?></td>
            <td><?php echo $u->hargabarang ?></td>
			
			<td>
			      <?php echo anchor('crud/edit/'.$u->kdbarang,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->kdbarang,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>