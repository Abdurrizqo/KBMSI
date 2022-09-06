<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
$this->load->helper('html');
echo doctype('html5');
?>
<html>
<head>
	<title>Login | KBMSI</title>
	<meta name="robots" content="noindex, nofollow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url();?>src/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>src/css/sb-admin.css" rel="stylesheet" />
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Login Form</h3>
				</div>
				<div class="panel-body">
				<?php echo form_open('member/validate', 'role="form" method="POST"');?>
					<fieldset>
					<div class="form-group">
						<?php echo form_input('username', '', 'required placeholder="Username" class="form-control" autofocus');?>
					</div>
					<div class="form-group">
						<?php echo form_password('password', '', 'required placeholder="Password" class="form-control"');?>
					</div>
					<?php echo form_submit('login', 'Login', 'class="btn btn-lg btn-success btn-block"');?>
					</fieldset>
				<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<link href="<?php echo base_url();?>src/js/bootstrap.min.js" />
</html>