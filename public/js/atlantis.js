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
function chngcontsess4(x) {
    changeCircl(0);
    var choix0 = document.getElementById('choix0');
    var choix1 = document.getElementById('choix1');
    var choix2 = document.getElementById('choix2');
    var choix3 = document.getElementById('choix3');
    var dirct = document.getElementById('dirct');
    if (x == 0) {
        choix0.classList = 'p-2 btn btnactv';
        choix1.classList = 'p-2 btninactv';
        choix2.classList = 'p-2 btninactv';
        choix3.classList = 'p-2 btninactv';
        dirct.style.display = 'none';
    } else if (x == 1) {
        choix1.classList = 'p-2 btn btnactv';
        choix0.classList = 'p-2 btninactv';
        choix2.classList = 'p-2 btninactv';
        choix3.classList = 'p-2 btninactv';
        dirct.style.display = 'block';
    } else if (x == 2) {
        choix2.classList = 'p-2 btn btnactv';
        choix0.classList = 'p-2 btninactv';
        choix1.classList = 'p-2 btninactv';
        choix3.classList = 'p-2 btninactv';
        dirct.style.display = 'none';
    } else if (x == 3) {
        choix3.classList = 'p-2 btn btnactv';
        choix0.classList = 'p-2 btninactv';
        choix1.classList = 'p-2 btninactv';
        choix2.classList = 'p-2 btninactv';
        dirct.style.display = 'none';
    }


    var p = [
        "고객의 필요에 따라 프라이빗 차량+운전기사 서비스를 이용할 수 있습니다. 공항-호텔 간 운행 및 비즈니스 미팅을 위한 다수의 회의 장소로여러번의 이동이 가능하며 원하는 시간에 예약할 수 있습니다. 포함사항 - 운전기사 이용 요금, 주차비, 연료비, 통행료불포함사항- 투어 가이드, 개인 여행자 보험",
        "동호회, 소규모 단체의 행사 등의 목적으로 미니버스+운전기사 서비스를 이용할 수 있습니다. 기업 워크샵, 대가족 단체 여행, 유적지 답사, 연수 등의편안하고 안전한 일정을 아틀란티스가 도와드립니다.포함사항- 운전기사 이용 요금, 주차비, 연료비, 통행료불포함사항- 투어 가이드, 개인 여행자 보험",
        "단체의 편안하고 쾌적한 여행을 위한 중대형버스+운전기사 서비스를 제공합니다. 넓직한 실내공간에서 편안한 이동을 하고 싶은 단체고객들의 여행에 품격을 더합니다. 포함사항- 운전기사 이용 요금, 주차비, 연료비, 통행료불포함사항- 투어 가이드, 개인 여행자 보험",
        "의전차량고급 럭셔리 차량으로 VIP 고객 의전을 수행합니다. 국제 행사 혹은 기업 만찬 등을 위해 방문한 VIP고객들이 고품격 의전서비스를 누릴 수 있습니다.포함사항- 운전기사 이용 요금, 주차비, 연료비, 통행료불포함사항- 투어 가이드, 개인 여행자 보험"
    ];
    var h1 = ['places 1-4', "places Max 22 (최대 22명)", "Places Max 53 (최대 53명)", "Places Max 8 "];
    var h2 = ['Fee 상담 후 메일 안내', "Fee 상담 후 메일 안내  ", "Fee 상담 후 메일 안내", "Fee 상담 후 메일 안내"];
    var img = ['Car.jpg', 'Mini-bus-2.jpg', 'bus.png', 'van1.jpg'];

    document.getElementById('psess4').innerHTML = p[x];
    document.getElementById('h1sess4').innerHTML = h1[x];
    document.getElementById('h2sess4').innerHTML = h2[x];
    document.getElementById('numcrd').value = x;
    document.getElementById('imgsess4kb').src = '../images/' + img[x];
}

