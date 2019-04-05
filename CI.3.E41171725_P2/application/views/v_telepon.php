<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Nomor</th>
		</tr>
		<?php foreach($telepon as $u){ ?>
		<tr>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->nomor ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>