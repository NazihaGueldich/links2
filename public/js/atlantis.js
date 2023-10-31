/* navbar */
function updateClock() {
    const tunisTime = new Date();

    let hours = tunisTime.getHours();
    const minutes = tunisTime.getMinutes();
    const seconds = tunisTime.getSeconds();

    let amOrPm = hours >= 12 ? 'pm' : 'am';
    hours = hours % 12;
    hours = hours ? hours : 12;

    const timeString =
        `${(hours < 10 ? '0' : '') + hours}:${(minutes < 10 ? '0' : '') + minutes}:${(seconds < 10 ? '0' : '') + seconds} ${amOrPm}`;
    
    const tunisTimeElement = document.getElementById("tunis-time");
    if (tunisTimeElement) {
        tunisTimeElement.textContent = timeString;
    }
}

updateClock();

setInterval(updateClock, 1000);

/* icons */
function changeImage(isMouseOver, id) {
    var imgId = 'img' + id;
    var pId = 'p' + id;
    var img = document.getElementById(imgId);
    var p = document.getElementById(pId);
    var src;
    if (isMouseOver) {
        src = "../images/Icon_" + id + "_First_Animation.gif";
        p.style.fontWeight = 'bolder';
    } else {
        src = "../images/Icon_" + id + "_Second_Animation.gif";
        p.style.fontWeight = '';
    }
    img.src = src;
}

/* section  change cards */
function chngcontsess4(x){
    changeCircl(0);
    var choix0=document.getElementById('choix0');
    var choix1=document.getElementById('choix1');
    var choix2=document.getElementById('choix2');
    var choix3=document.getElementById('choix3');
    if(x==0){
        choix0.classList.replace("spninactv", "spnactv");
        choix1.classList.replace("spnactv", "spninactv");
        choix2.classList.replace("spnactv", "spninactv");
        choix3.classList.replace("spnactv", "spninactv");
    }else if(x==1){
        choix1.classList.replace("spninactv", "spnactv");
        choix0.classList.replace("spnactv", "spninactv");
        choix2.classList.replace("spnactv", "spninactv");
        choix3.classList.replace("spnactv", "spninactv");
    }else if(x==2){
        choix2.classList.replace("spninactv", "spnactv");
        choix1.classList.replace("spnactv", "spninactv");
        choix0.classList.replace("spnactv", "spninactv");
        choix3.classList.replace("spnactv", "spninactv");
    }else if(x==3){
        choix3.classList.replace("spninactv", "spnactv");
        choix1.classList.replace("spnactv", "spninactv");
        choix2.classList.replace("spnactv", "spninactv");
        choix0.classList.replace("spnactv", "spninactv");
    }

    var p =[
        "고객의 필요에 따라 프라이빗 차량+운전기사 서비스를 이용할 수 있습니다. 공항-호텔 간 운행 및 비즈니스 미팅을 위한 다수의 회의 장소로여러번의 이동이 가능하며 원하는 시간에 예약할 수 있습니다. 포함사항 - 운전기사 이용 요금, 주차비, 연료비, 통행료불포함사항- 투어 가이드, 개인 여행자 보험",
        "동호회, 소규모 단체의 행사 등의 목적으로 미니버스+운전기사 서비스를 이용할 수 있습니다. 기업 워크샵, 대가족 단체 여행, 유적지 답사, 연수 등의편안하고 안전한 일정을 아틀란티스가 도와드립니다.포함사항- 운전기사 이용 요금, 주차비, 연료비, 통행료불포함사항- 투어 가이드, 개인 여행자 보험",
        "단체의 편안하고 쾌적한 여행을 위한 중대형버스+운전기사 서비스를 제공합니다. 넓직한 실내공간에서 편안한 이동을 하고 싶은 단체고객들의 여행에 품격을 더합니다. 포함사항- 운전기사 이용 요금, 주차비, 연료비, 통행료불포함사항- 투어 가이드, 개인 여행자 보험",
        "의전차량고급 럭셔리 차량으로 VIP 고객 의전을 수행합니다. 국제 행사 혹은 기업 만찬 등을 위해 방문한 VIP고객들이 고품격 의전서비스를 누릴 수 있습니다.포함사항- 운전기사 이용 요금, 주차비, 연료비, 통행료불포함사항- 투어 가이드, 개인 여행자 보험"
    ];
    var h1 =['places 1-4', "placesMax 22 (최대 22명)","PlacesMax 53 (최대 53명)","PlacesMax 8 "];
    var h2 =['Fee 상담 후 메일 안내', "Fee 상담 후 메일 안내  ","Fee 상담 후 메일 안내","Fee 상담 후 메일 안내"];
    var img=['van1.jpg','Mini bus 2.jpg','bus.png','Van 2.jpg',];

    document.getElementById('psess4').innerHTML=p[x];
    document.getElementById('h1sess4').innerHTML=h1[x];
    document.getElementById('h2sess4').innerHTML=h2[x];
    document.getElementById('numcrd').value=x;
    document.getElementById('imgsess4kb').src='../images/'+img[x];
}

function changeCircl(elm){
    var crcl11=document.getElementById('crcl11');
    var crcl22=document.getElementById('crcl22');
    var crcl33=document.getElementById('crcl33');
    if (elm === 0) {
        crcl11.src = "../images/pt.png";
        crcl22.src = "../images/crcl.png";
        crcl33.src = "../images/crcl.png";
    } else if (elm === 1) {
        crcl11.src = "../images/crcl.png";
        crcl22.src = "../images/pt.png";
        crcl33.src = "../images/crcl.png";
    } else if (elm === 2) {
        crcl11.src = "../images/crcl.png";
        crcl22.src = "../images/crcl.png";
        crcl33.src = "../images/pt.png";
    }
}

