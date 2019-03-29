<center><h1>Data Perusahaan</h1></center>

<div class="container">
<table border="1" class="table"  class="thead-light">
	<thead class="thead-dark">
	<tr>
				<th>Nama</th>
				<th>Nim</th>
				<th>Tgl Lahir</th>
				<th>IPK</th>
				<th>Kelas</th>
				<th>Aksi</th>
	</tr>
</thead>

	<?php
	$no=1;
	foreach($result as $r) {
		?>
	<tr>
		<td><?php echo $nama_mahasiswa ?></td>
		<td><?php echo $r->nim ?></td>
		<td><?php echo $r->tgl_lahir ?></td>
		<td><?php echo $r->ipk ?></td>
		<td><?php echo $r->kelas ?></td>
	</tr>
	<?php
		$no++;
		}
	?>
</table><br>
</div>