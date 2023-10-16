@include('page1.javascript')
@include('page1.script')
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
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item d-flex align-items-center">
                <img src="{{ asset('images/Flag_of_Tunisia.svg') }}" style="width: 28px; object-fit: cover;" class="mr-2">
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">4:09:27 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">튀니지에</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">보다 더</a>
            </li>
            <li class="nav-item d-flex align-items-center">
                <input type="text" class="form-control flex-fill  w-80" placeholder="문의하기">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary w-100" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </li>




        </ul>

    </div>



</nav>

</body>

</html>
