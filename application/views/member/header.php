<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
if (!$this->session->userdata('logged_in')) {
	redirect('/member', 'refresh');
}
$sess = $this->session->userdata('logged_in');
$id = $sess['id'];
$is_super = $sess['is_super'];
/**
 * menu member admin : home, berita, user, lomba, kategori, gallery
 * menu member biasa : home, berita, lomba
 */
$this->load->helper('html');
echo doctype('html5');
?>
<html>
	<head>
		<title>Dashboard</title>
		<meta name="robots" content="noindex, nofollow" />
		<link href="<?php echo base_url();?>src/css/bootstrap/bootstrap.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>src/css/sb-admin2.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>font-awesome1/css/font-awesome.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>src/css/morris-0.4.3.min.css" rel="stylesheet" />
	</head>
	<body>
		<div id="wrapper">
			<?php ($is_super == 1) ? $this->load->view('member/menu_admin', $user): $this->load->view('member/menu_member', $user);?>
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1>Home <small>{Admin}</small></h1>
						<ol class="breadcrumb">
							<li class="active"><i class="fa fa-home"></i> Home</li>
						</ol>
					</div>
				</div><!-- /.row -->