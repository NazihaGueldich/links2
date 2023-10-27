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
            eml.innerHTML=eml2[j];console.log(img2[j]);
            img.style.backgroundImage = "url(../images/"+img2[j]+")";
            j++;
        }
    }
    

    
    
}