function changeCircl(elm) {
    var crcl11 = document.getElementById('crcl11');
    var crcl22 = document.getElementById('crcl22');
    var crcl33 = document.getElementById('crcl33');
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
    } else if (x == -1 && elm == 0) {
        elm = 2;
    } else {
        elm = 0;
    }


    var crd1 = ['Van 2.jpg'];
    var crd2 = ['Mini-bus-2.jpg', 'Mini-bus-3.jpg', 'Mini bus 5.jpg'];
    var crd3 = ['bus.png'];
    var crd4 = ['van1.jpg'];

    changeCircl(elm);
    var numcrd = document.getElementById('numcrd').value;
    var images = document.getElementById('imgsess4kb');
    var dirct = document.getElementById('dirct');

    if (numcrd == 0) {
        images.src = '../images/' + crd1[elm];
    } else if (numcrd == 1) {
        images.src = '../images/' + crd2[elm];
    } else if (numcrd == 2) {
        images.src = '../images/' + crd3[elm];
    } else if (numcrd == 3) {
        images.src = '../images/' + crd4[elm];
    }
}

z = 0;

function srllcrdssess5(x) {
    if (x == -1 && z == 1) {
        z = 0;
    } else if (z == 0 && x == 1) {
        z = 1;
    } else if (x == -1 && z == 0) {
        z = 1;
    } else {
        z = 0;
    }

    var crcl1sess5 = document.getElementById('crcl1sess5');
    var crcl2sess5 = document.getElementById('crcl2sess5');
    if (z === 0) {
        crcl1sess5.style.backgroundImage = "url(../images/ptbl.svg)";
        crcl1sess5.style.backgroundSize = "auto";
        crcl2sess5.style.backgroundImage = "url(../images/ftbl.svg)";
    } else if (z === 1) {
        crcl1sess5.style.backgroundImage = "url(../images/ftbl.svg)";
        crcl2sess5.style.backgroundImage = "url(../images/ptbl.svg)";
        crcl2sess5.style.backgroundSize = "auto";
    }

    //declaration des cnst
    //first crcl
    var h20 = ['Four Seasons Tunis', 'Anantara Tozeur', 'Movenpick Sousse', 'The Residence Tunis', 'Le Kasbah Kairouan', 'Pansy KSAR Ghilene'];
    var p0 = ['Tunis, Tunisia', 'Tozeur, Tunisia', 'Sousse, Tunisia', 'Tunis, Tunisia', 'Kairouan, Tunisia', 'Douz, Tunisia'];
    var img0 = ['Four-Seasons-Tunis.jpeg', 'Anantara-Tozeur.jpeg', 'Movenpick-Sousse.jpeg', 'The-Residence-Tunis.jpeg', 'Le-Kasbah-Kairouan.jpeg', 'Pansy-KSAR-Ghilene.jpeg'];
    var alt0 = ['Four Seasons Tunis', "Anantara Tozeur", "Movenpick Sousse", "The Residence Tunis", "Le Kasbah Kairouan", "Pansy KSAR Ghilene"]
    //seconde crcl
    var h21 = ['Radisson Sfax', 'Sheraton', 'Africa', 'Movenpick Lac 2', 'Mouradi Gammarth'];
    var p1 = ['Sfax, Tunisia', 'Hammamet, Tunisia', 'Tunis, Tunisia', 'Tunis, Tunisia', 'Tunis, Tunisia'];
    var img1 = ['Radisson-Sfax.jpeg', 'Sheraton.jpeg', 'Africa.jpeg', 'Movenpick-Lac-2.jpeg', 'Mouradi-gammarth-2.jpeg'];
    var alt1 = ['Radisson Sfax', 'Sheraton', 'Africa', 'Movenpick Lac 2', 'Mouradi Gammarth']

    //3ayatt lil section ili bch n5dm aliha wfara8tha
    var section = document.getElementById('sess5-crds');
    section.innerHTML = '';
    var ind = 0;
    var tailltab = 0;
    if (z === 0) {
        tailltab = h20.length;
    } else if (z === 1) {
        tailltab = h21.length;
    }
    //action sur les card
    for (i = 0; i < tailltab; i++) {
        if (z === 0) {
            h2 = h20[ind];
            p = p0[ind];
            img = '../images/' + img0[ind];
            alt = alt0[ind];
        } else if (z === 1) {
            h2 = h21[ind];
            p = p1[ind];
            img = '../images/' + img1[ind];
            alt = alt1[ind];
        }
        ind++;

        var divElement = document.createElement('div');
        if (i == 0 || i == 3) {
            divElement.className = 'col-lg-3 offset-lg-1 sess5crd radius-20';
        } else {
            divElement.className = 'col-lg-3 sess5crd radius-20';
        }

        // hna sna3t div nta3 il taswira bil masque
        const maskDivElement = document.createElement('div');
        maskDivElement.classList.add('mask-image');
        // hna 7atit itaswira
        const imgElement = document.createElement('img');
        imgElement.setAttribute('id', 'sess5crd1img');
        imgElement.setAttribute('src', img);
        imgElement.setAttribute('alt', alt);
        imgElement.classList.add('img-fluid');
        imgElement.setAttribute('alt', 'Carthage');
        maskDivElement.appendChild(imgElement);
        //zdt etaswira lil div masque
        divElement.appendChild(maskDivElement);
        // ilba9iya nta3 il crd
        //linna cercl
        const imgElement1 = document.createElement('img');
        imgElement1.setAttribute('src', "../images/sess5crd1crcl.png");
        imgElement1.classList.add('cercle-img');
        divElement.appendChild(imgElement1);
        //linna il txt fel crcl
        const pElement = document.createElement('p');
        pElement.classList.add('text-img');
        pElement.textContent = '링크';
        divElement.appendChild(pElement);
        //linna div position
        const divElement2 = document.createElement('div');
        divElement2.classList.add('posit');
        //li taswira wel position
        const imgElement2 = document.createElement('img');
        imgElement2.setAttribute('src', "../images/gps.png");
        imgElement2.classList.add('mr-2');
        divElement2.appendChild(imgElement2);
        const pElement2 = document.createElement('p');
        pElement2.setAttribute('id', 'sess5crd1p');
        pElement2.textContent = p;
        divElement2.appendChild(pElement2);
        //zstha lil div position
        divElement.appendChild(divElement2);
        //inejmet
        const divnote = document.createElement('div');
        divnote.classList.add('note');
        for (j = 0; j < 5; j++) {
            var imgElement3 = document.createElement('img');
            imgElement3.setAttribute('src', "../images/review_Star.svg");
            divnote.appendChild(imgElement3);
            divElement.appendChild(divnote);
        }
        //ism l'hotel
        const h2Element = document.createElement('h2');
        h2Element.setAttribute('id', 'sess5crd1h2');
        h2Element.classList.add('sub-title', 'sess5h2');
        h2Element.textContent = h2;
        divElement.appendChild(h2Element);
        //zdthom ilkoll lil div fel blade mte3i
        section.appendChild(divElement);
    }
}

