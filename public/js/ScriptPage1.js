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
            const paragraphs = document.querySelectorAll("p");

            paragraphs.forEach(function (paragraph) {
                if (paragraph.id === paragraphId) {
                    paragraph.style.display = "block";
                } else {
                    paragraph.style.display = "none";
                }
            });

            const liElements = document.querySelectorAll('.card ul li');
            liElements.forEach(li => {
                const dataParagraph = li.querySelector('a').getAttribute(
                    'data-paragraph');

                const h5Elements = li.querySelectorAll('h5');

                if (dataParagraph == item.getAttribute("data-paragraph")) {
                    h5Elements[0].style.fontSize = "57px";
                    h5Elements[0].style.color = "#347EFF";
                    h5Elements[1].style.fontSize = "31px";
                    h5Elements[1].style.color = "black";
                } else {
                    h5Elements[0].style.fontSize = "42px";
                    h5Elements[0].style.color = "#B3B3B3";
                    h5Elements[1].style.fontSize = "31px";
                    h5Elements[1].style.color = "#D9D9D9";
                }
            });
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
