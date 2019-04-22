<!DOCTYPE html>
<html>
<head>
<!--	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title> -->
</head>
<body>

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
		$no = 1;
		foreach($barang as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
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
	<a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a>
</body>
</html>