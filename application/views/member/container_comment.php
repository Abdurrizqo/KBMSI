<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div class="text-right"><?php //echo $links.'<br />';?></div>
<div id="informasi"></div>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped">
<thead>
	<tr>
		<th width="70%">Judul</th>
		<th width="20%">Jumlah Komentar</th>
		<th width="10%">Aksi</th>
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
		<td><?php echo $row->JUDUL;?></td>
		<td class="text-center"><?php echo $row->JML;?></td>
		<td class="text-center"><?php echo anchor('member/komentar/list/'.$row->ID, 'Baca')?></td>
	</tr>
<?php }
}?>
</tbody>
</table>
</div>