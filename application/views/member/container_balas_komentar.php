<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
foreach ($results AS $comment){
	$id_komentar = $comment->ID_KOMENTAR;
	$id_konten = $comment->ID_KONTEN;
	$nama = $comment->NAMA;
	$email = $comment->EMAIL;
	$tanggal = $comment->TANGGAL;
	$isi = $comment->KOMENTAR;
}
?>
<form action="<?php echo base_url().'member/komentar/balas/'.$id_konten.'/'.$id_komentar;?>" method="post" role="form">
<input type="hidden" name="id_berita" value="<?php echo $id_konten;?>" />
<input type="hidden" name="root_komentar" value="<?php echo $id_komentar;?>" />
<input type="hidden" name="user" value="<?php echo $reply_by;?>" />
<table>
	<tr>
		<th>Nama</th>
		<td>
			<div class="form-group">
			<input type="text" class="form-control" disabled="disabled" value="<?php echo $nama;?>" />
			</div>
		</td>
	</tr>
	<tr>
		<th>Email</th>
		<td>
			<div class="form-group">
			<input type="email" class="form-control" disabled="disabled" value="<?php echo $email;?>" />
			</div>
		</td>
	</tr>
	<tr>
		<th>Tanggal komentar</th>
		<td>
			<div class="form-group">
			<input type="datetime" class="form-control" disabled="disabled" value="<?php echo $tanggal;?>" />
			</div>
		</td>
	</tr>
	<tr>
		<th>Isi</th>
		<td>
			<div class="form-group">
			<textarea class="form-control" disabled="disabled"><?php echo $isi;?></textarea>
			</div>
		</td>
	</tr>
	<tr>
		<th>Balasan</th>
		<td>
			<div class="form-group">
			<textarea name="isi" class="form-control" nama="balasan" rows="" cols=""></textarea>
			</div>
		</td>
	</tr>
	<tr>
		<td><input type="submit" class="btn btn-primary" value="Balas" name="balas"/></td>
		<td><input type="button" class="btn btn-danger" value="Kembali" onclick="javascript: window.history.back();"/></td>
	</tr>
</table>
</form>