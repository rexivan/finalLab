var email;
var passwordLogin;

window.onload = function(){

email = document.getElementById("emailLogin");
passwordLogin = document.getElementById("losenord");	

var button = document.getElementById("submit");
button.addEventListener("click", validera);

var buttonLogin = document.getElementById("btnLogin");
buttonLogin.addEventListener("click", redirect);

var buttonRegistrering = document.getElementById("btnRegistrering");
buttonRegistrering.addEventListener("click", redirect1);

function validera(){ 

if(email.value === "" || validateEmail(email.value) == false)
	{
		alert("That's not a valid Email.");
	}
else if(passwordLogin.value === "")
	{
		alert("Password can not be empty.");
	}

}

function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}

}



