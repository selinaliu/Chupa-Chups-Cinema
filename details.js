function openDate(date) {
  var i;
  var x = document.getElementsByClassName("date");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(date).style.display = "block";  
}

function checkAvail(){
  Array.from(document.querySelectorAll('input[id="20"]')).map(function(button) {
    button.style.backgroundColor="grey";
    button.disabled = true;
  })
}

//check avail immediately
setInterval(checkAvail, 100);
checkAvail();