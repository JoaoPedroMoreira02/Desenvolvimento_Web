var click = document.getElementsByTagName('span')[0];

click.addEventListener('click', function(){
    let show = document.querySelector('.texto p');
    if(show.classList.contains('p_show') == false){
        show.classList.add('p_show');
    }else {
        show.classList.remove('p_show');
    }
})