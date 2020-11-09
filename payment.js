//redirects form for cancel or pay
function submitForm(action){
    if(action == 'index.html'){
        document.getElementById('payment').action = action;
        document.getElementById('payment').submit();
    } else if (action == 'confirm.php') {
        if(validate()== false){
            return false;
        } else {
            document.getElementById('payment').action = action;
            document.getElementById('payment').submit();
        }
    }
}

//validate user input
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
    if(email == ""){
        alert("Please fill up your email");
        return false;
    }else if (/^[\w.-]+@([\w]+\.){1,3}[A-Za-z]{2,3}$/.test(email) == false) { 
        alert("Please enter a valid email address!");
        return false;
    }

    //check contact number
    if(number == ""){
        alert("Please fill up your contact number");
        return false;
    }
    if(!(number.length == 8)){
        alert("Please provide a valid contact number (8 numbers)");
        return false;
    }

    //check card number
    if(Cnum == ""){
        alert("Please fill up your card number");
        return false;
    }
    if(!(Cnum.length == 16)){
        alert("Please provide a valid card number (16 numbers)");
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
    if(Edate <= currentDate){
        alert("Please select a date that is not today or in the past.");
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

//when cancel order button is pressed
//1. style display=none
//2. qty value and cancel[] value becomes 0 --> originally qty=(whatever posted from previous page) and cancel[]=order
function cancelOrder(order) {
    if (order == "order"){
        document.getElementById(order).style.display = "none";  
        document.getElementById('qty').value = 0;
    } else {
        //for session
            document.getElementById(order).style.display = "none";  
            document.getElementById('cancel'+order).value = 0;
    }
  }