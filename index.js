// Change the poster image by button
function changeImg(index) {

    switch(index){
        case 0:
             document.getElementById("poster").src  = "https://cms.qz.com/wp-content/uploads/2020/08/disney-mulan-e1596646420500.jpg?quality=75&strip=all&w=1600&h=900&crop=1";
             break;
         case 1:
             document.getElementById("poster").src  = "https://cdn.mos.cms.futurecdn.net/wJ4s9FFL6FdxAoKixtr4FS-1200-80.jpg";
             break;
         case 2:
             document.getElementById("poster").src  = "https://i.pinimg.com/originals/87/bc/f6/87bcf68ba8813f7adb73bd3852a22da4.jpg";
             break;
    }
}

 // Change nowshowing movie every 5 seconds
 // display: block -> Displays an element as a block element (like <p>). It starts on a new line, and takes up the whole width
function changeMovie(){
    
    switch (document.getElementById("nowshowing1").style.display) {
         case "":
             document.getElementById("nowshowing1").style.display = "none";
             document.getElementById("nowshowing2").style.display = "block";
             break;
         case "none":
             document.getElementById("nowshowing1").style.display = "block";
             document.getElementById("nowshowing2").style.display = "none";
             break;
         case "block":
             document.getElementById("nowshowing1").style.display = "none";
             document.getElementById("nowshowing2").style.display = "block";
             break;
    }
 }
 
 setInterval(changeMovie, 5000); /*Call it here*/
 changeMovie();

// Validate name and email for newsletter subscription
function validate() {
    var name = document.forms["news"]["user"].value;
    var email = document.forms["news"]["email"].value; 

        if (/^[A-Za-z,-]+(\s{0,1}[a-zA-Z,-])*$/.test(name) == false) {
            alert("Please enter a valid name! Name must not contain any numbers, special characters or unnecessary spaces.");
            return false;
        }
        
        if (/^[\w.-]+@([\w]+\.){1,3}[A-Za-z]{2,3}$/.test(email) == false) {
            alert("Please enter a valid email address!");
            return false;
        }
}
