<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped tablesorter">
	<thead>
		<tr>
			<th>Nomor</th>
			<th>User ID</th>
			<th>Nama</th>
			<th>Tipe</th>
			<th>User ID Update</th>
			<th>Aktif</th>
			<th colspan="2">Aksi</th>
		</tr>
	</thead>
	<tbody>
<?php
$i = 1;
foreach ($data AS $row){?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $row['USERID'];?></td>
			<td><?php echo $row['NAMA'];?></td>
			<td><?php echo ($row['IS_SUPER'] == 1)? 'Administrator': 'User Biasa';?></td>
			<td><?php echo $row['USERID_UPDATE'];?></td>
			<td>
			<?php
			$status = $aksi = '';
			if($row['IS_ACTIVE'] == 1){
				$status = 'Aktif';
				$aksi = 'nonaktifkan';
			}else{
				$status = 'Tidak Aktif';
				$aksi = 'aktifkan';
			}
			echo anchor('member/users/aktivasi/'.$row['USERID'].'/'.$aksi, $status);
			?>
			</td>
			<td><?php echo anchor('member/users/edit/'.$row['USERID'], 'Edit');?>
			<td><?php echo anchor('member/users/hapus/'.$row['USERID'], 'Hapus',
					'onclick="javascript:return confirm(\'Apakah anda yakin menghapus data ini ?\');"');?></td>
		</tr>
<?php
$i++;
}?>
	</tbody>
</table>
</div>
<?php echo anchor('member/users/tambah', 'Tambah User', 'class="btn btn-primary"');