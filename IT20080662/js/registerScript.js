function checkPassword(form) { 
    pwd = form.pwd.value; 
    rpwd = form.rpwd.value; 
  
    if (pwd == '') 
        alert ("Please enter Password"); 
    else if (rpwd == '') 
        alert ("Please enter confirm password");    
    else if (pwd != rpwd) { 
        alert ("\nPassword Mismatch!"); 
        return false; 
    }  
    else { 
        alert("Success!"); 
        return true; 
    } 
} 

function enableButton(){	
	if (document.getElementById("acc").checked){
		document.getElementById("btnsubmit").disabled = false;
	}
	else {
		document.getElementById("btnsubmit").disabled = true;
	}
}
