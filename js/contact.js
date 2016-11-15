window.onload=function() {
	var form=document.getElementById("mainForm");
	form.onsubmit=function(event){
		var bool=true;
	var fNameField=document.getElementById("mainForm").fname;
	if(fNameField.value == "")
	{
		fNameField.style.backgroundColor = "red";
		bool=false;
	}
	var lNameField=document.getElementById("mainForm").lname;
	if(lNameField.value == ""){

		lNameField.style.backgroundColor = "red";
		bool=false;
	}
	var emailField=document.getElementById("mainForm").email;
	if(emailField.value == ""){

		emailField.style.backgroundColor = "red";
		bool=false;
	}

	var field = document.getElementById("mainForm");
	if(bool==false) {
		event.preventDefault();
		alert("Please fill out the highlighted fields");
	}
	return bool;
	}
	var fnf=document.getElementById("fname");
	fnf.onkeypress=function(){
	 if(fnf.style.backgroundColor=="red"){
		fnf.style.backgroundColor="white";
		}
	}

	var lnf=document.getElementById("lname");
	lnf.onkeypress = function() {
		if(lnf.value && lnf.style.backgroundColor=="red"){
			lnf.style.backgroundColor="white";
		}
	}
	var em=document.getElementById("email");
	em.onkeypress = function() {
		if(em.value && em.style.backgroundColor=="red"){
			em.style.backgroundColor="white";
		}
	}
}
