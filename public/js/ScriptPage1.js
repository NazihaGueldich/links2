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

var img1 = 0,
    img2 = 0,
    img3 = 0,
    img4 = 0,
    img5 = 0;

function handleClick(crd) {
    if (crd == 1) {
        crd = document.getElementById('image-1');
        if (img1 == 0) {
            crd.style.backgroundImage = "url('../images/teste2.png')";
            img1 = 1;
        } else {
            crd.style.backgroundImage = "url('../images/image 4.png')";
            img1 = 0;
        }
    } else {
        var pId = 'crdp' + crd;
        var p = document.getElementById(pId);
        if (crd == 2) {
            crd = document.getElementById('image-2');
            if (img2 == 0) {
                crd.style.backgroundImage = "url('../images/abweb.png')";
                img2 = 1;
                p.style.display = 'none';
            } else {
                crd.style.backgroundImage = "url('../images/Rectangle (2).png')";
                img2 = 0;
                p.style.display = 'block';
            }
        } else if (crd == 3) {
            crd = document.getElementById('image-3');
            if (img3 == 0) {
                crd.style.backgroundImage = "url('../images/Asset 6@2x 1.png')";
                img3 = 1;
                p.style.display = 'block';
            } else {
                crd.style.backgroundImage = "url('../images/ejja.png')";
                img3 = 0;
                p.style.display = 'none';
            }
        } else if (crd == 4) {
            crd = document.getElementById('image-4');
            if (img4 == 0) {
                crd.style.backgroundImage = "url('../images/tiniseeee.jpg')";
                img4 = 1;
                p.style.display = 'block';
            } else {
                crd.style.backgroundImage = "url('../images/kant.png')";
                img4 = 0;
                p.style.display = 'none';
            }
        } else if (crd == 5) {
            crd = document.getElementById('image-5');
            if (img5 == 0) {
                crd.style.backgroundImage = "url('../images/Asset 5@2x 1.png')";
                img5 = 1;
                p.style.display = 'block';
            } else {
                crd.style.backgroundImage = "url('../images/Asset 3@4x 1.png')";
                img5 = 0;
                p.style.display = 'none';
            }
        }
    }

}

function click(crd) {
    console.log('ahla');
    if (crd == 1) {
        crd = document.getElementById('image-1');
        crd.style.backgroundImage = "url('../images/image 4.png')";
    }
}

function changeImage1() {
    document.getElementById('imageCov1').style.display = "block";
    document.getElementById('imageCov2').style.display = "none";
    document.getElementById('imageCov3').style.display = "none";
    document.getElementById('imageCov4').style.display = "none";
    $('.affmob img').css('border', 'none');
    document.getElementById('imageB1').style.border = '2px solid #347eff';
    document.getElementById('btn1').style.backgroundColor = '#347EFF';
    document.getElementById('btn1-b').style.backgroundColor = '#347EFF';
    document.getElementById('btn2').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn2-b').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn3').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn3-b').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn4').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn4-b').style.backgroundColor = '#B3B3B3';

    document.getElementById('crd2h1').style.color = '#347EFF';
    document.getElementById('crd2h2').style.color = '#000000';
    document.getElementById('crd2h3').style.color = '#000000';
    document.getElementById('crd2h4').style.color = '#000000';
}

function changeImage2() {
    document.getElementById('imageCov1').style.display = "none";
    document.getElementById('imageCov2').style.display = "block";
    document.getElementById('imageCov3').style.display = "none";
    document.getElementById('imageCov4').style.display = "none";
    $('.affmob img').css('border', 'none');
    document.getElementById('imageB2').style.border = '2px solid #347eff';
    document.getElementById('btn1').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn1-b').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn2').style.backgroundColor = '#347EFF';
    document.getElementById('btn2-b').style.backgroundColor = '#347EFF';
    document.getElementById('btn3').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn3-b').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn4').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn4-b').style.backgroundColor = '#B3B3B3';

    document.getElementById('crd2h2').style.color = '#347EFF';
    document.getElementById('crd2h1').style.color = '#000000';
    document.getElementById('crd2h3').style.color = '#000000';
    document.getElementById('crd2h4').style.color = '#000000';

}

