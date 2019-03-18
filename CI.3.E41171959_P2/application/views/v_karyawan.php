<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | Kia Dzaky</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
		<?php foreach($karyawan as $u){ ?>
		<tr>
			<td><?php echo $u->nama_karyawan ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->no_telepon ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>