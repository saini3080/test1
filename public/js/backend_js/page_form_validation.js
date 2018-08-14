

$(document).ready(function(){
	/*$('#current_pwd').keyup(function(){
		var current_pwd = $('#current_pwd').val();
		$.ajax({
			type:'GET',
			url: '/laravel_template/public/admin/check-pwd',
			data:{current_pwd:current_pwd},
			success:function(resp){
				//alert(resp);
				if(resp=="false")
				{
					$("#chkPwd").html("<font style='color:red;'>Password is Incorrect</font>");
				}
				else
				{
					$("#chkPwd").html("<font style='color:green;'>Current Password is Correct</font>");
				}
			},error:function(){
				alert("error");
			},
		});
	});

	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();
	*/
	// Form Validation
    $("#add_page").validate({
		rules:{
			page_name:{
				required:true
			},
			page_content:{
				required:true,
			},
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

	$("#edit_page").validate({
		rules:{
			page_name:{
				required:true
			},
			page_content:{
				required:true,
			},
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
	
	$('#page_content').summernote({
		height: 400,
	});
	
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
	
	$("#password_validate").validate({
		rules:{
			current_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			new_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			confirm_pwd:{
				required:true,
				minlength:6,
				maxlength:20,
				equalTo:"#new_pwd"
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
	});*/

	/*$("#delFaq").click(function(){
		if(confirm('Are you sure you want to delete this Faq'))
		{
			return true;
		}
		return false;
	});*/
});
