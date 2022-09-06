<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
echo form_open('member/kategori/tambah');
?>
<table border="0">
	<tr><th>Nama</th><td><?php echo form_input('nama');?></td></tr>
	<tr><th>Aktifkan</th><td><?php echo form_dropdown('aktif', array('Tidak', 'Ya'));?></td></tr>
	<tr><td><?php echo form_submit('submit', 'Simpan');?></td><td><?php echo form_reset('reset', 'Reset');?></td></tr>
</table>
<?php echo form_close();