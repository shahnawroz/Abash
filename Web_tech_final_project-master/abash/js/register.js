
function validateForm() 
{
	var i = document.forms["myForm"]["name"].value;
	var un = document.forms["myForm"]["uname"].value;
    var em = document.forms["myForm"]["email"].value;
	var phn = document.forms["myForm"]["phone"].value;
	var adr = document.forms["myForm"]["address"].value;
	var pass = document.forms["myForm"]["password"].value;
	var cpass = document.forms["myForm"]["conpass"].value; 
 
	fnameregex =/^[a-zA-Z ]+$/
	fname = i.match(fnameregex);
	
	if (i == "" || i != fname)
	{
        alert("Your full name is not valid. Only characters A-Z, a-z are  acceptable.");
        document.myForm.name.focus();
        return false;
	}
    if (un == "")
	{ 
        alert("Username is required");
        document.myForm.uname.focus();
        return false;
	}
	if (em == "")
	{ 
        alert("email is required");
        document.myForm.email.focus();
        return false;
	}
     
	phnregex =/[0-9]{11}/
	m = phn.match(phnregex);
	 
	if (phn != m)
	{ 
        alert("Please provide your valid phone number with 11 digit. white spaces are not allowed");   
        document.myForm.phone.focus();
        return false;
	}
	if (adr == "")
	{ 
        alert("Address is required");
        document.myForm.address.focus();
        return false;
	}
	if (pass == "")
	{ 
        alert("Password is required");
        document.myForm.password.focus();
        return false;
	}
	if (cpass == "")
	{ 
        alert("Confirm your password");
        document.myForm.conpass.focus();
        return false;
	}
	if (cpass != pass)
	{ 
        alert("Password don't match");
        document.myForm.conpass.focus();
        return false;
	}
	
	
}