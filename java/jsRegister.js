var email;
var passwordLogin;

window.onload = function(){

email = document.getElementById("form_eadress");
passwordLogin = document.getElementById("form_pw");	

var button = document.getElementById("knappen");
button.addEventListener("click", validera);


function validera(){ 

if(email.value === "" || validateEmail(email.value) == false)
	{
		alert("That's not a valid Email.");
		return false;
	}
else if(passwordLogin.value === "")
	{
		alert("Password can not be empty.");
		return false;
	}
}

function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}

}



