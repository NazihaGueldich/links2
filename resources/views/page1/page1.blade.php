@include('page1.javascript')
@include('page1.script')
@include('page1.stye')
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div id="myTopnav">
        <a href="#home" class="active" style="display: flex; align-items: center;" onmouseover="changeImage(true, 0)"
            onmouseout="changeImage(false, 0)">
            <img id="logimg" style="display: block; margin-right: 10px; object-fit: cover;"
                src="{{ asset('images/LogoProk.png') }}">
            <img id="logtitre" style="display: none; object-fit: cover;" src="{{ asset('images/logtitre.png') }}">
        </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav ">
            <li class="nav-item d-flex align-items-center">
                <img src="{{ asset('images/Flag_of_Tunisia.svg') }}" style="width: 28px; object-fit: cover;"
                    class="mr-2">
            </li>
            <li class="nav-item active ">
                <a class="nav-link" href="#">4:09:27 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">튀니지에</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">보다 더</a>
            </li>
            <li class="nav-item d-flex align-items-center">


                <input class="btn btn-outline-primary form-control text-blue-placeholder" type="text"
                    placeholder="문의하기" style="width: 100px;">
                <div class="input-group-append ml-2">
                    <button class="btn btn-outline-primary" type="button" style="height:35px;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>



            </li>




        </ul>

    </div>



</nav>

<div class="image-slideshow">
    <div class="slideshow-image active">
        <img src="{{ asset('images/sergey-pesterev-_VqyrvQi6do-unsplash.jpg') }}" alt="Image 1">
    </div>
    <div class="slideshow-image">
        <img src="{{ asset('images/image (2).png') }}" alt="Image 2">
    </div>
    <div class="slideshow-image">
        <img src="{{ asset('images/MicrosoftTeams-image (3).png') }}" alt="Image 3">
    </div>
    <!-- Cercles de navigation -->
    <div class="image-circles">
        <span class="circle active"></span>
        <span class="circle"></span>
        <span class="circle"></span>
    </div>
</div>




</body>

</html>
