<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Data Mahasiswa</title>
	<!--Load file bootstrap.css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>

<body>


<div class="container">
	<h1>List Data <strong>Mahasiswa</strong></h1>

	<center>
		<form action="<?php echo base_url()?>index.php/Mahasiswa/search" method="post">
  		<input type="text"  placeholder="search" name="keyword">
  		<button type="submit">Cari</button>
   </form>
   
	</center>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Nim</th>
				<th>Tgl Lahir</th>
				<th>IPK</th>
				<th>Kelas</th>
				<th>Aksi</th>
				
			
			</tr>
		</thead>
		<tbody>
			<!--Fetch data dari database-->
            <?php foreach ($data->result() as $row) :?>
                <tr>
                	<td><?php echo $row->nama_mahasiswa; ?></td>
                    <td><?php echo $row->nim; ?></td>                   
                    <td><?php echo $row->tgl_lahir; ?></td>
                    <td><?php echo $row->ipk; ?></td>
                    <td><?php echo $row->kelas; ?></td>
                    <td>
                    	<a href="<?=base_url()?>index.php/Mahasiswa/delete">Hapus</a> ||
                    	<a href="<?=base_url()?>index.php/Mahasiswa/update">Edit</a>
                    </td>
                   
                </tr>
            <?php endforeach; ?>
        </tbody>
	</table>
    <div class="row">
    	<div class="col">
    		<!--Tampilkan pagination-->
    		<?php echo $pagination; ?>
    	</div>
    </div>
     

</div>
<!--Load file bootstrap.js-->
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>