var idimg = 0;

function chngimgsess1(x) {
    var img = [
        "../images/Atlantis-Space.jpg",
        "../images/Teems-Atlantis.jpg",
        "../images/Bureau-Atlantis.jpg",
    ];

    var alt = ['Atlantis Space', 'Teems Atlantis', 'Bureau Atlantis']

    if (x == -1 && idimg > 0) {
        idimg--;
    } else if (x == 1 && idimg < 2) {
        idimg++;
    } else if (x == -1 && idimg == 0) {
        idimg = 2;
    } else {
        idimg = 0;
    }

    var crcl1 = document.getElementById('crclsess1');
    var crcl2 = document.getElementById('crclsess2');
    var crcl3 = document.getElementById('crclsess3');
    if (idimg === 0) {
        crcl1.src = "../images/pt.png";
        crcl2.src = "../images/crcl.png";
        crcl3.src = "../images/crcl.png";
    } else if (idimg === 1) {
        crcl1.src = "../images/crcl.png";
        crcl2.src = "../images/pt.png";
        crcl3.src = "../images/crcl.png";
    } else if (idimg === 2) {
        crcl1.src = "../images/crcl.png";
        crcl2.src = "../images/crcl.png";
        crcl3.src = "../images/pt.png";
    }

    document.getElementById('imgsess1kb').src = img[idimg];
    document.getElementById('imgsess1kb').alt = alt[idimg];


}

