<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
echo form_open('', 'method="POST"');
foreach ($row as $rows){
echo form_hidden('id', $rows['K_KATEGORI']);
?>
<table border="0">
	<tr><th>Judul</th><td><?php echo form_input('nama',$rows['KATEGORI']);?></td></tr>
	<tr><th>Aktifkan</th><td><?php echo form_dropdown('aktifkan', array('Tidak', 'Ya'), $rows['IS_ACTIVE']);?></td></tr>
	<tr><th></th><td><?php echo form_submit('submit', 'Simpan');?></td></tr>
</table>
<?php
}
echo form_close();
echo anchor('member/berita/tambah', 'Tambah Berita');