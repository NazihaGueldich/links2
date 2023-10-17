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
