<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php echo form_open('member/gallery/tambah');?>
<div class="row">
	<div class="col-lg-12">
		<div class="form-group">
			<label for="judul">Nama Album</label>
			<?php echo form_input('nama','' , 'id="judul" class="form-control" autocomplete="off"');?>
		</div>
		<div class="form-group">
			<label for="pemilik">Pemilik</label>
			<select id="pemilik" name="pemilik" class="form-control">
			<?php foreach ($users as $user){?>
			<option value="<?php echo $user['USERID'];?>"><?php echo ucwords($user['NAMA']);?></option>
			<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="aktif">Aktifkan</label>
			<?php echo form_dropdown('aktif', array('Tidak', 'Ya'),'' , 'class="form-control" id="aktif"');?>
		</div>
		<div class="form-group">
			<?php echo form_submit('submit', 'Simpan', 'class="btn btn-primary"');?>
			<?php echo form_reset('reset', 'Reset', 'class="btn btn-warning"');?>
		</div>
	</div>
</div>
<?php echo form_close();?>
<?php echo anchor('member/gallery/tambah', 'Buat Folder Album Baru');