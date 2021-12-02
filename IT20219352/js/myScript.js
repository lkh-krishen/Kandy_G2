	  

function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Cannot leave field empty");
    return false;
  }
	else
	alert('Reviews and Ratings Updated');
}

	  function closeWin(){
	var myWindow;

	myWindow.close();
}