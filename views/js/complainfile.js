function isValid(){
	var customerOrderId = document.forms['complainfileform']['customerOrderId'].value;
    var orderDate = document.forms['complainfileform']['orderDate'].value;
    var complainFile = document.forms['complainfileform']['complainFile'].value;

    if(customerOrderId === ""){
    document.getElementById('customerOrderIdjs').innerHTML = "*customerOrderId is empty";
    
    }
    if(orderDate === ""){
    document.getElementById('orderDatejs').innerHTML = "*orderDate is empty";
    }
    if(complainFile === ""){
    document.getElementById('complainFilejs').innerHTML = "*complainFile is empty";
     return false;
    }
    else{
    	return true;
    }
}