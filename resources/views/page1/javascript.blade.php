<script>
    function changeImage(isMouseOver, id) {
    if (id == 0) {
        var img = document.getElementById('logimg');
        var logtitre = document.getElementById('logtitre');
        if (isMouseOver) {
            img.src = "{{ asset('images/logo2.png') }}";
            logtitre.style.display = 'block';
        } else {
            img.src = "{{ asset('images/LogoProk.png') }}";
            logtitre.style.display = 'none';
        }
    } else {
        var imgId = 'img' + id;
        var pId = 'p' + id;
        var img = document.getElementById(imgId);
        var p = document.getElementById(pId);
        var src;
        if (isMouseOver) {
            src = "{{ asset('images/atlantis_button') }}" + "_" + id + "_state_1.svg";
            p.style.fontWeight = 'bolder';
        } else {
            src = "{{ asset('images/atlantis_button') }}" + "_" + id + "_state_0.svg";
            p.style.fontWeight = '';
        }
        img.src = src;
    }

}
document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".slideshow-image");
    const circles = document.querySelectorAll(".circle");
    let currentIndex = 0;

    // Afficher la première image
    images[currentIndex].style.display = "block";
    circles[currentIndex].classList.add("active");

    // Fonction pour passer à l'image suivante
    function nextImage() {
        images[currentIndex].style.display = "none";
        circles[currentIndex].classList.remove("active");
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].style.display = "block";
        circles[currentIndex].classList.add("active");
    }

    // Définir un intervalle pour passer automatiquement à l'image suivante
    setInterval(nextImage, 5000); // Change l'image toutes les 5 secondes (5000 millisecondes)

    // Gérer le clic sur les cercles de navigation
    circles.forEach((circle, index) => {
        circle.addEventListener("click", function () {
            images[currentIndex].style.display = "none";
            circles[currentIndex].classList.remove("active");
            currentIndex = index;
            images[currentIndex].style.display = "block";
            circles[currentIndex].classList.add("active");
        });
    });
});

</script>
