function openDate(date) {
  var i;
  var x = document.getElementsByClassName("date");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(date).style.display = "block";  
}