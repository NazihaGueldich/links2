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
    img2 = 0,img3=0,img4=0,img5=0;
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
            if (img2 == 0 ) {
                crd.style.backgroundImage = "url('../images/abweb.png')";
                img2 = 1;
                p.style.display='none';
            } else {
                crd.style.backgroundImage = "url('../images/Rectangle (2).png')";
                img2 = 0;
                p.style.display='block';
            }
        }else if (crd == 3) {
            crd = document.getElementById('image-3');
            if (img3 == 0 ) {
                crd.style.backgroundImage = "url('../images/Asset 6@2x 1.png')";
                img3 = 1;
                p.style.display='block';
            } else {
                crd.style.backgroundImage = "url('../images/ejja.png')";
                img3 = 0;
                p.style.display='none';
            }
        }else if (crd == 4) {
            crd = document.getElementById('image-4');
            if (img4 == 0 ) {
                crd.style.backgroundImage = "url('../images/tiniseeee.jpg')";
                img4 = 1;
                p.style.display='block';
            } else {
                crd.style.backgroundImage = "url('../images/kant.png')";
                img4 = 0;
                p.style.display='none';
            }
        }else if (crd == 5) {
            crd = document.getElementById('image-5');
            if (img5 == 0 ) {
                crd.style.backgroundImage = "url('../images/Asset 5@2x 1.png')";
                img5 = 1;
                p.style.display='block';
            } else {
                crd.style.backgroundImage = "url('../images/Asset 3@4x 1.png')";
                img5 = 0;
                p.style.display='none';
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
    document.getElementById('imageB1').style.filter = 'none';
    document.getElementById('imageB2').style.filter = 'grayscale(100%)';
    document.getElementById('imageB3').style.filter = 'grayscale(100%)';
    document.getElementById('imageB4').style.filter = 'grayscale(100%)';
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
    document.getElementById('imageB2').style.filter = 'none';
    document.getElementById('imageB1').style.filter = 'grayscale(100%)';
    document.getElementById('imageB3').style.filter = 'grayscale(100%)';
    document.getElementById('imageB4').style.filter = 'grayscale(100%)';
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
    document.getElementById('imageB3').style.filter = 'none';
    document.getElementById('imageB2').style.filter = 'grayscale(100%)';
    document.getElementById('imageB1').style.filter = 'grayscale(100%)';
    document.getElementById('imageB4').style.filter = 'grayscale(100%)';
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
    document.getElementById('imageB4').style.filter = 'none';
    document.getElementById('imageB2').style.filter = 'grayscale(100%)';
    document.getElementById('imageB3').style.filter = 'grayscale(100%)';
    document.getElementById('imageB1').style.filter = 'grayscale(100%)';
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

document.addEventListener("DOMContentLoaded", function () {
    const listItems = document.querySelectorAll(".show-paragraph");

    listItems.forEach(function (item) {
        item.addEventListener("click", function (e) {
            e.preventDefault();
            const paragraphId = this.getAttribute("data-paragraph");

            const ahla1 = document.getElementById('ahla1');
            const ahla12 = document.getElementById('ahla12');
            const ahla13 = document.getElementById('ahla13');
            const ahla14 = document.getElementById('ahla14');

            if (paragraphId === 'ahla1') {
                ahla1.style.display = "block";
                ahla12.style.display = "none";
                ahla13.style.display = "none";
                ahla14.style.display = "none";
            } else if (paragraphId === 'ahla12') {
                ahla1.style.display = "none";
                ahla12.style.display = "block";
                ahla13.style.display = "none";
                ahla14.style.display = "none";
            } else if (paragraphId === 'ahla13') {
                ahla1.style.display = "none";
                ahla12.style.display = "none";
                ahla13.style.display = "block";
                ahla14.style.display = "none";
            } else if (paragraphId === 'ahla14') {
                ahla1.style.display = "none";
                ahla12.style.display = "none";
                ahla13.style.display = "none";
                ahla14.style.display = "block";
            }

            const tit1 = document.getElementById('tit1');
            const tit2 = document.getElementById('tit2');
            const tit3 = document.getElementById('tit3');
            const tit4 = document.getElementById('tit4');

            const tit11 = document.getElementById('tit11');
            const tit22 = document.getElementById('tit22');
            const tit33 = document.getElementById('tit33');
            const tit44 = document.getElementById('tit44');

            if (paragraphId === 'ahla1') {
                tit1.style.fontSize = "57px";
                tit1.style.color = "#347EFF";
                tit2.style.fontSize = "42px";
                tit2.style.color = "#B3B3B3";
                tit3.style.fontSize = "42px";
                tit3.style.color = "#B3B3B3";
                tit4.style.fontSize = "42px";
                tit4.style.color = "#B3B3B3";

                tit11.style.fontSize = "31px";
                tit11.style.color = "black";
                tit22.style.fontSize = "31px";
                tit22.style.color = "#D9D9D9";
                tit33.style.fontSize = "31px";
                tit33.style.color = "#D9D9D9";
                tit44.style.fontSize = "31px";
                tit44.style.color = "#D9D9D9";
            } else if (paragraphId === 'ahla12') {
                tit1.style.fontSize = "42px";
                tit1.style.color = "#B3B3B3";
                tit2.style.fontSize = "57px";
                tit2.style.color = "#347EFF";
                tit3.style.fontSize = "42px";
                tit3.style.color = "#B3B3B3";
                tit4.style.fontSize = "42px";
                tit4.style.color = "#B3B3B3";

                tit11.style.fontSize = "31px";
                tit11.style.color = "#D9D9D9";
                tit22.style.fontSize = "31px";
                tit22.style.color = "black";
                tit33.style.fontSize = "31px";
                tit33.style.color = "#D9D9D9";
                tit44.style.fontSize = "31px";
                tit44.style.color = "#D9D9D9";
            } else if (paragraphId === 'ahla13') {
                tit1.style.fontSize = "42px";
                tit1.style.color = "#B3B3B3";
                tit2.style.fontSize = "42px";
                tit2.style.color = "#B3B3B3";
                tit3.style.fontSize = "57px";
                tit3.style.color = "#347EFF";
                tit4.style.fontSize = "42px";
                tit4.style.color = "#B3B3B3";

                tit11.style.fontSize = "31px";
                tit11.style.color = "#D9D9D9";
                tit22.style.fontSize = "31px";
                tit22.style.color = "#D9D9D9";
                tit33.style.fontSize = "31px";
                tit33.style.color = "black";
                tit44.style.fontSize = "31px";
                tit44.style.color = "#D9D9D9";
            } else if (paragraphId === 'ahla14') {
                tit1.style.fontSize = "42px";
                tit1.style.color = "#B3B3B3";
                tit2.style.fontSize = "42px";
                tit2.style.color = "#B3B3B3";
                tit3.style.fontSize = "42px";
                tit3.style.color = "#B3B3B3";
                tit4.style.fontSize = "57px";
                tit4.style.color = "#347EFF";

                tit11.style.fontSize = "31px";
                tit11.style.color = "#D9D9D9";
                tit22.style.fontSize = "31px";
                tit22.style.color = "#D9D9D9";
                tit33.style.fontSize = "31px";
                tit33.style.color = "#D9D9D9";
                tit44.style.fontSize = "31px";
                tit44.style.color = "black";
            }
        });
    });
});



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
