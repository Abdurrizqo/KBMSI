<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
echo form_open('', 'method="POST"');
?>
<!-- b>uptown girl</b-->

<style>
	table.konten tr td {
		padding: 5px;
	}
</style>

<table border="0" style="width: 700px;" class="konten">
<?php
foreach ($data as $row){
	//$row['IS_ACTIVE'];
	echo form_hidden('id', $row['ID_KONTEN']);
	echo '<tr><th>Judul</th><td>'.form_input(array('name'=>'judul', 'value'=>$row['JUDUL'], 'class'=>'form-control')).'</td></tr>';
	echo '<tr><th>Gambar Cover</th><td>'.form_input(array('name'=>'gambar', 'value'=>$row['gambar'], 'class'=>'form-control')).'</td></tr>';
	echo '<tr><th>Konten</th><td>'.form_textarea(array('name'=>'konten', 'value'=>$row['KONTEN'], 'class'=>'form-control')).'</td></tr>';
	echo '<tr><th>Aktif</th><td>'.form_dropdown('aktifkan', array('Tidak', 'Ya'), $row['IS_ACTIVE'], 'class="form-control"').'</td></tr>';
	
	echo '<tr><th>Kategori</th><td><select class="form-control" name="k_kategori">';
	foreach ($kategori as $kat){
		$selected = '';
		if($row['K_KATEGORI'] == $kat['K_KATEGORI']){
			$selected = 'selected';
		}
		echo '<option value="'.$kat['K_KATEGORI'].'"'.$selected.'>'.ucwords($kat['KATEGORI']).'</option>';
	}
	echo '</select></td></tr>';
	
	echo '<tr><th></th><td>'.form_submit(array('name'=>'submit', 'value'=>'Simpan', 'class'=>'btn btn-primary')).'</td></tr>';
}
?>
</table>
<?php
echo form_close();
echo anchor('member/berita/tambah', 'Tambah Berita');