<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
echo form_open('member/users/tambah');
?>

<style>
	table.konten tr td {
		padding: 5px;
	}
</style>

<table border="0" class="konten">
	<tr><th>User ID</th><td><?php echo form_input(array('name'=>'userid', 'class'=>'form-control'),'','required');?></td></tr>
	<tr><th>Password</th><td><?php echo form_password(array('name'=>'password', 'class'=>'form-control'),'','required');?></td></tr>
	<tr><th>Nama</th><td><?php echo form_input(array('name'=>'nama', 'class'=>'form-control'),'','required');?></td></tr>
	<tr><th>Is Super</th><td><?php echo form_dropdown('super', array('Default User', 'Admin'),'required', 'class="form-control"');?></td></tr>
	<tr><th>Aktifkan</th><td><?php echo form_dropdown('aktifkan', array('Tidak', 'Ya'),'required', 'class="form-control"');?></td></tr>
	<tr><td><?php echo form_submit(array('name'=>'submit', 'value'=>'Simpan', 'class'=>'btn btn-primary'));?></td><td><?php echo form_reset(array('name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-reset'));?></td></tr>
</table>
<?php echo form_close();