function isValid(){
        var firstName = document.forms['regform']['firstName'].value;
        var lastName = document.forms['regform']['lastName'].value;
           var gender = document.forms['regform']['gender'].value;
    var date = document.forms['regform']['dateOfBirth'].value;
    var religion = document.forms['regform']['religion'].value;

    var presentAddress = document.forms['regform']['presentAddress'].value;
    var permanentAddress = document.forms['regform']['permanentAddress'].value;
    var phone = document.forms['regform']['phone'].value;
    var email = document.forms['regform']['email'].value;
    var personalWebsiteLink = document.forms['regform']['personalWebsiteLink'].value;
    var username = document.forms['regform']['username'].value;
    var password = document.forms['regform']['password'].value;
    var role = document.forms['regform']['role'].value;
   
   
   
    if(firstName === ""){
    document.getElementById('firstNamejs').innerHTML = "*firstName is empty";
    
    }
    if(lastName === ""){
    document.getElementById('lastNamejs').innerHTML = "*lastName is empty";
    
    }
    if(gender === ""){
    document.getElementById('genderjs').innerHTML = "*Select  gender";
    
    }
    if(date === ""){
    document.getElementById('datejs').innerHTML = "*choose date";
    
    }
    if(religion === ""){
    document.getElementById('religionjs').innerHTML = "*choose religion";
    
    }
    if(presentAddress === ""){
    document.getElementById('presentAddressjs').innerHTML = "*presentAddress is empty";
    
    }
    if(permanentAddress === ""){
    document.getElementById('permanentAddressjs').innerHTML = "*permanentAddress is empty";
    
    }
    if(phone === ""){
    document.getElementById('phonejs').innerHTML = "*phone is empty";
    
    }
    if(email === ""){
    document.getElementById('emailjs').innerHTML = "*email is empty";
    
    }
    if(personalWebsiteLink === ""){
    document.getElementById('personalWebsiteLinkjs').innerHTML = "*personalWebsiteLink is empty";
    
    }
    if(username === ""){
    document.getElementById('usernamejs').innerHTML = "*username is empty";
    
    }
    if(password === ""){
    document.getElementById('passwordjs').innerHTML = "*password is empty";
    
    }
    if(role === ""){
    document.getElementById('rolejs').innerHTML = "*role is empty";
    return false;
    }
    
    else{
        return true;
    }
    
}