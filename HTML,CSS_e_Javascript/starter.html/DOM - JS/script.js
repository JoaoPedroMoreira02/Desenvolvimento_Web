var teste = document.querySelector('.start h1');
var teste2 = document.querySelector('.start');

var texto = document.getElementsByTagName('p')[0];

setTimeout(function(){
    teste.classList.add('start_moving');
    teste2.classList.add('start_color');
}, 1000);

texto.addEventListener('click', function(){
    texto.classList.add('move_text');
})