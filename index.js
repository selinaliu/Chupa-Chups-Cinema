function chngimg(index) {

    switch(index){
        case 1:
             document.getElementById("poster").src  = "https://cms.qz.com/wp-content/uploads/2020/08/disney-mulan-e1596646420500.jpg?quality=75&strip=all&w=1600&h=900&crop=1";
             break;
         case 2:
             document.getElementById("poster").src  = "https://cdn.mos.cms.futurecdn.net/wJ4s9FFL6FdxAoKixtr4FS-1200-80.jpg";
             break;
         case 3:
             document.getElementById("poster").src  = "https://i.pinimg.com/originals/87/bc/f6/87bcf68ba8813f7adb73bd3852a22da4.jpg";
             break;
    }
 }
 
        setInterval(function(){chngimg(1);}, 5000); /*Call it here*/
        setInterval(function(){chngimg(2);}, 10000);
        setInterval(function(){chngimg(3);}, 15000);

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