function changeImage3() {
    document.getElementById('imageCov1').style.display = "none";
    document.getElementById('imageCov2').style.display = "none";
    document.getElementById('imageCov3').style.display = "block";
    document.getElementById('imageCov4').style.display = "none";
    $('.affmob img').css('border', 'none');
    document.getElementById('imageB3').style.border = '2px solid #347eff';
    document.getElementById('btn1').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn1-b').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn2').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn2-b').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn3').style.backgroundColor = '#347EFF';
    document.getElementById('btn3-b').style.backgroundColor = '#347EFF';
    document.getElementById('btn4').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn4-b').style.backgroundColor = '#B3B3B3';

    document.getElementById('crd2h3').style.color = '#347EFF';
    document.getElementById('crd2h2').style.color = '#000000';
    document.getElementById('crd2h1').style.color = '#000000';
    document.getElementById('crd2h4').style.color = '#000000';
}

function changeImage4() {
    document.getElementById('imageCov1').style.display = "none";
    document.getElementById('imageCov2').style.display = "none";
    document.getElementById('imageCov3').style.display = "none";
    document.getElementById('imageCov4').style.display = "block";
    $('.affmob img').css('border', 'none');
    document.getElementById('imageB4').style.border = '2px solid #347eff';
    document.getElementById('btn1').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn1-b').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn2').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn2-b').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn3').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn3-b').style.backgroundColor = '#B3B3B3';
    document.getElementById('btn4').style.backgroundColor = '#347EFF';
    document.getElementById('btn4-b').style.backgroundColor = '#347EFF';

    document.getElementById('crd2h4').style.color = '#347EFF';
    document.getElementById('crd2h2').style.color = '#000000';
    document.getElementById('crd2h3').style.color = '#000000';
    document.getElementById('crd2h1').style.color = '#000000';
}


//naziha
setInterval(updateClock, 1000);

function updateClock() {
    const tunisTimeZoneOffset = 60;

    const tunisTime = new Date();
    tunisTime.setMinutes(tunisTime.getMinutes() + tunisTimeZoneOffset);

    let hours = tunisTime.getHours();
    const minutes = tunisTime.getMinutes();
    const seconds = tunisTime.getSeconds();

    let amOrPm = hours >= 12 ? 'pm' : 'am';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'

    const timeString =
        `${(hours < 10 ? '0' : '') + hours}:${(minutes < 10 ? '0' : '') + minutes}:${(seconds < 10 ? '0' : '') + seconds} ${amOrPm}`;

    document.getElementById("tunis-time").textContent = timeString;

}


