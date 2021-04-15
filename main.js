// MENU //

var menu = document.getElementsByClassName("lines")[0];
var toogle = document.getElementsByClassName("menuHidden")[0];
var body = document.getElementsByTagName("body")[0];


menu.addEventListener('click', function(){ 
    toogle.style.display = "flex";
    menu.style.display = "none";
    body.style.overflow = 'hidden';
});

var closebtn = document.getElementById("close");


closebtn.addEventListener('click', function(){ 
    toogle.style.display = "none";
    menu.style.display = "flex";
    body.style.overflow = 'scroll';
});