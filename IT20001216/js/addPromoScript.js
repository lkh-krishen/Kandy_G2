function enableButton(){
	if(document.getElementById("confirm").checked){
		document.getElementById("add").disabled = false;
	}
	
	else{
		document.getElementById("add").disabled = true;
	}
	
}

function displayInfo(data){
	if(data == "info"){
		document.getElementById("sntnc").innerHTML = "Fields marked with * are required<br><br>Only letters and spaces allowed in title<br><br>Title limit: 25 characters<br><br>Details limit: 100 characters";
	}
}