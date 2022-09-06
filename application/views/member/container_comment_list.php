<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div class="text-right"><?php //echo $links.'<br />';?></div>
<div id="informasi"></div>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped">
<thead>
	<tr>
		<th style="width: 20%;">Nama</th>
		<th style="width: 50%;">Komentar</th>
		<th style="width: 20%;">Tanggal</th>
		<th style="width: 10%;" colspan="3">Aksi</th>
	</tr>
</thead>
<tbody>
<?php
if($results == NULL){
	echo '<tr class="danger"><td colspan="6">Tidak ada komentar</td></tr>';
}else{
foreach ($results as $row){
?>
	<tr>
		<td><a href="mailto:<?php echo $row->EMAIL;?>"><?php echo $row->NAMA;?></a></td>
		<td><?php echo $row->KOMENTAR;?></td>
		<td><?php echo $row->TANGGAL;?></td>
		<td>
			<?php
			if($row->IS_ROOT == '0'){
				echo '<em>Balas</em>';
			}else{
				echo anchor(base_url().'member/komentar/balas/'.$row->ID_KONTEN.'/'.$row->ID_KOMENTAR, 'Balas');
			}
			?></td>
		<td>
			<?php
				if($row->IS_BANNED == 1){
					$text = 'Unbanned';
					$state = 'unbanned';
				}else{
					$text = 'Banned';
					$state = 'banned';
				}
				if($row->IS_ROOT == '0'){
					echo '<em>'.$text.'</em>';
				}else{
					echo anchor(base_url().'member/komentar/ban/'.$row->ID_KONTEN.'/'.$row->ID_KOMENTAR.'/'.$state, $text);
				}
			?>
		</td>
		<td>
			<?php echo anchor('member/komentar/hapus/'.$row->ID_KONTEN.'/'.$row->ID_KOMENTAR, 'Hapus', 'onclick="javascript: return confirm(\'Apakah anda yakin menghapus komentar ini ?\');"');?>
		</td>
	</tr>
<?php }
}?>
</tbody>
</table>
</div>