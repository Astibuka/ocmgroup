
$(document).ready(function() {
    $('.header__burger').click(function(event) {
        $('.header__burger,.header__menu').toggleClass('active');
        $('body').toggleClass('lock');
    });
    $( '.header__menu a' ).on("click", function(event){
        $('.header__burger,.header__menu').removeClass('active');
        $('body').removeClass('lock');
    });
});



$(document).ready(function() {
    $('img.animate__animated').hover(
        function() {
            $(this).addClass('animate__heartBeat'); 
        },
        function() {
            $(this).removeClass('animate__heartBeat');
        }
    )});

    $(document).ready(function(){
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            touchThershold:10,
            arrows:false,
            dots:true
        });
    });

    // партнеры: смена цвета при наведении
    img.addEventListener('mouseout', e => img.src = "/img/CAS_logo_mono.png");
    img.addEventListener('mouseover', e => img.src = "/img/CAS_logo.png");
    
    img2.addEventListener('mouseout', e => img2.src = "/img/SAP_logo_mono.png");
    img2.addEventListener('mouseover', e => img2.src = "/img/SAP_logo.png");


    // вставить очередного партнера строкой выше
