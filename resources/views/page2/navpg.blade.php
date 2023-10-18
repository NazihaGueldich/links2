<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" >
    <div class="container justify-content-between">
        <div id="myTopnav">
            <img id="logimg" src="{{ asset('images/logo2.png') }}">
            <img id="logtitre" src="{{ asset('images/logtitre.png') }}">
        </div>

        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav" >

                <li class="nav-item active d-flex align-items-center">
                    <img src="{{ asset('images/Flag_of_Tunisia.svg') }}" class="mr-1" id='crcltuns'>
                    <span class="nav-link" href="#" id="tunis-time"></span>
                </li>
                <li class="nav-item active d-flex align-items-center txtnav">
                    <a class="nav-link" href="#">튀니지에 대해서</a>
                </li>
                <li class="nav-item active d-flex align-items-center mr-4 txtnav">
                    <a class="nav-link" href="#">보다 더 ></a>
                </li>

                <li class="d-flex">
                    <button type="button" class="btn btn-outline-primary  btn-main mr-2">문의하기</button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container cnt">
