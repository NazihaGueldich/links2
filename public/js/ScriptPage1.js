function changeImage(isMouseOver, id) {
    if (id == 0) {
        var img = document.getElementById('logimg');
        var logtitre = document.getElementById('logtitre');
        if (isMouseOver) {
            img.src = "../images/icn_tns.png";
            logtitre.style.display = 'block';
        } else {
            img.src = "../images/LogoProk.png";
            logtitre.style.display = 'none';
        }
    } else {
        var imgId = 'img' + id;
        var pId = 'p' + id;
        var img = document.getElementById(imgId);
        var p = document.getElementById(pId);
        var src;
        if (isMouseOver) {
            src = "../images/atlantis_button" + "_" + id + "_state_1.svg";
            p.style.fontWeight = 'bolder';
        } else {
            src = "../images/atlantis_button" + "_" + id + "_state_0.svg";
            p.style.fontWeight = '';
        }
        img.src = src;
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
}

document.addEventListener("DOMContentLoaded", function() {
    const listItems = document.querySelectorAll(".show-paragraph");

    listItems.forEach(function(item) {
        item.addEventListener("click", function(e) {
            e.preventDefault();
            const paragraphId = this.getAttribute("data-paragraph");
            const paragraphs = document.querySelectorAll("p");

            paragraphs.forEach(function(paragraph) {
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
