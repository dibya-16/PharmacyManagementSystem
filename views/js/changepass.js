function isValid(){
	var previousPassword = document.forms['changepassform']['previousPassword'].value;
    var newPassword = document.forms['changepassform']['newPassword'].value;

    if(previousPassword === ""){
    document.getElementById('previouspasswordjs').innerHTML = "*previousPassword is empty";
    
    }
    if(newPassword === ""){
    document.getElementById('newPasswordjs').innerHTML = "*newPassword is empty";
     return false;
    }
    else{
    	return true;
    }

    
}