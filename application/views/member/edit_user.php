<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	foreach ($data as $user) {
		$userid			= $user->USERID;
		$password		= $user->PASSWORD;
		$nama			= $user->NAMA;
		$is_super		= $user->IS_SUPER;
		$is_active		= $user->IS_ACTIVE;
	}
echo form_open(base_url().'member/users/edit/'.$userid, 'method="POST" role="form"');
echo form_hidden('username', $userid);
?>
<div class="row">
	<div class="col-lg-6">
		<div class="form-group">
			<label for="username">Username</label>
			<?php echo form_input('', '', 'placeholder="'.$userid.'"'.'class="form-control" id="username" disabled');?>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
			<label for="nama">Nama</label>
			<?php echo form_input('nama', $nama, 'class="form-control" id="nama"');?>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="row">
			<div class="form-group">
				<div class="col-lg-6">
					<label for="old">Password Lama</label>
					<?php echo form_password('old_password', '', 'class="form-control" id="old"');?>
				</div>
				<div class="col-lg-6">
					<label for="new">Password Baru</label>
					<?php echo form_password('new_password', '', 'class="form-control" id="new"');?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="row">
			<div class="form-group">
				<div class="col-lg-6">
					<label for="super">Super Admin</label>
					<?php echo form_dropdown('is_super', array('Normal User', 'Super Admin'), $is_super, 'id="super" class="form-control"');?>
				</div>
				<div class="col-lg-6">
					<label for="act">Aktifkan</label>
					<?php echo form_dropdown('is_active', array('Tidak', 'Ya'), $is_active, 'id="act" class="form-control"');?>
				</div>
			</div>
		</div>
	</div>	
</div>
<div class="row">
	<div class="col-lg-12" style="margin: 15px auto">
		<div class="form-group">
			<?php echo form_submit('submit', 'Simpan Data', 'class="btn btn-primary col-lg-2"');?>
			<?php echo form_button('back', 'Kembali', 'class="btn btn-warning col-lg-2" onclick="javascript:window.history.back();"');?>
		</div>
	</div>
</div>
<?php echo form_close();