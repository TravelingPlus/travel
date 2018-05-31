function validateForm()
{
	var user = document.getElementById("username");
	var pass = document.getElementById("password");
	var bool = false;
	var state = false;	

	if(user.value.length > 0)
	{
		user.parentElement.classList.remove("error");
		bool = true;
		state = true;
	}
	else{
		user.parentElement.classList.add("error");
	}
	if(pass.value.length > 0 && state)
		{
			pass.parentElement.classList.remove("error");
			bool = true;
		}
		else{
			pass.parentElement.classList.add("error");
			if(pass.value.length > 0){
				pass.parentElement.classList.remove("error");
			}
			bool = false;
		}
	return bool;
}


function register(){
	var login = document.getElementById("login-block");
	var reg = document.getElementById("register-block");
	login.style.display = "none";
	reg.style.display = "block";
}