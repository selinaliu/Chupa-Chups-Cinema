//reflect seats selected in input text
function getSeats() {
    const checkboxes = document.querySelectorAll(`input[name="seat"]:checked`);
    let values = [];
    checkboxes.forEach((checkbox) => {
        values.push(checkbox.value);
    });
    
    var element = document.getElementById('selectedSeats');
    if (element != null) {
        qty = checkboxes.length;
        price = qty * 13.50;
        price = (Math.round(price * 100) / 100).toFixed(2); //price to 2 dp
        element.value = values;
        document.getElementById("qty").value = qty;
        document.getElementById("price").value = price;
    }   
}

//get seats immediately
setInterval(getSeats, 100);
getSeats();

//redirects form
function submitForm(action){
   /* if(action == 'test.php'){
        document.getElementById('order').action = action;
        document.getElementById('order').submit();
        
    } else if (action == 'payment.php') {
        if(empty()== false){
            return false;
        } else {
            document.getElementById('order').action = action;
            document.getElementById('order').submit();
        }
    }*/

    if(empty()== false){
        return false;
    } else {
        document.getElementById('order').action = action;
        document.getElementById('order').submit();
    }
}

//return false if seats selected is empty
function empty() {
    if(document.getElementById("qty").value == "0"){
        alert("No seats are selected.");
        return false;
    } 
}

//check seats avail
function checkAvail(){

    var seats;
    var element = document.getElementById('check');
    if (element != null) {
        seats = element.value;
        var seat = seats.split(",");

        for (i=0; i<seat.length-1; i++){
            var seatTaken = seat[i];
            var checkbox = document.getElementById(seatTaken);
            checkbox.disabled = true;
            var checkmark = document.getElementById("m"+seatTaken);
            checkmark.style.backgroundColor = "grey";
        
        }
    }

    //check avail seats from session
    for (j=0; j<15; j++) {
        var sessSeats;
        var elementSess = document.getElementById('checkSess'+j);
        if (elementSess != null) {
            sessSeats = elementSess.value;
            var sessSeat = sessSeats.split(",");
            
            for (i=0; i<sessSeat.length; i++){
                var sessSeatTaken = sessSeat[i];
                var checkbox1 = document.getElementById(sessSeatTaken);
                checkbox1.disabled = true;
                var checkmark1 = document.getElementById("m"+sessSeatTaken);
                checkmark1.style.backgroundColor = "grey";
            }
        }
    }
}

//check avail immediately
setInterval(checkAvail, 100);
checkAvail();