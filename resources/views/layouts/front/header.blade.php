<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="padding: 0 !important;height: 60px;">
    <div class="container justify-content-between">
        <div id="myTopnav">
            <a href="/">
                <img id="logimg" src="{{ asset('images/LogoProk.svg') }}">

            </a>
        </div>

        <button class="navbar-toggler ml-auto" type="button" id="toggleButton" aria-label="Toggle navigation"
            onclick="toggleNavbarBackground()">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav" style="height:33px">
                <li class="nav-item active d-flex align-items-center li1" id="tun-time">
                    <img src="{{ asset('images/Flag_of_Tunisia.svg') }}" class="mr-1" id='crcltuns'>
                    <span class="nav-link" href="#" id="tunis-time"></span>
                </li>
                <li class="nav-item active d-flex align-items-center txtnav">
                    <a class="nav-link" href="/"> 홈</a>
                </li>
                <li class="nav-item active d-flex align-items-center txtnav">
                    <a class="nav-link" href="/about-tunisia">튀니지</a>
                </li>
                <li class="nav-item active d-flex align-items-center txtnav">
                    <a class="nav-link" href="/about-atlantis">아틀란티스</a>
                </li>
                <li class="nav-item active d-flex align-items-center txtnav">
                    <a class="nav-link" href="/travel-information">여행정보</a>
                </li>
                <li class="nav-item active d-flex align-items-center  txtnav">
                    <div class="dropdown">
                        <button class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            보다 더
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/sub-page">추천일정</a>
                            <a class="dropdown-item" href="/blog-page">뉴스레터</a>
                            <a class="dropdown-item" href="/partners">파트너</a>                           
                        </div>
                    </div>
                </li>
                <li class=" nav-item mr-0 d-flex" id="tun-time">
                    <button type="button" class="btn btn-outline-primary  btn-main mr-2">문의하기</button>
                    <div class="position-relative">
                        <input type="text" class="input-search" style="border-radius:8px">
                        <i class="icon-search">
                            <img src="{{ asset('images/search.svg') }}">
                        </i>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>
