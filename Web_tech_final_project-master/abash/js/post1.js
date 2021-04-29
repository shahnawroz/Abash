
function validateForm() 
{
	var un = document.forms["myForm"]["username"].value;
	var n = document.forms["myForm"]["name"].value;
    var em = document.forms["myForm"]["email"].value;
    var adr = document.forms["myForm"]["address"].value;
	var rnt = document.forms["myForm"]["rnp"].value;
	var dt = document.forms["myForm"]["av"].value;
	var phn = document.forms["myForm"]["phn"].value;
	var tp = document.forms["myForm"]["op"].value;
	var i = document.forms["myForm"]["image"].value;

 
	if (un == "")
	{ 
        alert("Username is required");
        document.myForm.username.focus();
        return false;
	}
	
	fnameregex =/^[a-zA-Z ]+$/
	fname = n.match(fnameregex);
	
	if (n == "" || n != fname)
	{
        alert("Your full name is not valid. Only characters A-Z, a-z are  acceptable.");
        document.myForm.name.focus();
        return false;
	}

	if (em == "")
	{ 
        alert("email is required");
        document.myForm.email.focus();
        return false;
	}
    	if (adr == "")
	{ 
        alert("Address is required");
        document.myForm.address.focus();
        return false;
	} 
	    	if (rnt == "")
	{ 
        alert("Rent Amount is required");
        document.myForm.rnp.focus();
        return false;
	} 
	    	if (dt == "")
	{ 
        alert("Select a date");
        document.myForm.av.focus();
        return false;
	} 
	 
	phnregex =/[0-9]{11}/
	m = phn.match(phnregex);
	 
	if (phn != m)
	{ 
        alert("Please provide your valid phone number with 11 digit. white spaces are not allowed");   
        document.myForm.phn.focus();
        return false;
	}

	if (tp == "")
	{ 
        alert("Type is required");
        document.myForm.op.focus();
        return false;
	}
		if (i == "")
	{ 
        alert("Select a image");
        document.myForm.image.focus();
        return false;
	}
			if (i != "")
	{ 
        alert("Ad Posted Successfully");

	}

	
}