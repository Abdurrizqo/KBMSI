<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<h3>Tambah Video</h3>
<?php
echo form_open(base_url().'member/video/', 'method="POST"');
echo '<div class="form-group">'.form_input('judul_video', '', 'autocomplete="off" placeholder="Judul Video" class="form-control"').'</div>';
echo '<div class="form-group">'.form_input('url_video', '', 'autocomplete="off" placeholder="URL Video" class="form-control"').'</div>';
echo '<div class="form-group">'.form_submit('submit', 'Simpan', 'class="btn btn-primary"').'</div>';
echo form_close();
?>
<div class="col-lg-12">
<?php
if ($video_list == NULL) {
	echo 'Belum ada video yang tersimpan';
}else{
	foreach ($video_list as $video){?>
	<div class="col-lg-4">
		<div class="alert alert-dismissable alert-info">
			<a href="<?php echo base_url();?>member/video/hapus/<?php echo $video['ID_VIDEO'];?>" class="close">&times;</a>
			<div class="row form-group">
				<div class="col-lg-12">
					<h4 class="text-center"><?php echo $video['JUDUL'];?></h4>
				</div>
			</div>
			<div class="row text-center form-group">
				<div class="col-lg-12">
					<a href="<?php echo $video['FILE_NAME'];?>" target="_blank">
					<?php
						$data = $video['FILE_NAME'];
						$pattern = 'watch?v=';
						$substr = substr($data, strpos($data, $pattern)+8);
					?>
					<img style="width: 136px; height: 135px;" src="http://img.youtube.com/vi/<?php echo $substr;?>/hqdefault.jpg" alt="<?php echo $video['JUDUL'];?>">
					</a>
				</div>
				<?php
					if($video['IS_ACTIVE'] == 1){
						$text = 'AKTIF';
						$changeto = 'nonaktifkan';
						$title = 'Klik untuk me-nonaktifkan';
					}else{
						$text = 'TIDAK AKTIF';
						$changeto = 'aktifkan';
						$title = 'Klik untuk mengaktifkan';
					}
				?>
				<em><strong>Status :</strong></em> <?php echo anchor(base_url().'member/video/aktivasi/'.$video['ID_VIDEO'].'/'.$changeto, $text, 'title="'.$title.'"')?>
			</div>
		</div>
	</div>
<?php }
}?></div>