<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div class="text-right"><?php echo $links.'<br />';?></div>
<div id="informasi"></div>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped">
<thead>
	<tr>
		<th width="40%">Judul</th>
		<th width="8%">Kategori</th>
		<th width="10%">Penulis</th>
		<th width="16%">Tanggal Dibuat</th>
		<th width="10%">Aktif</th>
		<th width="16%" colspan="2">Aksi</th>
	</tr>
</thead>
<tbody>
<?php
if($results == NULL){
	echo '<tr class="danger"><td colspan="6">Kosong</td></tr>';
}else{
foreach ($results as $row){
?>
	<tr>
		<td><a href="<?php echo base_url();?>berita/id/<?php echo $row->ID_KONTEN;?>" target="_blank"><?php echo ucwords($row->JUDUL);?></a></td>
		<td style="text-align: center;"><?php echo ucwords($row->K_KATEGORI == 1)? 'Berita': 'Lomba';?></td>
		<td style="text-align: center;"><?php echo $row->OWNER;?></td>
		<td style="text-align: center;"><?php echo $row->LAST_UPDATE;?></td>
		<td style="text-align: center;">
			<?php
			$aksi = 'aktifkan';
			$text = 'Nonaktif';
			if($row->IS_ACTIVE == 1){
				$aksi = 'nonaktifkan';
				$text = 'Aktif';
			}
			?>
			<a href="<?php echo base_url();?>member/berita/aktivasi/<?php echo $row->ID_KONTEN.'/'.$aksi?>"><?php echo $text;?></a>
		</td>
		<td width="8%" style="text-align: center;"><?php echo anchor('member/berita/edit/'.$row->ID_KONTEN, 'Edit');?>
		<td width="8%" style="text-align: center;"><?php echo anchor('member/berita/hapus/'.$row->ID_KONTEN, 'Hapus', 'onclick="javascript:return confirm(\'Apakah anda yakin menghapus data ini ?\');"');?></td>
	</tr>
<?php }}?>
</tbody>
</table>
</div>
<div class="row">
	<?php echo anchor('member/berita/tambah', 'Tambah Berita', 'class="btn btn-primary col-lg-12"');?>
</div>