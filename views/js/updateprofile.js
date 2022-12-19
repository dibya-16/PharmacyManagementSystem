function isValid(){
    var firstName = document.forms['updateprofileform']['firstName'].value;
    var lastName = document.forms['updateprofileform']['lastName'].value;
    var gender = document.forms['updateprofileform']['gender'].value;
    var date = document.forms['updateprofileform']['dateOfBirth'].value;
    
    var presentAddress = document.forms['updateprofileform']['presentAddress'].value;
    var permanentAddress = document.forms['updateprofileform']['permanentAddress'].value;
    var phone = document.forms['updateprofileform']['phone'].value;
    var email = document.forms['updateprofileform']['email'].value;
    var personalWebsiteLink = document.forms['updateprofileform']['personalWebsiteLink'].value;
   
   
   
   
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
        return false;
    }
    
    else{
        return true;
    }
    
}