var hamburguesa=document.querySelector('.hamburguesa');
var enlaces=document.querySelector('.enlaces-menu');

hamburguesa.addEventListener('click', function(){
    enlaces.classList.toggle('activado');
});