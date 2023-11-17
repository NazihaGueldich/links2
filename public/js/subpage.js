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
    } else if (x == 1 && indses6 < 10) {
        indses6++;
    }else if(x == -1 && indses6 ==0){
        indses6= 10;
    }else{
        indses6= 0;
    }console.log(indses6);

    var h = ['어떤 어댑터를 사용하나요?', '튀니지에 약을 가지고 들어갈 수 있나요?', '튀니지에 대한민국 대사관이 있나요?','튀니지 내 한식당이 있나요?', '튀니지 방문 시 비자를 발급받아야 하나요?', '어떤 통화(화폐)를 쓰나요?','튀니지에서 술이 허용되나요?','주말에 박물관 방문이 가능한가요?','튀니지도 다른 이슬람 국가들처럼 금요일, 토요일이 주말인가요?','튀니지에 히잡을 써야하나요?','한국에서 핸드폰 유심을 사서 갈 수 있나요?'];
    var p = [
        '튀니지에서는 한국과 동일한 220v 전압을 사용합니다. 따로 변환 플러그나 어댑터가 없어도 된다는 게 장점이에요.',
        '튀니지로 의약품을 반입할 수 있지만 모르핀이 포함된 의약품이 있다면 의약품 처방전을 지참해 오세요.',
        '네, 대한민국 대사관이 있습니다.<br>공관주소 및 연락처<br>주소: Immeuble BLUE SQUARE, Avenue de la Bourse, Les Berges du Lac 2, 1053 Tunis, Tunisie<br>전화: +216-71- 198- 595 / 71-198-596 / 71-198-597<br>팩스: +216-71-198-598<br>E-Mail : tunisie@mofa.go.kr<br>비상 연락처(사건, 사고 등 24시간 긴급 당직전화) : +216-99 -567-040',
        '네, 튀니스 내 한인이 직접 운영하는 한식당과 튀니지인이 운영하는 한식당이 있습니다.',
        '튀니지 방문시 비자를 받지 않아도 됩니다. 최대 90일간 무비자 체류가 가능합니다.',
        '통화는 튀니지 디나르입니다. 현금 자동 인출기를 쉽게 찾을 수 있고, 공항이나 호텔이나 은행, 환전소, 우체국에서 달러 혹은 유로 현금을 현지 통화로 교환할 수 있어요.',
        '튀니지에서 술을 마실 수 있습니다. 하지만 이슬람의 영향으로 금요일에는 술 판매가 금지되며 길거리에서 술을 마시는 것도 불법입니다.튀니지산 맥주 브랜드인 셀티아(Celtia)와 와인 브랜드인 마공(Magon)이 유명합니다.',
        '대부분의 튀니지 박물관은 토요일, 일요일에 운영하며 월요일이 휴무입니다. 하지만 미리 확인 후 방문하시는 걸 추천드려요.',
        '튀니지는 토요일, 일요일을 주말로 채택하고 있습니다.',
        '튀니지는 이슬람 국가 중에서도 개방적인 나라에 속하며, 히잡착용은 개인의 자유입니다.',
        '튀니지 공항에 도착하시면 심카드를 구매할 수 있는 매장이 있습니다. 공항 내 Ooredoo 매장에서 심카드를 구매하는 걸 추천드려요.'
    ];
    var j=1;
    for(var i=0;i<11;i++){
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
    let firstLongContent = $('.wrap-trips-routes .wrap-single-zone.zone-tunis').find('.zone-long-description').html();
    $('.wrap-trips-routes-infos .content').html(firstLongContent);

   $('.wrap-trips-routes .img-container .wrap-single-zone').on('click', function(e){
       e.preventDefault();
       let longDescriptionZone = $(this).find('.zone-long-description').html();
       $('.wrap-trips-routes-infos .content').html(longDescriptionZone);
   }).on('mouseenter', function(e){
       let position = $(this);
       $('.wrap-trips-routes .wrap-single-zone').css('z-index', '2');
       position.css('z-index', '9');
   });

    if (isMobileDevice()) {
        $('.wrap-single-zone').on('click', () => {
            scrollToDescriptionSection();
        });
    }

    function scrollToDescriptionSection() {
        // Animation de défilement vers la deuxième section
        $('html, body').animate({
            scrollTop: $('#sectionDescription').offset().top - 60
        }, 600); // La durée de l'animation en millisecondes (ajustez selon vos besoins)
    }
    // Mobile device detection //TODO : deplacer cette fonction dans le js general du site
    function isMobileDevice() {
        // Responsive design check
        const isResponsive = $(window).width() <= 767;

        // User agent check
        const isUserAgentMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

        // Combine the checks based on your specific requirements
        return isResponsive || isUserAgentMobile;
    }
});
// JavaScript pour afficher/masquer les descriptions lorsque le bouton est cliqué
const images = document.querySelectorAll('.image1-2');
const buttons = document.querySelectorAll('.btn');

buttons.forEach((button, index) => {
    button.addEventListener('click', () => {
        if (images[index].style.display === 'none') {
            images[index].style.display = 'block';
        } else {
            images[index].style.display = 'none';
        }
    });
});





