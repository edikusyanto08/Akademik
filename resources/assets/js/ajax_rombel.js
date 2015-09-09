(function () {
	$('#form_rombel .select option:first').attr('disabled','disabled');
})($); 
$('#form_rombel .select').on('change',function  () {
	// "user strict";
	var form = $("#form_rombel");
	$.ajax({
		url : form.attr('action'),
		type : form.attr('method'),
		data : form.serialize(),
		success:function  (hasil) {
			
		},
		error:function  () {
		}
	})
})