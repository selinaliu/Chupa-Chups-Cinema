function getSeats() {
    const checkboxes = document.querySelectorAll(`input[name="seat"]:checked`);
    let values = [];
    checkboxes.forEach((checkbox) => {
        values.push(checkbox.value);
    });
    document.getElementById("selectedSeats").value = values;
}

//get seats immediately
setInterval(getSeats, 100);
getSeats();
