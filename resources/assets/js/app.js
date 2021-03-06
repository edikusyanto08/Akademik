var dtable;
$(document).ready(function  () {
	$('select.form-control').select2();
	enableDatePicker();
	enableInputMask();	
	setTimeout(function  () {
		getMessage();
	},300)
	fndataTableCaller();
	
})
function fndataTableCaller () {
	if (!$.isFunction($.fn.dataTable)) {
		return;
	}
	if(!  $.fn.DataTable.fnIsDataTable($('.datatable')))
	{
		window.dtable = $('.datatable').dataTable({
			"dom": 'lCfrtip',
			"order": [],
			"colVis": {
				"buttonText": "Columns",
				"overlayFade": 0,
				"align": "right"
			},
			"language": {
				"lengthMenu": '_MENU_ entries per page',
				"search": '<i class="fa fa-search"></i>',
				"paginate": {
					"previous": '<i class="fa fa-angle-left"></i>',
					"next": '<i class="fa fa-angle-right"></i>'
				}
			}
		});
		
		$('.datatable tbody').on('click', 'tr', function() {
			$(this).toggleClass('selected');
		});
	}
}
function getMessage () {
	$('#message').children().each(function  (index,e) {
			toastr.options = {
					  "closeButton": false,
					  "debug": false,
					  "newestOnTop": true,
					  "progressBar": true,
					  "positionClass": "toast-bottom-left",
					  "preventDuplicates": false,
					  "onclick": null,
					  "showDuration": "300",
					  "hideDuration": "1000",
					  "timeOut": "5000",
					  "extendedTimeOut": "1000",
					  "showEasing": "swing",
					  "hideEasing": "swing",
					  "showMethod": "slideDown",
					  "hideMethod": "slideUp"
					}
					console.log($(e).attr('class') == "error");
			if($(e).attr('class') == "error")
			{
				message = function  (message) 
				{
					toastr.error(message, '');
				}
			}
			else if($(e).attr('class')== "warning")
			{
				message = function  (message) 
				{
					toastr.warning(message, '');
				}
			}
			else if($(e).attr('class')== "success")
			{
				message = function  (message) 
				{
					toastr.success(message, '');
				}
			}
			else
			{
				message = function  (message) 
				{
					toastr.info(message, '');
				}
			};
		$(e).children().each(function  (index,el) {
			setTimeout(function  () {
				message($(el).text());
			},index*500);
		})
	})
}
function enableDatePicker () {
	if (!$.isFunction($.fn.datepicker)) {
		return;
	}
	$('.txt-datepicker').datepicker({
		format: "yyyy-mm-dd"
	});
}
function enableInputMask () {	 
	if (!$.isFunction($.fn.inputmask)) {
		return;
	}
	$(":input").inputmask();
}