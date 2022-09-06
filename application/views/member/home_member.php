<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$sess = $this->session->userdata('logged_in');
$id = $sess['id'];
$is_super = $sess['is_super'];
foreach ($user as $field){
	$nama = $field['NAMA'];
}
if($is_super == 1){
?>
<div class="row">
	<div class="col-lg-4">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="row">
					<div class="col-lg-3">
						<i class="fa fa-files-o fa-5x text-left"></i>
					</div>
					<div class="col-lg-9">
						<p class="announcement-text fa-2x">Manajemen Konten</p>
						<p class="announcement-text text-right">Berita dan Lomba</p>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url()?>member/berita">
				<div class="panel-footer announcement-bottom">
					<div class="row">
						<div class="col-xs-6">Kelola Konten</div>
						<div class="col-xs-6 text-right"><i class="fa fa-arrow-circle-right"></i></div>
					</div>
				</div>
			</a>
		</div>
	</div>
	
	<div class="col-lg-4">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<div class="row">
					<div class="col-lg-3">
						<i class="fa fa-users fa-5x text-left"></i>
					</div>
					<div class="col-lg-9">
						<p class="announcement-text fa-2x">Manajemen User</p>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url()?>member/users">
				<div class="panel-footer announcement-bottom">
					<div class="row">
						<div class="col-xs-6">Kelola User</div>
						<div class="col-xs-6 text-right"><i class="fa fa-arrow-circle-right"></i></div>
					</div>
				</div>
			</a>
		</div>
	</div>
	
	<div class="col-lg-4">
		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="row">
					<div class="col-lg-3">
						<i class="fa fa-picture-o fa-5x"></i>
					</div>
					<div class="col-lg-9">
						<p class="announcement-text fa-2x">Manajemen Gallery</p>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url()?>member/gallery">
				<div class="panel-footer announcement-bottom">
					<div class="row">
						<div class="col-xs-6">Kelola Galeri</div>
						<div class="col-xs-6 text-right"><i class="fa fa-arrow-circle-right"></i></div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-4">
	</div>
	
	<div class="col-lg-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-lock"></i> Ganti Password <?php echo $nama;?></h3>
			</div>
			<div class="panel-body">
			<div class="info"></div>
				<?php
					echo form_open('post/password', 'method="POST" id="form" role="form"');
					echo form_hidden('user', $id);
				?>
				<div class="form-group">
				<?php echo form_password('old', '', 'class="form-control" placeholder="Password Lama" required')?>
				</div>
				<div class="form-group">
				<?php echo form_password('new', '', 'class="form-control" placeholder="Password Baru" required');?>
				</div>
				<div class="form-group" style="text-align: center;">
				<?php echo form_submit('simpan', 'Simpan', 'id="post" class="btn btn-primary"');?>
				<?php echo form_reset('reset', 'Reset', 'class="btn btn-warning"');?>
				</div>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
</div>
<?php }elseif($is_super == 0){?>
<div class="row">
	<div class="col-lg-4">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="row">
					<div class="col-lg-3">
						<i class="fa fa-files-o fa-5x text-left"></i>
					</div>
					<div class="col-lg-9">
						<p class="announcement-text fa-2x">Manajemen Konten</p>
						<p class="announcement-text text-right">Berita dan Lomba</p>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url()?>member/berita">
				<div class="panel-footer announcement-bottom">
					<div class="row">
						<div class="col-xs-6">Kelola Konten</div>
						<div class="col-xs-6 text-right"><i class="fa fa-arrow-circle-right"></i></div>
					</div>
				</div>
			</a>
		</div>
	</div>
	
	<div class="col-lg-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-lock"></i> Ganti Password <?php echo $nama;?></h3>
			</div>
			<div class="panel-body">
			<div class="info"></div>
				<?php
					echo form_open('post/password', 'method="POST" id="form" role="form"');
					echo form_hidden('user', $id);
				?>
				<div class="form-group">
				<?php echo form_password('old', '', 'class="form-control" placeholder="Password Lama" required')?>
				</div>
				<div class="form-group">
				<?php echo form_password('new', '', 'class="form-control" placeholder="Password Baru" required');?>
				</div>
				<div class="form-group" style="text-align: center;">
				<?php echo form_submit('simpan', 'Simpan', 'id="post" class="btn btn-primary"');?>
				<?php echo form_reset('reset', 'Reset', 'class="btn btn-warning"');?>
				</div>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
</div>
<?php }