@include('layouts.front.head')

<body id="partners">
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
        <section id='partners-cont'>
            <div class="p-lg-5 row">
                <div class="col-lg-6 paragraphe">
                    <h2 class="main-title ">We work with the best partners</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus
                        libero accumsan. dalar elementum tempus hac tellus libero accumsan. </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus
                        libero accumsan. dalar elementum tempus hac tellus libero accumsan. </p>
                    <div class="btn">
                        <button class="btn">Play Video <img
                                src="{{ asset('images/Arrow Right white.png') }}"></button>
                    </div>
                </div>
                <div class="col-lg-6 imgs">
                    <img id="img1" src="{{ asset('images/casa-de-una planta-vector.png') }}" alt="Casa de una planta vector">
                    <div class="pt-lg-3" id='img2'>
                        <img class="img2" src="{{ asset('images/JSM.png') }}" alt="JSM">
                        <img class="img2" src="{{ asset('images/wonderful-tours-laos.png') }}" alt="Wonderful tours laos">
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('layouts.front.footer')
