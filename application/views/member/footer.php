<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
</div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>src/js/jquery-1.10.2.js"></script>
<?php if(isset($ajax) && $ajax === TRUE){?>
<script type="text/javascript" src="<?php echo base_url();?>js/custom-ajax/y-custom.js"></script>
<?php }?>
<script src="<?php echo base_url();?>src/js/bootstrap.min.js"></script>
<!-- Page Specific Plugins -->
<script src="<?php echo base_url();?>src/js/raphael-min.js"></script>
<script type="text/javascript">
$('#url-image').blur(function(){
		$('#load-image').attr('src', $('#url-image').val());
});
</script>
<?php if(isset($editor) && $editor === TRUE){?>
<script type="text/javascript" src="<?php echo base_url()?>js/tinymce/tinymce.min.js"></script>
<script type="text/javascript"><!--
tinymce.init({selector: "textarea", language: "id", theme: "modern", plugins: [ "advlist autolink lists link image charmap print preview hr anchor pagebreak", "searchreplace wordcount visualblocks visualchars code fullscreen", "insertdatetime media nonbreaking save table contextmenu directionality", "emoticons template paste textcolor colorpicker textpattern" ], toolbar1: "bold italic underline forecolor | alignleft aligncenter alignright alignjustify | bullist numlist | table | charmap | link unlink image media | code preview fullscreen", menubar: false});
//--></script>
<?php }?>
</body>
</html>