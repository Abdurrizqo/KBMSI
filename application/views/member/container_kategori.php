<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<table>
<tr>
<th>Kode</th>
<th>Nama</th>
<th>Penulis</th>
<th>Tanggal Dibuat</th>
<th>Aktif</th>
<th colspan="2">Aksi</th>
</tr>
<?php foreach ($data AS $row){?>
	<tr>
		<td><?php echo $row['K_KATEGORI'];?></td>
		<td><?php echo $row['KATEGORI'];?></td>
		<td><?php echo $row['USERID'];?></td>
		<td><?php echo $row['LAST_UPDATE'];?></td>
		<td><?php echo ($row['IS_ACTIVE']) == 1? 'Aktif': 'Tidak Aktif';?></td>
		<td><?php echo anchor('member/kategori/edit/'.$row['K_KATEGORI'], 'Edit');?>
		<td><?php echo anchor('member/kategori/hapus/'.$row['K_KATEGORI'], 'Hapus',
				'onclick="javascript:return confirm(\'Apakah anda yakin menghapus data ini ?\');"');?></td>
	</tr>
<?php }?>
</table>
<?php echo anchor('member/kategori/tambah', 'Tambah');?>