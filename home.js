function chngimg() {
    var img = document.getElementById('poster').src;
    if (img.indexOf('mulan.webp')!=-1) {
        document.getElementById('poster').src  = 'Images/tenet.jpg';
    }
     else {
       document.getElementById('poster').src = 'Images/mulan.webp';
   }

}