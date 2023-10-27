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

/* section 3 change cards */
var indx = 0;
function srllcrds(x){
    if (x == -1 && indx > 0) {
        indx--;
    } else if (x == 1 && indx < 2) {
        indx++;
    }else if(x == -1 && indx ==0){
        indx= 2;
    }else{
        indx= 0;
    }
    //action sur les cercle
    if (indx === 0) {
        crcl1.style.backgroundImage = "url(../images/ptbl.svg)";
        crcl2.style.backgroundImage = "url(../images/ftbl.svg)";
        crcl3.style.backgroundImage = "url(../images/ftbl.svg)";
    } else if (indx === 1) {
        crcl1.style.backgroundImage = "url(../images/ftbl.svg)";
        crcl2.style.backgroundImage = "url(../images/ptbl.svg)";
        crcl3.style.backgroundImage = "url(../images/ftbl.svg)";
    } else if (indx === 2) {
        crcl1.style.backgroundImage = "url(../images/ftbl.svg)";
        crcl2.style.backgroundImage = "url(../images/ftbl.svg)";
        crcl3.style.backgroundImage = "url(../images/ptbl.svg)";
    }

    //declaration des cnst
    //first crcl
    var h1K0=['카멜 라가','정지혜','마리엠 조그라미','소니아 벤 아모르'];
    var h1F0=['Kamel Lagha','Heidi Jung','Meriem Zoghlami','Sonia Ben Amor'];
    var pst0=['CEO of the agency','Korean department','executive management','Tiketing Department'];
    var eml0=['Kamel@atlantis.tn','jh.heidi.j@gmail.com','atlantis@atlantis.tn','Sonia.Benamor@atlantis.tn'];
    var img0=['crd1frst.png','crd2frst.png','crd3frst.png','crd4frst.png'];
    //seconde crcl
    var h1K1=['Zhouhour','정지혜','마리엠 조그라미','소니아 벤 아모르'];
    var h1F1=['Kamel Lagha','Heidi Jung','Meriem Zoghlami','Sonia Ben Amor'];
    var pst1=['CEO of the agency','Korean department','executive management','Tiketing Department'];
    var eml1=['Kamel@atlantis.tn','jh.heidi.j@gmail.com','atlantis@atlantis.tn','Sonia.Benamor@atlantis.tn'];
    var img1=['teste2.png','crd2frst.png','testett.png','crd4frst.png'];
    //third crcl
    var h1K2=['nzouh','정지혜','마리엠 조그라미','소니아 벤 아모르'];
    var h1F2=['Kamel Lagha','Heidi Jung','Meriem Zoghlami','Sonia Ben Amor'];
    var pst2=['CEO of the agency','Korean department','executive management','Tiketing Department'];
    var eml2=['Kamel@atlantis.tn','jh.heidi.j@gmail.com','atlantis@atlantis.tn','Sonia.Benamor@atlantis.tn'];
    var img2=['testett.png','crd2frst.png','crd3frst.png','crd4frst.png'];

    var j=0;
    //action sur les card 
    for (i=1; i < 5; i++) {
        var imgId = 'sect3-crd' + i+'-prt1';
        var pId = 'crd' + i+'Pst';
        var h1Id = 'crd' + i+'h1k';
        var h2Id = 'crd' + i+'h1F';
        var emlId= 'crd'+i+'eml';   

        var img=document.getElementById(imgId);
        var p=document.getElementById(pId);
        var h1=document.getElementById(h1Id);
        var h2=document.getElementById(h2Id);
        var eml=document.getElementById(emlId);

        if (indx === 0) {
            h1.innerHTML=h1K0[j];
            h2.innerHTML=h1F0[j];
            p.innerHTML=pst0[j];
            eml.innerHTML=eml0[j];
            img.style.backgroundImage = "url(../images/"+img0[j]+")";
            j++;
        } else if (indx === 1) {
            h1.innerHTML=h1K1[j];
            h2.innerHTML=h1F1[j];
            p.innerHTML=pst1[j];
            eml.innerHTML=eml1[j];
            img.style.backgroundImage = "url(../images/"+img1[j]+")";
            j++;
        } else if (indx === 2) {
            h1.innerHTML=h1K2[j];
            h2.innerHTML=h1F2[j];
            p.innerHTML=pst2[j];
            eml.innerHTML=eml2[j];
            img.style.backgroundImage = "url(../images/"+img2[j]+")";
            j++;
        }
    }
}

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
        "고객의 필요에 따라 프라이빗 차량+운전기사 서비스를 이용할 수 있습니다. 공항-호텔 간 운행 및 비즈니스 미팅을 위한 다수의 회의 장소로 여러번의 이동이 가능하며 원하는 시간에 예약할 수 있습니다. 포함사항 - 운전기사 이용 요금, 주차비, 연료비, 통행료 불포함사항 - 투어 가이드, 개인 여행자 보험 places 1-4 Fee 상담 후 메일 안내",
        "mini-bus",
        "bus",
        "van"
    ];
    var h1 =['places 1-4', "mini-bus","bus","van"];
    var h2 =['Fee 상담 후 메일 안내', "mini-bus","bus","van"];
    var img=['sess4img1.png','Rectangle.png','sahrouch.png','Rectangle.png',];

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

    var crd1=['sess4img1.png','testett.png','splash screen.png'];
    var crd2=['Rectangle.png','sahrouch.png','Untitled-1.png'];
    var crd3=['sahrouch.png','splash screen.png','Rectangle.png'];
    var crd4=['Rectangle.png','sahrouch.png','Untitled-1.png'];
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