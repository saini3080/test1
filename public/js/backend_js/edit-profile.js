
$(document).ready(function(){
	/*$("#number_validate").validate({
		rules:{
			min:{
				required: true,
				min:10
			},
			max:{
				required:true,
				max:24
			},
			number:{
				required:true,
				number:true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	*/
	var oldpswd = $('#password').val();
	if(oldpswd != '')
	{
		$("#edit-profile-form").validate({
			rules:{
				password:{
					required: true,
					minlength:6,
					maxlength:20
				},
				new_password:{
					required: true,
					minlength:6,
					maxlength:20
				},
				confirm_password:{
					required:true,
					minlength:6,
					maxlength:20,
					equalTo:"#new_password"
				}
			},
			errorClass: "help-inline",
			errorElement: "span",
			highlight:function(element, errorClass, validClass) {
				$(element).parents('.control-group').addClass('error');
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).parents('.control-group').removeClass('error');
				$(element).parents('.control-group').addClass('success');
			}
		});
	}

});
