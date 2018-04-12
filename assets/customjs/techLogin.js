/*******
	Application Name : Custom CMS
	Author : Tech Spakes 
	Version : V 0.0.1

*********/
	var techCMS=
	{
	
		/**********
			Function Name : adminUserLogin
			Description : 
		***********/
		adminUserLogin:function(postData)
		{
			$.ajax({
				url: SERVICE_PATH+"AjaxController/adminUserLogin",
				type: "POST",
				data:postData,
				dataType: "json",
				success: function(data) 
				{
					if(data.status=="1")
					{
						window.location.href=SERVICE_PATH+"dashboard";
					}
					else
					{
						
					}
				}

			});
		}
	};

	
	/********* Submit Login Form ********/
	$("#loginForm").off();
	$("#loginForm").on("submit",function(evt)
	{
		
		evt.preventDefault();
		$("#exampleInputEmail1_Err").html('');
		$("#exampleInputPassword1_Err").html('');
		var exampleInputEmail1=$("#exampleInputEmail1").val();
		var exampleInputPassword1=$("#exampleInputPassword1").val();
		if(exampleInputEmail1=="")
		{
			$("#exampleInputEmail1_Err").html('Fill in email');
			return false;
		}
		if(exampleInputPassword1=="")
		{
			$("#exampleInputPassword1_Err").html('Fill in password');
			return false;
		}
		
		var postData={'userLogin':exampleInputEmail1,'userPassword':exampleInputPassword1};
		techCMS.adminUserLogin(postData);
		
	});