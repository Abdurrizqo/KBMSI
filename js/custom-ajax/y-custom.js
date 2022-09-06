/**
 * Fri 8, Aug 2014 05:10:41
 */
$(document).ready(function(){
	
	$("#post").click(function(e){
		e.preventDefault();
		$(".info").html('Proses ...');
		tujuan = $("#form").attr("action");
		$.ajax({
			type:	'POST',
			url:	tujuan,
			data:	$('#form').serialize(),
			success:function(data){
				$(".info").hide().slideUp("slow");
				$(".info").html(data).slideDown("slow");
				$("#form").clearForm();
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(textStatus + " " + errorThrown);
			}
		});
	});
	
});

var coba = function(id, status){
	//alert(id+' '+status);
	$('div#informasi').html(id+' '+status);
}

$.fn.clearForm = function() {
	return this.each(function() {
		var type = this.type, tag = this.tagName.toLowerCase();
		if (tag == 'form') return $(':input',this).clearForm();
		if (type == 'text' || type == 'password' || tag == 'textarea')
			this.value = '';
		else if (type == 'checkbox' || type == 'radio')
			this.checked = false;
		else if (tag == 'select')this.selectedIndex = -1;
	});
};