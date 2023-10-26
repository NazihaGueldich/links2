@include('atlantis.header')


<body id="index" class="tunisiatrip">
    {{-- nav bar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="padding: 0 !important;height: 60px;">
        <div class="container justify-content-between">
            <div id="myTopnav">
                <img id="logimg" src="{{ asset('images/LogoProk.png') }}">
                <img id="logtitre" src="{{ asset('images/logtitre.png') }}">
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
                        <a class="nav-link" href="/about" id="tun-time">튀니지에 대해서</a>
                    </li>
                    <li class="nav-item active d-flex align-items-center  txtnav">
                        <a class="nav-link" href="#" id="tun-time">보다 더 ></a>
                    </li>
                    <li class=" nav-item d-flex" id="tun-time">
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
    <div class="container mt-5">
        {{-- icons --}}
        <div class="flex-container pt-5">
            <div class="icns" onmouseenter="changeImage(true,1)" onmouseleave="changeImage(false,1)">
                <img id='img1' src="{{ asset('images/Icon_1_Second_Animation.gif') }}" class="imgicns">
                <p id="p1" class="txticns">호텔</p>
            </div>

            <div class=" ligne1 m-4 lg">|</div>
            <div class="icns" onmouseenter="changeImage(true,2)" onmouseleave="changeImage(false,2)"><img
                    id='img2' src="{{ asset('images/Icon_2_Second_Animation.gif') }}" class="imgicns">
                <p id="p2" class="txticns">항공편</p>
            </div>
            <div class="ligne1 m-4 lg">|</div>
            <div class="icns" onmouseenter="changeImage(true,3)" onmouseleave="changeImage(false,3)"><img
                    id='img3' src="{{ asset('images/Icon_3_Second_Animation.gif') }}" class="imgicns">
                <p id="p3" class="txticns">축제</p>
            </div>
            <div class="ligne1 m-4 lg">|</div>
            <div class="icns" onmouseenter="changeImage(true,4)" onmouseleave="changeImage(false,4)"><img
                    id='img4' src="{{ asset('images/Icon_4_Second_Animation.gif') }}" class="imgicns">
                <p id="p4" class="txticns">활동</p>
            </div>
            <div class="ligne1 m-4 lg">|</div>
            <div class="icns" onmouseenter="changeImage(true,5)" onmouseleave="changeImage(false,5)"><img
                    id='img5' src="{{ asset('images/Icon_5_Second_Animation.gif') }}" class="imgicns">
                <p id="p5" class="txticns">자동차 서비스</p>
            </div>
            <div class="ligne1 m-4 lg">|</div>
            <div class="icns" onmouseenter="changeImage(true,6)" onmouseleave="changeImage(false,6)"><img
                    id='img6' src="{{ asset('images/Icon_6_Second_Animation.gif') }}" class="imgicns">
                <p id="p6" class="txticns">크루즈</p>
            </div>
            <div class="ligne1 m-4 lg">|</div>
            <div class="icns" onmouseenter="changeImage(true,7)" onmouseleave="changeImage(false,7)"><img
                    id='img7' src="{{ asset('images/Icon_7_Second_Animation.gif') }}" class="imgicns">
                <p id="p7" class="txticns">박물관</p>
            </div>
        </div>
        {{-- section 1 --}}
        <section id="section-1 mt-5">
            <div class="text-center pt-5">
                <h2 class="main-title">ATLANTIS : Who are we?</h2>
            </div>
            <div class="card card-session1 radius-20 mt-lg-5">
                <div class="card-body p-lg-5 row">
                    <div class="col-lg-6 pt-lg-5 h-100 pr-lg-5">
                        <p class="mb-lg-4">
                            아틀란티스 여행사는 1991년에 시작하여,
                            현재 한국을 포함해 아시아 및 유럽 각지의 여행사들과
                            협력하여 일하고 있습니다.</p>

                        <p class="mb-lg-4">2006년부터는 전 세계 150여 개국의 글로벌 네트워크를 보유한 글로벌 No.1 비즈니스 트래블 매니지먼트 기업인
                            칼슨 와곤릿 트래블(CWT) 튀니지 지사를 담당하고
                            있기도 합니다.</p>

                        <p class="mb-lg-4">기업의 출장 규정에 적합한 트래블 컨설팅을 통해
                            효율적인 프로그램을 제안하고 있어요.
                            매년 아틀란티스를 통해 튀니지를 찾는 관광객은
                            늘어나고 있습니다.</p>

                        <p class="mb-lg-4"> 명실상부 튀니지를 대표하는 여행사인 아틀란티스와
                            튀니지 곳곳을 탐험해 보시는 건 어떨까요?</p>
                    </div>
                    <div class="col-lg-6 h-100">
                        <img src="{{ asset('images/at_sect1.png') }}" class="h-100 w-100">
                    </div>
                </div>
            </div>
        </section>

        <div class="ligne-separtion"></div>

        {{-- section 2 --}}
        <section id="section-2 mt-5">
            <div class="text-center pt-5">
                <h2 class="main-title">A Message From our CEO</h2>
            </div>
            <div class="card card-session2 radius-20 mt-lg-5">
                <div class="card-body  row">
                    <div class="col-lg-6 sect2-prt1">
                        <img src="{{ asset('images/at-sess2-img2.png') }}">
                    </div>
                    <div class="col-lg-6 h-100 py-3 sect2-prt2 pl-lg-5">
                        <h2 class="sub-title">"튀니지로 여러분을 초대합니다"</h2>
                        <p>반갑습니다,</p>
                        <p>튀니지 아틀란티스 여행사 대표 카멜 라가입니다.</p>
                        <p>유구한 역사와 친절한 사람들로 유명한 튀니지로 여러분을 초대합니다.</p>
                        <p>튀니지는 프랑스 및 이탈리아에 인접하여,
                            아프리카와 유럽을 이어주는 다리 역할을 하고 있습니다.</p>
                        <p>아틀란티스는 진실한 마음과 오랜 경험을 토대로
                            튀니지의 아름다운 자연환경과 깊은 역사, 역동적인 현재를 넘나드는
                            최고의 여행을 안내해 드립니다.</p>
                        <p>곧 아름다운 튀니지에서 여러분을 만날 수 있기를 기대합니다.</p>
                        <h5 class="sub-sub-title">카멜 라가,</h5>
                        <p>아틀란티스 여행사 대표</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="ligne-separtion"></div>

    </div>
</body>
