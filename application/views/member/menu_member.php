<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
foreach ($user as $field){
	$nama = $field['NAMA'];
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php echo base_url()?>member">KBMSI</a>
	</div>
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav">
			<li class="active"><?php echo anchor('member', '<i class="fa fa-home"></i> Home');?></li>
			<li class="dropdown">
				<?php echo anchor(base_url().'member/berita',
									'<i class="fa fa-caret-square-o-down"></i> Konten <b class="caret"></b>',
									'class="dropdown-toggle" data-toggle="dropdown"');
				?>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url();?>member/berita">Berita</a></li>
					<li><a href="<?php echo base_url();?>member/berita">Lomba</a></li>
					<li class="divider"></li>
				</ul>
			</li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right navbar-user">
			<li class="dropdown user-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $nama;?> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><?php echo anchor('member/logout', '<i class="fa fa-power-off"></i> Log Out')?></li>
				</ul>
			</li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>