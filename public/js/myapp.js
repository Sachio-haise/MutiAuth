var change_class = document.querySelector(' .navbar-toggler');
change_class.addEventListener('click',()=>{
    change_class.classList.toggle('active');
});

window.addEventListener("scroll",function(){
    var header = $('.header_area').height() +50;

    let scroll = $(window).scrollTop();
    if(scroll >= header){
        $('.header_area .main-menu').addClass('nav_fix');
    }else{
        $('.header_area .main-menu').removeClass('nav_fix');
    }
})

$(document).ready(function(){
    var $btns  = $('.container .list-group .list-group-item');
    var cards = document.querySelectorAll('.container .products .card');

    $btns.click(function(e){
        $('.container .list-group .list-group-item').removeClass('active');
        e.target.classList.add('active');

        var $selector = $(e.target).attr('data-name');

        cards.forEach((card) => {
            $filtercards = card.getAttribute('data-name');
            if(($filtercards == $selector) || $selector == 'all'){
                card.classList.add('show');
                card.classList.remove('hide');
            } else{
                card.classList.add('hide');
                card.classList.remove('show');
            }
        });
    });

});

$(document).ready(function(){
    var $btns  = $('.container .items .item');
    var cards = document.querySelectorAll('.container .products .card');

    $btns.click(function(e){
        $('.container .items .item').removeClass('active');
        e.target.classList.add('active');

        var $selector = $(e.target).attr('data-name');

        cards.forEach((card) => {
            $filtercards = card.getAttribute('data-name');
            if(($filtercards == $selector) || $selector == 'all'){
                card.classList.add('show');
                card.classList.remove('hide');
            } else{
                card.classList.add('hide');
                card.classList.remove('show');
            }
        });
    });

});
