@include('layouts.front.head')

<body id="blog-page">
    @include('layouts.front.header')
    <div class="container mt-5">
        {{-- icons --}}
        <div class="flex-container pt-5 sessicn">
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
        <section id='section1'>
            <h2 class="main-title text-center">Hear from the Korean Ambassador in Tunisia</h2>
            <img src="{{ asset('images/Play.png') }}" class="w-100">
        </section>
    </div>
    {{-- section 2 --}}
    <div class="sec2-col">
        <section id='section2' class="container">
            <div>
                <p class="mt-4">꿈에 그리던 튀니지 여행을 맞춤화하려면 저희에게 연락하세요.</p>
                <p class="sub-title sub-title2-3">아틀란티스가 함께합니다.</p>
            </div>
            <div class="button-sub">
            <button type="button"
                class="btn btn-outline-primary d-flex align-items-center btnsect2 radius-20 pr-lg-4 pl-lg-4">
                <img src="{{ asset('images/enveloppe.png') }}" alt="Enveloppe">문의하기</button>
            </div>
        </section>
    </div>
    <div class="container">
        {{-- section 3 --}}
        <section id='section3'>
            <div class="items" id="items">
                <button id='itm0' class="item-actv" onclick="changSection6(0)">Popular</button>
                <button id='itm1' class="item-inactv" onclick="changSection6(1)">News</button>
                <button id='itm2' class="item-inactv" onclick="changSection6(2)">Travel Tips</button>
                <button id='itm3' class="item-inactv" onclick="changSection6(3)">Food</button>
                <button id='itm4' class="item-inactv" onclick="changSection6(4)">Life Style</button>
                <button id='itm5' class="item-inactv" onclick="changSection6(5)">Art</button>
                <button id='itm6' class="item-inactv" onclick="changSection6(6)">Knowledge</button>
            </div>
        </section>
        {{-- section 4 --}}
        <section id='section4'>
            <h2 class="main-title text-center">Videos from Creators Talking about Tunisia</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div id='crd1'>
                        <p class="sub-title">Discover Tunisia</p>
                        <button class="btn">Play Video <img
                            src="{{ asset('images/Arrow Right Blue.png') }}"></button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id='crd2'>
                        <p class="sub-title">Korean Content Creator Visits Tunisia</p>
                        <button class="btn">Play Video <img
                            src="{{ asset('images/Arrow Right white.png') }}"></button>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('layouts.front.footer')
