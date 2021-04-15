// MENU //

var menu = document.getElementsByClassName("lines")[0];
var toogle = document.getElementsByClassName("menuHidden")[0];
var body = document.getElementsByTagName("body")[0];


menu.addEventListener('click', function(){ 
    menu.classList.toggle('active');   
    menu.classList.toggle('not-active');

if(menu.classList.contains('active')){
    toogle.style.display = "flex";
    body.style.overflow = 'hidden';
}else{
    toogle.style.display = "none";
    body.style.overflow = 'scroll'; 
}
});


