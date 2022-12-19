function isValid(){
	var username = document.forms['loginform']['username'].value;
    var password = document.forms['loginform']['password'].value;

    if(username === ""){
    document.getElementById('usernamejs').innerHTML = "*username is empty";
    
    }
    if(password === ""){
    document.getElementById('passwordjs').innerHTML = "*password is empty";
     return false;
    }
    else{
    	return true;
    }
}