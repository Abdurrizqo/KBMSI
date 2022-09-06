<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<h3>Simpan Gambar</h3>
<?php
echo form_open_multipart('/member/gallery/tambah-foto/'.$act, 'method="POST"');?>
<div class="form-group">
<input type="url" name="url" id="url-image" class="form-control" placeholder="URL Gambar" required="required" autocomplete="off" />
</div>
<?php
echo '<div class="form-group">';
echo form_submit('submit', 'Simpan', 'class="btn btn-primary"');
echo '</div>';
echo form_close();
?>
<div class="col-lg-3">
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Preview Gambar</h3>
	</div>
	<div class="panel-body">
		<img alt="image" id="load-image" style="max-height: 200px; max-width: 200px;" src="<?php echo base_url();?>src/img/No_image_available.svg" />
	</div>
</div>
</div>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped">
	<thead>
		<tr>
			<th style="width: 20%;">Thumbnail</th>
			<th style="width: 50%;">Judul</th>
			<th colspan="2" style="width: 30%;">Aksi</th>
		</tr>
	</thead>
	<tbody>
<?php
if ($img_list == NULL) {
	echo '<tr class="danger"><td colspan="3" style="text-align: center;">Belum ada gambar yang tersimpan</td></tr>';
}else{
	foreach ($img_list as $img){?>
		<tr>
			<td style="text-align: center;">
				<?php if(filter_var($img['FILE_NAME'], FILTER_VALIDATE_URL)){?>
					<img style="max-width: 200px;" alt="<?php echo ($img == NULL)? 'Gambar': $img['JUDUL'];?>" src="<?php echo $img['FILE_NAME'];?>" />
				<?php }else{?>
					<img style="max-width: 200px;" alt="<?php echo ($img == NULL)? 'Gambar': $img['JUDUL'];?>" src="<?php echo base_url();?>uploads/gallery/<?php echo $img['FILE_NAME'];?>" />
				<?php }?>
			</td>
			<td><?php echo ucwords(($img['JUDUL'] == NULL)? 'NULL': $img['JUDUL']);?></td>
			<td style="width:15%;"><a href="<?php echo base_url();?>member/hapus_foto/<?php echo $img['ID_FOTO'];?>">Hapus</a></td>
			<td style="width:15%;">
			<!-- gallery($aksi = NULL, $id_album = NULL, $status = NULL, $id_foto_set = NULL) -->
			<?php
			if($img['IS_COVER'] == 0){
				echo '<a href="'.base_url().'member/gallery/set-cover/'.$img['ID_ALBUM'].'/on/'.$img['ID_FOTO'].'">';
				echo 'Set Cover';
				echo '</a>';
			}else{
				echo 'Cover';
			}
			?>
			</td>
		</tr>
<?php }
}?>
	</tbody>
</table>
</div>