var elm = 0;
function chngimgsess4(x) {
    if (x == -1 && elm > 0) {
        elm--;
    } else if (x == 1 && elm < 2) {
        elm++;
    }else if(x == -1 && elm ==0){
        elm= 2;
    }else{
        elm= 0;
    }
   
    changeCircl(elm);
    var numcrd=document.getElementById('numcrd').value;
    var images=document.getElementById('imgsess4kb');

    var crd1=['van1.jpg','van1.jpg','van1.jpg'];
    var crd2=['Mini bus 2.jpg','Mini bus 3.jpg','Mini bus 5.jpg'];
    var crd3=['bus.png','bus.png','bus.png'];
    var crd4=['Van 2.jpg','van1.jpg','van1.jpg'];
    if(numcrd==0){
        images.src = '../images/' + crd1[elm];
    }else if(numcrd==1){
        images.src = '../images/' + crd2[elm];
    }else if(numcrd==2){
        images.src = '../images/' + crd3[elm];
    }else if(numcrd==3){
        images.src = '../images/' + crd4[elm];
    }
}

z=0;
function srllcrdssess5(x){
    if (x == -1 && z > 0) {
        z--;
    } else if (x == 1 && z < 2) {
        z++;
    }else if(x == -1 && z ==0){
        z= 2;
    }else{
        z= 0;
    }

    var crcl1sess5=document.getElementById('crcl1sess5');
    var crcl2sess5=document.getElementById('crcl2sess5');
    var crcl3sess5=document.getElementById('crcl3sess5');
    if (z === 0) {
        crcl1sess5.style.backgroundImage = "url(../images/ptbl.svg)";
        crcl2sess5.style.backgroundImage = "url(../images/ftbl.svg)";
        crcl3sess5.style.backgroundImage = "url(../images/ftbl.svg)";
    } else if (z === 1) {
        crcl1sess5.style.backgroundImage = "url(../images/ftbl.svg)";
        crcl2sess5.style.backgroundImage = "url(../images/ptbl.svg)";
        crcl3sess5.style.backgroundImage = "url(../images/ftbl.svg)";
    } else if (z === 2) {
        crcl1sess5.style.backgroundImage = "url(../images/ftbl.svg)";
        crcl2sess5.style.backgroundImage = "url(../images/ftbl.svg)";
        crcl3sess5.style.backgroundImage = "url(../images/ptbl.svg)";
    }

     //declaration des cnst
    //first crcl
    var h20=['Four seasons Tunis','Anantara Tozeur','Movenpick Sousse','The residence Tunis','Le Kasbah Kairouan','GUESTHOUSE: Bizerte- Dar Ellamma'];
    var p0=['HAMMAMET, Tunisia','TOZEUR, Tunisia','SOUSSE, Tunisia','TUNIS, Tunisia','KAIROUAN, Tunisia','Ksar Ghilane, Tunisia'];
    var img0=['sess5crd1.jpeg','sess5crd2.jpeg','sess5crd3.jpeg','sess5crd4.jpeg','sess5crd5.jpeg','sess5crd6.jpeg'];
    //seconde crcl
    var h21=['Pansy KSAR Ghilene','Radisson Sfax','Sheraton','Africa','Movenpick Lac 2','Mouradi Gammarth'];
    var p1=['HAMMAMET, Tunisia','SFAX, Tunisia','HAMMAMET, Tunisia','TUNIS, Tunisia','TUNIS, Tunisia','TUNIS, Tunisia'];
    var img1=['pansy ksar ghilane.jpeg','Radisson Sfax.jpeg','Mouradi gammarth 2.jpeg','Africa 2.jpeg','Movenpick Lac 2.jpeg','guesthouse- bizerte- dar Ellamma 2.jpeg'];
    //third crcl
    var h22=['Four seasons Tunis','Anantara Tozeur','Movenpick Sousse','The residence Tunis','Le Kasbah Kairouan','GUESTHOUSE: Bizerte- Dar Ellamma'];
    var p2=['HAMMAMET, Tunisia','TOZEUR, Tunisia','SOUSSE, Tunisia','TUNIS, Tunisia','KAIROUAN, Tunisia','TUNIS, Tunisia'];
    var img2=['sess5crd1.png','sess5crd2.png','sess5crd3.png','sess5crd4.png','sess5crd5.png','sess5crd6.png'];

    var ind=0;
    //action sur les card 
    for (i=1; i < 7; i++) {
        var imgId = 'sess5crd' + i+'img';
        var pId = 'sess5crd' + i+'p';
        var h2Id = 'sess5crd' + i+'h2';

        var img=document.getElementById(imgId);
        var p=document.getElementById(pId);
        var h2=document.getElementById(h2Id);

        if (z === 0) {
            h2.innerHTML=h20[ind];
            p.innerHTML=p0[ind];
            img.src='../images/'+img0[ind];
            ind++;
        } else if (z === 1) {
            h2.innerHTML=h21[ind];
            p.innerHTML=p1[ind];
            img.src='../images/'+img1[ind];
            ind++;
        } else if (z === 2) {
            h2.innerHTML=h22[ind];
            p.innerHTML=p2[ind];
            img.src='../images/'+img2[ind];
            ind++;
        } 
    }
}