<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped">
<thead>
	<tr>
		<th width="10%">Nomor</th>
		<th width="20%">Nama Album</th>
		<th width="20%">Pemilik</th>
		<th width="20%">Update Terakhir</th>
		<th width="10%">Status</th>
		<th width="20%" colspan="2">Aksi</th>
	</tr>
</thead>
<tbody>
<?php
if($data_table == NULL){
	echo '<tr><td colspan="6"><div class="text-center">Gallery Kosong</div></td></tr>';
}else{
	$i = 1;
	foreach ($data_table as $data){
?>
	<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $data['ALBUM'];?></td>
		<td><?php echo $data['USERID'];?></td>
		<td><?php echo $data['LAST_UPDATE'];?></td>
		<td>
		<?php
			if($data['IS_ACTIVE'] == 0){
				$text = 'Nonaktif';
				$status = 'aktifkan';
			}else{
				$text = 'Aktif';
				$status = 'nonaktifkan';
			}
			echo anchor('member/gallery/aktivasi/'.$data['ID_ALBUM'].'/'.$status, $text);
		?>
		</td>
		<td width="10%"><?php echo anchor('member/gallery/tambah-foto/'.$data['ID_ALBUM'], 'Tambah Foto');?></td>
		<td width="10%"><?php echo anchor('member/gallery/hapus/'.$data['ID_ALBUM'], 'HAPUS', 'onclick="javascript: return confirm(\'Apakah anda yakin menghapus album folder ini ?\');"');?></td>
	</tr>
<?php
	$i++;
	}
}?>
</tbody>
</table>
<?php echo anchor('member/gallery/tambah', 'Buat Folder Album Baru');