var indxcrd = 0;

function PAsrllcrdssess6(x) {
    if (x == -1 && indxcrd > 0) {
        indxcrd--;
    } else if (x == 1 && indxcrd < 2) {
        indxcrd++;
    } else if (x == -1 && indxcrd == 0) {
        indxcrd = 2;
    } else {
        indxcrd = 0;
    }
    console.log('indxcrd ', indxcrd);

    var ind = 1;
    for (var i = 0; i < 3; i++) {
        var idcrcl = "PAcrcl" + ind + "sess6";
        var crcl = document.getElementById(idcrcl);
        if (i == indxcrd) {
            console.log('ind ', ind);
            crcl.style.backgroundImage = "url(../images/ptbl.svg)";
            crcl.style.backgroundSize = 'auto'
        } else {
            crcl.style.backgroundImage = "url(../images/ftbl.svg)";
        }
        ind++;
    }

    //declaration des cnst
    //first crcl
    var h20 = ['Dar Ben Gacem', 'Dar Fatma', 'Dar ellamma'];
    var p0 = ['Medina of Tunis', 'Sidi bou said', 'Bizerte, tunisia'];
    var img0 = ['dar_bel_gesem.jpg', 'dar_fatma.jpg', 'guesthouse-_bizerte-_dar_Ellamma.jpg'];
    var alt0 = ['Dar ellamma', "Dar Belgecem", "Dar Fatma", ];
    //seconde crcl
    var h21 = ['Dar Antonia', 'Diar Abou Habibi', 'Dar Saida Baya'];
    var p1 = ['Médina de Sousse', ' Tozeur', 'Tozeur'];
    var img1 = ['dar_antonia.jpg', 'diar-abou-habibi.jpg', 'dar_saida_baya.jpg'];
    var alt1 = ['Dar Antonia', 'Diar Abou Habibi', 'Dar Saida Baya'];
    //3rd crcl
    var h22 = ['Dar Dhiafa'];
    var p2 = ['Djerba'];
    var img2 = ['dar_dhiafa.jpg'];
    var alt2 = ['Dar Dhiafa'];
    //3ayatt lil section ili bch n5dm aliha wfara8tha
    var section = document.getElementById('sess6-crds');
    section.innerHTML = '';
    var ind = 0;
    var tailltab = 0;
    if (indxcrd === 0) {
        tailltab = h20.length;
    } else if (indxcrd === 1) {
        tailltab = h21.length;
    } else {
        tailltab = h22.length;
    }
    //action sur les card
    for (i = 0; i < tailltab; i++) {
        if (indxcrd === 0) {
            h2 = h20[ind];
            p = p0[ind];
            img = '../images/' + img0[ind];
            alt = alt0[ind];
        } else if (indxcrd === 1) {
            h2 = h21[ind];
            p = p1[ind];
            img = '../images/' + img1[ind];
            alt = alt1[ind];
        } else {
            h2 = h22[ind];
            p = p2[ind];
            img = '../images/' + img2[ind];
            alt = alt2[ind];
        }
        ind++;
        console.log(h2);
        let sectionContent = '';

        if (i == 0 || i == 3) {
            sectionContent += `<div class="col-lg-3 offset-lg-1 sess6crd radius-20">`;
        } else {
            sectionContent += `<div class="col-lg-3 sess6crd radius-20">`;
        }

        sectionContent += `
            <div class="mask-image">
                <img class="sess6crdimg" src="../images/` + img + `" class="img-fluid" alt="` + alt + `">
            </div>
            <img src="../images/sess6crd1crcl.png" alt='cercle blue' class="cercle-img">
            <p class="text-img">링크</p>
            <div class="posit">
                <img src="../images/gps.png" alt='gps' class="mr-2">
                <p>` + p + `</p>
            </div>
            <h2 class="sub-title sess6h2">` + h2 + `</h2>
        </div>`;

        section.innerHTML += sectionContent;

    }
}

