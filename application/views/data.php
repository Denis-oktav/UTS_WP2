<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>NPM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Operasi</th>
		</tr>
		<?php
	 	foreach ($mahasiswa->result() as $mhs) 
	 		{ ?>
	 		<tr class="info">
	 			<td><?php echo $mhs->id;?></td>
	 			<td><?php echo $mhs->npm;?></td>
	 			<td><?php echo $mhs->nama;?></td>
	 			<td><?php echo $mhs->jk;?></td>
	 			<td><?php echo $mhs->tgl_lhr;?></td>
	 			<td><?php echo $mhs->alamat; ?></td>
	 			<td>
		 			<form method="POST" action="<?php echo site_url(); ?>/c_homepage/deleteData/<?php echo $mhs->id ?>">
						<button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
		 			</form>

		 			<form method="POST" action="<?php echo site_url(); ?>/c_homepage/updateData/<?php echo $mhs->id ?>">
						<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
					</form>
	 			</td>
	 		</tr>
		<?php 
			} ?> 
	</table>

	<h2><a class="btn btn-primary" href="<?php echo site_url(); ?>/c_homepage/gantiHalaman">Tambah Mahasiswa</a></h2>
</body>
</html>