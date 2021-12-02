function closeWin(){
	var myWindow;

	myWindow.close();
}

function check() {
	var r1 = document.getElementsByName("subject1");
	var subject1 = -1
	
	var r2 = document.getElementsByName("subject2");
	var subject2 = -1
	
	var r3 = document.getElementsByName("subject3");
	var subject3 = -1
	
	var r4 = document.getElementsByName("subject4");
	var subject4 = -1
	
	var r5 = document.getElementsByName("subject5");
	var subject5 = -1
	
	var r6 = document.getElementsByName("subject6");
	var subject6 = -1

	for(var i=0; i < r1.length; i++){
	   if(r1[i].checked) {
		  subject1 = i; 
	   }
	}
	
	for(var i=0; i < r2.length; i++){
	   if(r2[i].checked) {
		  subject2 = i; 
	   }
	}
	
	for(var i=0; i < r3.length; i++){
	   if(r3[i].checked) {
		  subject3 = i; 
	   }
	}
	
	for(var i=0; i < r4.length; i++){
	   if(r4[i].checked) {
		  subject4 = i; 
	   }
	}
	
	for(var i=0; i < r5.length; i++){
	   if(r5[i].checked) {
		  subject5 = i; 
	   }
	}
	
	for(var i=0; i < r6.length; i++){
	   if(r6[i].checked) {
		  subject6 = i; 
	   }
	}
	
	if (subject1 != -1 || subject2 != -1 || subject3 != -1 || subject4 != -1 || subject5 != -1 || subject6 != -1) 
	{
		alert("Successfully Submitted");
		return false;
	}
}

function validateForm2() {
  var x = document.forms["myForm2"]["cm"].value;
  if (x == "") {
    alert("Fields must be filled out");
    return false;
  }
  else {
    alert("Successfully Submitted");
    return true;
  }
}

function validateForm3() {
  var x = document.forms["myForm3"]["name"].value;
  var y = document.forms["myForm3"]["email"].value;
  if (x == "" || y == "") {
    alert("Fields must be filled out");
    return false;
  }
  else {
    alert("Successfully Submitted");
    return true;
  }
}

function validateForm4() {
  var x = document.forms["myForm4"]["cm"].value;
  if (x == "") {
    alert("Fields must be filled out");
    return false;
  }
  else {
   alert("Successfully Submitted");
    return true;
  }
}

