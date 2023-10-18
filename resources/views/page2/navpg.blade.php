<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container justify-content-between">
            <div id="myTopnav">
                <img id="logimg" src="{{ asset('images/LogoProk.png') }}">
            </div>

            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav" style="height:33px">

                    <li class="nav-item active d-flex align-items-center">
                        <img src="{{ asset('images/Flag_of_Tunisia.svg') }}" style="width: 24px; object-fit: cover;" class="mr-1">
                        <a class="nav-link" href="#">4:09:27 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active d-flex align-items-center">
                        <a class="nav-link" href="#">튀니지에</a>
                    </li>
                    <li class="nav-item active d-flex align-items-center mr-4">
                        <a class="nav-link" href="#">보다 더</a>
                    </li>

                    <li>
                        <button type="button" class="btn btn-outline-primary  btn-main mr-2">문의하기</button>

                        <button type="button" class="btn btn-outline-primary input-search" style="border-radius:8px">
                            <i class="icon-search">
                                <img src="{{asset('images/search.svg')}}">
                            </i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container" style="margin-top: 170px;">