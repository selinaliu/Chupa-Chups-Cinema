function submitForm(action){
    if(validate()== false){
        return false;
    } else {
        document.getElementById('payment').action = action;
        document.getElementById('payment').submit();
    }
    
}

function validate(){
    var user = document.getElementById('user').value;
    var email = document.getElementById('email').value;
    var number = document.getElementById('number').value;
    var Cnum = document.getElementById('Cnumber').value;
    var Edate = document.getElementById('Edate').value;
    var cvv = document.getElementById('cvv').value;
    var currentDate = new Date();
    Edate = new Date(Edate);


    
    //check for valid name
    
    if(user == ""){
        alert("Please fill up your name");
        return false;
    }else if ( /^[A-Za-z ]+$/.test(user) == false) {
        alert("Name must not contain numbers or special characters.");
        return false;
    }
    
    /* Validate Email*/
    //split email to username and domain
    var email=email.split("@");
    var user=email[0];
    var domain=email[1]; 

    //split domain by . to the different extensions
    var domainExt = domain.split(".");
    var domainLast = domainExt[domainExt.length - 1];

    if(email == ""){
        alert("Please fill up your email");
        return false;
    }
	if(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+$/.test(user) == false){  
		alert("Please provide a valid email.");
        return false;
	}
	//Check if there are 2-4 address extensions
	if(domainExt.length<2 || domainExt.length>4){
		alert("The email domain name must contain 2-4 address extensions.");
		return false;
	}
    //check if the last extension contains 2-3 characters
	if(domainLast.length<2 || domainLast.length>3){
		alert("The last extension must have two to three characters.");
		return false;
    }

    //check contact number
    if(number == ""){
        alert("Please fill up your contact number");
        return false;
    }
    if(!(number.length == 8)){
        alert("Please provide a valid contact number");
        return false;
    }

    //check card number
    if(Cnum == ""){
        alert("Please fill up your card number");
        return false;
    }
    if(!(Cnum.length == 16)){
        alert("Please provide a valid card number");
        return false;
    }

    //date placeholder color
    var el = document.getElementById('date');
    el.onchange = function() {
        if (el.value === '') {
            el.classList.add("empty");
        } else {
            el.classList.remove("empty");
        }
    }

    //check date cannot be today or greater
    if(Edate == ""){
        alert("Please fill up your expiry date");
        return false;
    }
    if(Edate > currentDate){
        alert("Please select a date that is not in the future.");
        return false;
    }

    //check cvv
    if(cvv == ""){
        alert("Please fill up your cvv");
        return false;
    }
    if(!(cvv.length == 3)){
        alert("Please provide a valid cvv");
        return false;
    }
}