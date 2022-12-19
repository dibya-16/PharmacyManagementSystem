function isValid(){
	var email = document.forms['forgotform']['email'].value;
    var newpassword = document.forms['forgotform']['newPassword'].value;

    if(email === ""){
    document.getElementById('emailjs').innerHTML = "*email is empty";
    
    }
    if(newpassword === ""){
    document.getElementById('passwordjs').innerHTML = "*password is empty";
     return false;
    }
    else{
    	return true;
    }
}