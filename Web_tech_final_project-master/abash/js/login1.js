
function validateForm() 
{
	var un = document.forms["myForm"]["username"].value;
	var pass = document.forms["myForm"]["password"].value;
	
	    if (un == "")
	{ 
        alert("Username is required");
        document.myForm.username.focus();
        return false;
	}
		if (pass == "")
	{ 
        alert("Password is required");
        document.myForm.password.focus();
        return false;
	}
	
	
}