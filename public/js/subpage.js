$('#section3 .slick-section3-web').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    cssEase: 'linear'
});

$('#section3 .slick-section3-mobil').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    cssEase: 'linear'
});

$('#section4 .slick-section4').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    cssEase: 'linear'
});

var indses6=0;
function srllcrdssess6(x){

    if (x == -1 && indses6 > 0) {
        indses6--;
    } else if (x == 1 && indses6 < 5) {
        indses6++;
    }else if(x == -1 && indses6 ==0){
        indses6= 5;
    }else{
        indses6= 0;
    }

    var h = ['어떤 어댑터를 사용하나요?', '1', '2','어떤 어댑터를 사용하나요?', '1', '2','3'];
    var p = [
        '튀니지에서는 한국과 동일한 220v 전압을 사용합니다. 따로 변환 플러그나 어댑터가 없어도 된다는 게 장점이에요.',
        '1',
        '2',
        '튀니지에서는 한국과 동일한 220v 전압을 사용합니다. 따로 변환 플러그나 어댑터가 없어도 된다는 게 장점이에요.',
        '1',
        '2',
        '3'
    ];
    var j=1;
    for(var i=0;i<6;i++){
        var idcrcl='crcl'+j+'sess6';
        var crcl = document.getElementById(idcrcl);
        if(i==indses6){
            crcl.style.backgroundImage = "url(../images/ptbl.svg)";
            crcl.style.backgroundSize="auto";
        }else{
            crcl.style.backgroundImage = "url(../images/ftbl.svg)";
        }
        j++;
    }
    document.getElementById('section6h2').innerHTML=h[indses6];
    document.getElementById('section6p').innerHTML=p[indses6];
}

// Section 5
$(document).ready(function(){
    let firstLongContent = $('.wrap-trips-routes .img-container a[title="Tunis"]').find('.zone-long-description').html();
    $('.wrap-trips-routes-infos .content').html(firstLongContent);

   $('.wrap-trips-routes .img-container a').on('click', function(e){
       e.preventDefault();
       let longDescriptionZone = $(this).find('.zone-long-description').html();
       $('.wrap-trips-routes-infos .content').html(longDescriptionZone);
   }).on('mouseenter', function(e){
       let position = $(this);
       $('.wrap-trips-routes .img-container a').css('z-index', '2');
       position.css('z-index', '9');
       setTimeout(function() {
           position.css('color', '#fff');
       }, 320)
   }).on('mouseleave', function (){
       let position = $(this);
       position.css('color', 'transparent');
   });
});