function changContai(indx) {

    var tit1 = document.getElementById('tit1');
    var tit11 = document.getElementById('tit11');
    var p1 = document.getElementById('txt1');
    var img1 = document.getElementById('img1Cnt');

    var tit2 = document.getElementById('tit2');
    var tit22 = document.getElementById('tit22');
    var p2 = document.getElementById('txt2');
    var img2 = document.getElementById('img2Cnt');

    var tit3 = document.getElementById('tit3');
    var tit33 = document.getElementById('tit33');
    var p3 = document.getElementById('txt3');
    var img3 = document.getElementById('img3Cnt');

    var tit4 = document.getElementById('tit4');
    var tit44 = document.getElementById('tit44');
    var p4 = document.getElementById('txt4');
    var img4 = document.getElementById('img4Cnt');

    if (indx == 1) {
        if (tit1.classList.contains('tit1inactv')) {
            tit1.classList.replace('tit1inactv', 'tit1actv');
        }
        if (tit11.classList.contains('tit2inactv')) {
            tit11.classList.replace('tit2inactv', 'tit2actv');
        }
        if (p1.classList.contains('txtinactv')) {
            p1.classList.replace('txtinactv', 'txtactv');
        }
        if (img1.classList.contains('imginactv')) {
            img1.classList.replace('imginactv', 'imgactv');
        }
        if (tit2.classList.contains('tit1actv')) {
            tit2.classList.replace('tit1actv', 'tit1inactv');
        }
        if (tit22.classList.contains('tit2actv')) {
            tit22.classList.replace('tit2actv', 'tit2inactv');
        }
        if (p2.classList.contains('txtactv')) {
            p2.classList.replace('txtactv', 'txtinactv');
        }
        if (img2.classList.contains('imgactv')) {
            img2.classList.replace('imgactv', 'imginactv');
        }
        if (tit3.classList.contains('tit1actv')) {
            tit3.classList.replace('tit1actv', 'tit1inactv');
        }
        if (tit33.classList.contains('tit2actv')) {
            tit33.classList.replace('tit2actv', 'tit2inactv');
        }
        if (p3.classList.contains('txtactv')) {
            p3.classList.replace('txtactv', 'txtinactv');
        }
        if (img3.classList.contains('imgactv')) {
            img3.classList.replace('imgactv', 'imginactv');
        }
        if (tit4.classList.contains('tit1actv')) {
            tit4.classList.replace('tit1actv', 'tit1inactv');
        }
        if (tit44.classList.contains('tit2actv')) {
            tit44.classList.replace('tit2actv', 'tit2inactv');
        }
        if (p4.classList.contains('txtactv')) {
            p4.classList.replace('txtactv', 'txtinactv');
        }
        if (img4.classList.contains('imgactv')) {
            img4.classList.replace('imgactv', 'imginactv');
        }
    } else if (indx == 2) {
        if (tit2.classList.contains('tit1inactv')) {
            tit2.classList.replace('tit1inactv', 'tit1actv');
        }
        if (tit22.classList.contains('tit2inactv')) {
            tit22.classList.replace('tit2inactv', 'tit2actv');
        }
        if (p2.classList.contains('txtinactv')) {
            p2.classList.replace('txtinactv', 'txtactv');
        }
        if (img2.classList.contains('imginactv')) {
            img2.classList.replace('imginactv', 'imgactv');
        }
        if (tit1.classList.contains('tit1actv')) {
            tit1.classList.replace('tit1actv', 'tit1inactv');
        }
        if (tit11.classList.contains('tit2actv')) {
            tit11.classList.replace('tit2actv', 'tit2inactv');
        }
        if (p1.classList.contains('txtactv')) {
            p1.classList.replace('txtactv', 'txtinactv');
        }

        if (img1.classList.contains('imgactv')) {
            img1.classList.replace('imgactv', 'imginactv');
        }
        if (tit3.classList.contains('tit1actv')) {
            tit3.classList.replace('tit1actv', 'tit1inactv');
        }
        if (tit33.classList.contains('tit2actv')) {
            tit33.classList.replace('tit2actv', 'tit2inactv');
        }
        if (p3.classList.contains('txtactv')) {
            p3.classList.replace('txtactv', 'txtinactv');
        }

        if (img3.classList.contains('imgactv')) {
            img3.classList.replace('imgactv', 'imginactv');
        }
        if (tit4.classList.contains('tit1actv')) {
            tit4.classList.replace('tit1actv', 'tit1inactv');
        }
        if (tit44.classList.contains('tit2actv')) {
            tit44.classList.replace('tit2actv', 'tit2inactv');
        }
        if (p4.classList.contains('txtactv')) {
            p4.classList.replace('txtactv', 'txtinactv');
        }

        if (img4.classList.contains('imgactv')) {
            img4.classList.replace('imgactv', 'imginactv');
        }
    } else if (indx == 3) {
        if (tit3.classList.contains('tit1inactv')) {
            tit3.classList.replace('tit1inactv', 'tit1actv');
        }
        if (tit33.classList.contains('tit2inactv')) {
            tit33.classList.replace('tit2inactv', 'tit2actv');
        }
        if (p3.classList.contains('txtinactv')) {
            p3.classList.replace('txtinactv', 'txtactv');
        }
        if (img3.classList.contains('imginactv')) {
            img3.classList.replace('imginactv', 'imgactv');
        }
        if (tit1.classList.contains('tit1actv')) {
            tit1.classList.replace('tit1actv', 'tit1inactv');
        }
        if (tit11.classList.contains('tit2actv')) {
            tit11.classList.replace('tit2actv', 'tit2inactv');
        }
        if (p1.classList.contains('txtactv')) {
            p1.classList.replace('txtactv', 'txtinactv');
        }

        if (img1.classList.contains('imgactv')) {
            img1.classList.replace('imgactv', 'imginactv');
        }
        if (tit2.classList.contains('tit1actv')) {
            tit2.classList.replace('tit1actv', 'tit1inactv');
        }
        if (tit22.classList.contains('tit2actv')) {
            tit22.classList.replace('tit2actv', 'tit2inactv');
        }
        if (p2.classList.contains('txtactv')) {
            p2.classList.replace('txtactv', 'txtinactv');
        }
        if (img2.classList.contains('imgactv')) {
            img2.classList.replace('imgactv', 'imginactv');
        }
        if (tit4.classList.contains('tit1actv')) {
            tit4.classList.replace('tit1actv', 'tit1inactv');
        }
        if (tit44.classList.contains('tit2actv')) {
            tit44.classList.replace('tit2actv', 'tit2inactv');
        }
        if (p4.classList.contains('txtactv')) {
            p4.classList.replace('txtactv', 'txtinactv');
        }
        if (img4.classList.contains('imgactv')) {
            img4.classList.replace('imgactv', 'imginactv');
        }
    } else {
        if (tit4.classList.contains('tit1inactv')) {
            tit4.classList.replace('tit1inactv', 'tit1actv');
        }
        if (tit44.classList.contains('tit2inactv')) {
            tit44.classList.replace('tit2inactv', 'tit2actv');
        }
        if (p4.classList.contains('txtinactv')) {
            p4.classList.replace('txtinactv', 'txtactv');
        }
        if (img4.classList.contains('imginactv')) {
            img4.classList.replace('imginactv', 'imgactv');
        }
        if (tit1.classList.contains('tit1actv')) {
            tit1.classList.replace('tit1actv', 'tit1inactv');
        }
        if (tit11.classList.contains('tit2actv')) {
            tit11.classList.replace('tit2actv', 'tit2inactv');
        }
        if (p1.classList.contains('txtactv')) {
            p1.classList.replace('txtactv', 'txtinactv');
        }
        if (img1.classList.contains('imgactv')) {
            img1.classList.replace('imgactv', 'imginactv');
        }
        if (tit2.classList.contains('tit1actv')) {
            tit2.classList.replace('tit1actv', 'tit1inactv');
        }
        if (tit22.classList.contains('tit2actv')) {
            tit22.classList.replace('tit2actv', 'tit2inactv');
        }
        if (p2.classList.contains('txtactv')) {
            p2.classList.replace('txtactv', 'txtinactv');
        }
        if (img2.classList.contains('imgactv')) {
            img2.classList.replace('imgactv', 'imginactv');
        }
        if (tit3.classList.contains('tit1actv')) {
            tit3.classList.replace('tit1actv', 'tit1inactv');
        }
        if (tit33.classList.contains('tit2actv')) {
            tit33.classList.replace('tit2actv', 'tit2inactv');
        }
        if (p3.classList.contains('txtactv')) {
            p3.classList.replace('txtactv', 'txtinactv');
        }
        if (img3.classList.contains('imgactv')) {
            img3.classList.replace('imgactv', 'imginactv');
        }
    }
}
