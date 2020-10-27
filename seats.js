function getSeats() {
    const checkboxes = document.querySelectorAll(`input[name="seat"]:checked`);
    let values = [];
    checkboxes.forEach((checkbox) => {
        values.push(checkbox.value);
    });
    qty = checkboxes.length;
    price = qty * 13.50;
    price = (Math.round(price * 100) / 100).toFixed(2); //price to 2 dp
    document.getElementById("selectedSeats").value = values;
    document.getElementById("qty").value = qty;
    document.getElementById("price").value = price;
}

//get seats immediately
setInterval(getSeats, 100);
getSeats();

//return false if seats selected is empty
function empty() {
    
    if(document.getElementById("qty").value == "0"){
        alert("No seats are selected.");
        return false;
    } 
}
