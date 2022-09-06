<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if(isset($affected)) echo $affected.'<br />';?>
<div class="col-lg-12 form-group">
<div class="text-right"><a href="<?php echo base_url();?>member/berita" class="btn btn-link">Kembali Daftar Berita</a></div>
</div>
<?php echo form_open_multipart('member/berita/tambah', 'role="form"');?>
<div class="row">
	<div class="col-lg-12">
		<div class="form-group">
			<label for="judul">Judul</label>
			<?php echo form_input('judul','' , 'id="judul" autocomplete="off" class="form-control"');?>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="form-group">
			<label for="judul">Gambar Cover</label>
			<input type="text" name="gambar" id="gambar" size="20" class="form-control">
		</div>
	</div>
	<!-- <div class="col-lg-12">
		<div class="form-group">
			<label for="judul">Embed Post Instagram</label>
			<input type="text" name="embed" id="embed" class="form-control">
		</div>
	</div> -->
	<div class="col-lg-10">
		<label for="konten">Konten</label>
		<?php echo form_textarea('konten', '', 'id="konten"');?>
	</div>
	<div class="col-lg-4">
		<div class="form-group">
			<label for="kategori">Kategori</label>
			<select name="kategori" id="kategori" class="form-control">
			<?php
			foreach ($kategori as $ktgr){
				echo '<option value="'.$ktgr['K_KATEGORI'].'">'.ucwords($ktgr['KATEGORI']).'</option>';
			}
			?>
			</select>
		</div>
		<div class="form-group">
			<label for="aktifkan">Aktifkan</label>
			<?php echo form_dropdown('aktif', array('Tidak', 'Ya'),'1' , 'class="form-control" id="aktifkan"');?>
		</div>
	</div>
	<div class="col-lg-10">
		<div class="row">
			<div class="col-lg-5">
				<?php echo form_submit('submit', 'Simpan', 'class="btn btn-primary col-lg-12"');?>
			</div>
			<div class="col-lg-5">
				<?php echo form_reset('reset', 'Reset', 'class="btn btn-warning col-lg-12"');?>
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); echo "\n";?>