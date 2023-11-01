@include('page1.script')

<body id="index" class="tunisiatrip">
@include('layouts.front.header')

    <main>
        <div id="mySlickCarousel">
            <div class="slick-slider">
                <div class="slick-slide">
                    <img src="{{ asset('images/1.png') }}" class="img1">
                    <div class="overlay-content">
                        <div class="text-center">
                            <span class="text1">사하라 사막의 시작</span>
                            <button type="button"
                                class="btn btn-outline-primary btn1-main d-flex align-items-center justify-content-center">더보기</button>
                        </div>
                    </div>
                </div>
                <div class="slick-slide">
                    <img src="{{ asset('images/2.png') }}" class="img1">
                    <div class="overlay-content">
                        <div class="text-center">
                            <span class="text1">살아 숨쉬는 고대 역사</span>
                            <button type="button"
                                class="btn btn-outline-primary btn1-main d-flex align-items-center justify-content-center">더보기</button>
                        </div>
                    </div>
                </div>
                <div class="slick-slide">
                    <img src="{{ asset('images/3.png') }}" class="img1">
                    <div class="overlay-content">
                        <div class="text-center">
                            <span class="text1">스타워즈의 발자취를 찾아</span>
                            <button type="button"
                                class="btn btn-outline-primary btn1-main d-flex align-items-center justify-content-center">더보기</button>
                        </div>
                    </div>
                </div>
                <div class="slick-slide">
                    <img src="{{ asset('images/MicrosoftTeams-image (3).png') }}" class="img1">
                    <div class="overlay-content">
                        <div class="text-center">
                            <span class="text1">파란 하늘, 푸른 바다</span>
                            <button type="button"
                                class="btn btn-outline-primary btn1-main d-flex align-items-center justify-content-center">더보기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <div class="container mt-5 icons-none">
        <div class="flex-container pt-1">
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
    </div>





    <section id="section-2">
        <div class="container mt-5">
            <div class="row reverse">
                {{-- image 1 --}}
                <div class="col-6 r-image1">
                    <div class="image-1 box-shadox" onclick="handleClick(1)" id="image-1">
                        <div class="ml-4">
                            <div class="d-flex flex-column align-items-start">
                                <button class="btn btn-outline-primary mt-4 r-btn1 mr-6">고고학 유적지</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- bloc 1 --}}
                <div class="col-6 d-flex flex-column justify-content-between">
                    <div class="d-flex gap-30">
                        <div class="w-50">
                            <div class="image-2 links_box-shadox" onclick="handleClick(2)" id="image-2">
                                <div class="text-sm inner-wrap-block-image">

                                    <button type="button" class="btn btn-outline-primary mt-4 r-btn2">
                                        메디나 역사지구

                                    </button>
                                    <p class="p-2 parag-img" id='crdp2'>메디나 전통시장에서 역사적 정취를 느끼고,튀니지의 문화를 체험해보세요. 이
                                        곳에서
                                        기념품도 구매할 수 있어요.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-50">
                            <div class="image-3 links_box-shadox" onclick="handleClick(3)" id="image-3">
                                <div
                                    class="align-items-center d-flex flex-column justify-content-between inner-wrap-block-image">
                                    <button type="button" class="btn btn-outline-primary  mt-4 r-btn3">튀니지 미식 체험</button>
                                    <p class="p-2 parag-img" id='crdp3'>튀니지 음식은 동서양 요리 양식이 혼합된 형태예요. 역사적으로 고대
                                        페니키아,
                                        로마, 오스만제국을 거쳐 프랑스의
                                        영향도 많이 받았어요. 올리브 오일, 향신료, 토마토, 해산물, 닭고기나 양고기를 기반으로 한 요리가 많아요.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex gap-30">
                        <div class="w-50">
                            <div class="image-4 links_box-shadox" onclick="handleClick(4)" id="image-4">
                                <div
                                    class="align-items-center d-flex flex-column justify-content-between inner-wrap-block-image">
                                    <button type="button" class="btn btn-outline-primary  mt-4 r-btn4">인기 목적지</button>
                                    <p class="p-2 parag-img" id='crdp4'>시디부사이드, 엘젬, 두가, 수스 등 매력이 각기 다른 인기 목적지가
                                        있어요.
                                        과거와 현대가 공존하고 유럽과
                                        아프리카, 아랍의 다양한 색깔이 함께하는 튀니지의 여러 도시들을 방문해보세요.</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-50">
                            <div class="image-5 links_box-shadox" onclick="handleClick(5)" id="image-5">
                                <div
                                    class="align-items-center d-flex flex-column justify-content-between inner-wrap-block-image">
                                    <button type="button" class="btn btn-outline-primary  mt-4 r-btn5">즐길거리</button>
                                    <p class="p-2 parag-img" id='crdp5'>사하라사막에서의 낙타 타기 체험, 지중해 바다에서의 서핑 등 다양한
                                        액티비티를 즐길
                                        수 있어요.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row slick-slide1">
                <div class="col-md-4 my-4">
                    <div class="image-1 box-shadox" onclick="handleClick(1)" id="image-1">
                        <div class="d-flex flex-column align-items-center">
                            <button class="btn btn-outline-primary mt-4 r-btn1 mr-6">고고학 유적지</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 my-2">
                    <div class="image-4 links_box-shadox" onclick="handleClick(4)" id="image-4">
                        <div
                            class="align-items-center d-flex flex-column justify-content-between inner-wrap-block-image">
                            <button type="button" class="btn btn-outline-primary  mt-4 r-btn4">즐길거리</button>
                            <p class="p-2 parag-img" id='crdp4'>시디부사이드, 엘젬, 두가, 수스 등 매력이 각기 다른 인기 목적지가 있어요.
                                과거와 현대가 공존하고 유럽과
                                아프리카, 아랍의 다양한 색깔이 함께하는 튀니지의 여러 도시들을 방문해보세요.</p>
                        </div>
                    </div>
                    <div class="image-5 links_box-shadox" onclick="handleClick(5)" id="image-5">
                        <div
                            class="align-items-center d-flex flex-column justify-content-between inner-wrap-block-image">
                            <button type="button" class="btn btn-outline-primary  mt-4 r-btn5">인기 목적지</button>
                            <p class="p-2 parag-img" id='crdp5'>사하라사막에서의 낙타 타기 체험, 지중해 바다에서의 서핑 등 다양한 액티비티를 즐길
                                수 있어요.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 my-2">

                    <div class="image-3 links_box-shadox" onclick="handleClick(3)" id="image-3">
                        <div
                            class="align-items-center d-flex flex-column justify-content-between inner-wrap-block-image">
                            <button type="button" class="btn btn-outline-primary  mt-4 r-btn3">메디나 역사지구</button>
                            <p class="p-2 parag-img" id='crdp3'>튀니지 음식은 동서양 요리 양식이 혼합된 형태예요. 역사적으로 고대 페니키아,
                                로마, 오스만제국을 거쳐 프랑스의
                                영향도 많이 받았어요. 올리브 오일, 향신료, 토마토, 해산물, 닭고기나 양고기를 기반으로 한 요리가 많아요.</p>
                        </div>
                    </div>
                    <div class="image-2 links_box-shadox" onclick="handleClick(2)" id="image-2">
                        <div class="text-sm inner-wrap-block-image">
                            <button type="button" class="btn btn-outline-primary mt-4 r-btn2">
                                튀니지 미식 체험
                            </button>
                            <p class="p-2 parag-img" id='crdp2'>메디나 전통시장에서 역사적 정취를 느끼고,튀니지의 문화를 체험해보세요. 이 곳에서
                                기념품도 구매할 수 있어요.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{--    <div class="lignes"></div> --}}

    <section id="section-3" class="background-section">
        <div class="container sess3mobvid text-center">
            <div class="text2">
                <h2 class="main-title">홍보 영상</h2>
                <div class="ligne-separtion"></div>
                <p>튀니지의 매력을 영상으로 확인해보세요.사하라 사막부터 역사가 살아숨쉬는 도시까지.북아프리카의 보석 튀니지의 풍부한 문화가 당신을 기다립니다.</p>
            </div>
            <div class="wrap-video">
                <video id="my-video" class="video-js" controls preload="auto" poster="images/sahrouch.png">
                    <source src="images/vd.mp4" type="video/mp4" />
                </video>
            </div>


        </div>

    </section>

    {{--    <div class="lignes"></div> --}}

    <section id="section-4">
        <div class="container sess3">
            <h2 class="main-title">튀니지 주요 도시</h2>
            <div class="container esapce">
                <div style="background-image: url('{{ asset('images/MicrosoftTeams-image (3).png') }}');   background-size: cover;
        background-position: center center;"
                    class="image1-2 links_box-shadox" id="imageCov1">

                    <div class="links_position-bottom">
                        <div class="text-3 order-last">
                            <span> 튀니스</span>
                            <p> 튀니스는 튀니지 북부에 있는 도시이자 수도로, 튀니지 최대도시예요.
                                대표적인 관광지인 고대 카르타고 유적과 중세 구시가지 메디나는 유네스코 세계문화유산에 등재됐고요.
                                외곽에 위치한 시디 부 사이드는 튀니스 만 위 절벽에 높게 자리잡은 작고 예쁘게 하얀 색칠을 한 마을로 꼭 방문해야할 명소입니다.
                                도시 자체가 지닌 오랜 역사에 프랑스 지배로 인한 유럽풍까지 더해 여러 매력이 공존하는 도시예요!</p>

                            <button class="btn btn-outline-primary btn1-main2">더보기</button>
                        </div>

                    </div>
                </div>
                <div style="background-image: url('{{ asset('images/sahhara.png') }}');background-size: cover;
        background-position: center center;display:none"
                    class="image1-2 links_box-shadox" id="imageCov2">

                    <div class="links_position-bottom  ">
                        <div class="text-3 order-last" style="margin-top: 18% !important ">
                            <span> 두가</span>
                            <p>튀니스에서 105km 남서쪽에 있는 두가는 한 때 번영했던 고대 로마의 도시 중 하나예요,. 두가의 로마유적은 북아프리카에서 가장 잘 보존된 것으로 꼽힙니다.
                                수천 년의 세월이 담긴 역사성과 보존의 탁월함을 인정받아 인정받아 1997년 유네스코 문화유산에 등재 되었구요.
                                의사당과 포럼, 원형 극장과 공중목욕탕 등 로마 제국 변방에 있던 작은 도시의 모습을 보여주는 인상적인 유적들을 확인할 수 있습니다.</p>
                        </div>

                    </div>
                </div>
                <div style="background-image: url('{{ asset('images/ramadan-tunisia-white-background 1.png') }}');   background-size: cover;
         background-position: bottom center;display:none"
                    class="image1-2 links_box-shadox" id="imageCov3">

                    <div class="links_position-bottom  ">
                        <div class="text-3 order-last" style="margin-top: 18% !important ">
                            <span>카이로우안</span>
                            <p>튀니지 중심부에 위치한 카이로우안은 성도이자 이슬람의 정신적 수도 중 하나예요.
                                메카, 메디나, 예루살렘에 이어 이슬람교에서 네 번째 성지로 매우 중요한 지위를 차지합니다.
                                카이루안 대모스크는 북아프리카 이슬람 사원 중 가장 오래되었으며 튀니지에서 가장 큰 사원이자 건축사적으로 중요한 건축물이에요.
                                모스크 외에도 수공예품이 유명하며 카펫 수공업의 규모가 커요.
                                카이로우안(Kairouan)는 튀니지의 유네스코 세계 문화유산으로 1988년에 등재되었습니다.</p>
                        </div>

                    </div>
                </div>
                <div style="background-image: url('{{ asset('images/Rectangle 8246.png') }}');   background-size: cover;
        background-position: center center;display:none"
                    class="image1-2 links_box-shadox" id="imageCov4">

                    <div class="links_position-bottom">
                        <div class="text-3 order-last" style="margin-top: 18% !important ">
                            <span>마트마타</span>
                            <p>과거 베르베르인들이 과거 침략으로부터 자신들을 보호하기 위해 건설했던 세계에서 가장 큰 지하마을이에요.
                                돌을 깎아 만든 독특한 구조의 동굴가옥은 태양을 차단하고 온도를 조절하여 일년 내내 기온이 상대적으로 시원하게 유지돼요.
                                현재 많은 주택들은 호텔로 개조되어 베르베르인들의 생활 방식을 경험하기 위해 찾는 관광객들을 맞이하고 있어요.
                                특히 스타워즈의 농가 장면이 촬영지인 시디 드리스 호텔(Sidi Driss Hotel)이 유명합니다.</p>
                        </div>

                    </div>
                </div>


                <div class="mt-3 scroll-container">
                    <div class="d-flex gap-20 mt-4">
                        <div class="d-flex flex-column affmob">
                            <img src="{{ asset('images/MicrosoftTeams-image (3).png') }}" class="imageB1"
                                id="imageB1" onclick="changeImage1()">
                            <div class="d-flex flex-column align-items-start">
                                <span class="text-p " id='crd2h1'>튀니스</span>
                                <div class=" d-flex justify-content-between">
                                    <button class="btn btn-outline-primary btn1-b text-center mr"
                                        id="btn1">수도</button>
                                    <button class="btn btn-outline-primary btn1-b1 ml-2 text-center"
                                        id="btn1-b">동쪽</button>
                                </div>

                            </div>

                        </div>

                        <div class="d-flex flex-column affmob">
                            <img src="{{ asset('images/Rectangle 821.png') }}" class="imageB2" id="imageB2"
                                onclick="changeImage2()">
                            <div class="d-flex flex-column align-items-start">
                                <span class="text-p2" id='crd2h2'>두즈</span>
                                <div class=" d-flex justify-content-between">
                                    <button class="btn btn-outline-primary btn2 text-center"
                                        id="btn2">따뜻한</button>
                                    <button class=" btn btn-outline-primary btn1-b2 ml-2 text-center"
                                        id="btn2-b">남쪽</button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column affmob">
                            <img src="{{ asset('images/Rectangle 822.png') }}" class="imageB3" id="imageB3"
                                onclick="changeImage3()">
                            <div class="d-flex flex-column align-items-start">
                                <span class="text-p3" id='crd2h3'>카이루안</span>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-outline-primary btn3 text-center"
                                        id="btn3">따뜻한</button>
                                    <button class="btn btn-outline-primary btn1-b3 ml-2 text-center"
                                        id="btn3-b">남쪽</button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column affmob">
                            <img src="{{ asset('images/ooi.png') }}" class="imageB4" id="imageB4"
                                onclick="changeImage4()">
                            <div class="d-flex flex-column align-items-start">
                                <span class="text-p4" id='crd2h4'>마트마타</span>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-outline-primary btn4 text-center"
                                        id="btn4">따뜻한</button>
                                    <button class="btn btn-outline-primary btn1-b4 ml-2 text-center"
                                        id="btn4-b">남쪽</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{--    <div class="lignes"></div> --}}

    <section id="section-5">
        <div class="container">
            <h2 class="main-title text-center">방문객 후기</h2>
            <div class="container mt-5 cm">
                <div class="row justify-content-center">
                    <div class="wrap-avis">
                        <div class="card mx-auto justify-content-center">
                            <div class="row no-gutters">
                                <div class="col-md-2 d-flex align-items-center justify-content-center BG">
                                    <img id="imgwj1" src="{{ asset('images/BG (3).png') }}">
                                    <img id="imgwj12" src="{{ asset('images/imgwj1.png') }}">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body d-flex flex-column justify-content-center textecard">
                                        <h5 class="card-title title">오OO</h5>
                                        <p class="card-text text-left textecard">유럽같으면서 아랍적인 독특한 매력을 가진 나라 튀니지．지중해를
                                            배경으로 하는
                                            시디부사이드의 모습은 아직도 잊지 못할 것 같습니다．
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-line"></div>
                        <div class="card mx-auto justify-content-center">
                            <div class="row no-gutters">
                                <div class="col-md-2 d-flex align-items-center justify-content-center">
                                    <img id="imgwj1" src="{{ asset('images/BG (2).png') }}"
                                        style="width: 91.88px; height: 91.88px;">
                                    <img id="imgwj12" src="{{ asset('images/imgwj2.png') }}">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body d-flex flex-column justify-content-center textecard2">
                                        <h5 class="card-title title">임OO </h5>
                                        <p class="card-text text-left textecard2">튀니지를 도착했을때 아 이곳이 북아프리카구나，
                                            했던 생각들이 이주일 뒤엔 이곳이 그리스인가？ 하고 바뀌었어요．
                                            갔다 와 보시면 아실거예요．.
                                            죽기 전에 꼭 다시 한번 와보고 싶다 하는것을！II 매일 점심마다 400원 주고 ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-line"></div>
                        <div class="card mx-auto justify-content-center">
                            <div class="row no-gutters">
                                <div class="col-md-2 d-flex align-items-center justify-content-center">
                                    <img id="imgwj1" src="{{ asset('images/BG1 (2).png') }}"
                                        style="width: 91.88px; height: 91.88px;">
                                    <img id="imgwj12" src="{{ asset('images/imgwj3.png') }}"
                                        style="width: 115px; height: 125px;">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body d-flex flex-column justify-content-center textecard3">
                                        <h5 class="card-title title">오OO</h5>
                                        <p class="card-text text-left textecard3 ">유럽같으면서 아랍적인 독특한 매력을 가진 나라 튀니지．
                                            지중해를 배경으로 하는 시디부사이드의 모습은 아직도 잊지 못할 것 같습니다．
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section id="section-6">
        <div class="container" style="display: flex; align-items: center; justify-content: space-around;">
            <div class="divundf">
                <span class="textbas">여기에 더 많은 의견</span>
                <img class='imgwjhmob' src="{{ asset('images/Property 1=Default.png') }}">
            </div>
            <hr class="lignes" style="margin: 10px;">
            <button class="btn btn-outline-primary button3">여기에서 더 많은 의견을 확인하세요</button>
        </div>
    </section>

    <section id="section-7" class="background-section">
        <div class="container mt-5 bb">
            <div class="row">
                <div class="col-md-8 offset-lg-2">
                    <form action="{{ route('mailings.store') }}" method="POST" id='formmail'>
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nom" id="nom" class="txt1 px-3 frminptstyl"
                                placeholder="이름" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="txt1 px-3 frminptstyl"
                                placeholder="이메일" required>
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="contenue" id="contenue" class="txt2 mt-1 px-3 pt-2 frminptstyl" placeholder="문의사항 "
                                required></textarea>
                        </div>
                        <div class="form-group text-right mt-4">
                            <button type="buttom" class="btn btn-outline-primary button4 m-0" onclick="viderchapm()" >취소</button>
                            <button type="submit" class="btn btn-outline-primary button4 m-0">문의하기</button>
                        </div>
                    </form>
                </div>
            </div>
            @if (session('success'))
                <input hidden id="success" value="{{ session('success') }}">
            @else
                <input hidden id="success" value=0>
            @endif


        </div>
    </section>

    <section id="section-8">
        <div class="container">
            <div class="card2 pt-3">
                <div class="op">
                    <ul class="cardul d-flex justify-content-around" style="list-style-type: none">
                        <li onclick="changContai(1)"><a class="show-paragraph" data-paragraph="ahla1">
                                <h5 id='tit1' class="tit1actv">
                                    +12 M
                                </h5>
                                <h5 id='tit11' class="tit2actv"> 2023년
                                    인구
                                </h5>
                            </a></li>
                        <li onclick="changContai(2)"><a class="show-paragraph" data-paragraph="ahla12">
                                <h5 id='tit2' class="tit1inactv"> 2M
                                </h5>
                                <h5 id='tit22' class="tit2inactv"> 관광객
                                    200만명
                                </h5>
                            </a></li>
                        <li onclick="changContai(3)"><a class="show-paragraph" data-paragraph="ahla13">
                                <h5 id='tit3' class="tit1inactv"> 700
                                </h5>
                                <h5 id='tit33' class="tit2inactv"> 역사적인
                                    장소
                                </h5>
                            </a></li>
                        <li onclick="changContai(4)"><a class="show-paragraph" data-paragraph="ahla14">
                                <h5 id='tit4' class="tit1inactv"> 1
                                </h5>
                                <h5 id='tit44' class="tit2inactv">1번째 대학</h5>
                            </a></li>
                    </ul>
                    <img id='img1Cnt' class='imgactv' src="images/tmp_1697673169545.jpg">
                    <p id="txt1" class="txtactv"> 튀니지의 인구는 약 1,200만 명(2023년 기준)이며 국민의 대부분은 튀니지인으로 이루어져있어요. 이 중 이슬람교를 믿는 무슬림은 약 98%를 차지합니다.</p>
                    <img id='img4Cnt' class='imginactv' src="images/tmp_1697673154452.jpg">
                    <p id="txt4" class="txtinactv">튀니지는 다양한 문명을 아우르는 약 700개의 역사적인 장소를 자랑합니다. 고대의 카르타고부터 로마 시대 유적까지, 다양한 문화와 역동적인 역사를 자랑하는 매력적인 관광지로 알려져 있습니다.</p>
                    <img id='img2Cnt' class='imginactv' src="images/tmp_1697673121691.jpg">
                    <p id="txt2" class="txtinactv">2021년 튀니지는 200만 명의 관광객을 맞이하며 관광업에서 상당한 부상을 보였습니다. 아름다운 지중해 해안, 역사적 유산 및 다양한 명소로 전 세계의 방문객들을 끌어들이고 있습니다. </p>

                    <img id='img3Cnt' class='imginactv' src="images/tmp_1697673183049.jpg">
                    <p id="txt3" class="txtinactv"> 튀니지는 세계 최초의 대학이 있는 특별한 곳입니다. 737년에 설립된 자이투나 대학은 튀니지의 교육 수준과 지적 발전에 대한 헌신을 보여줍니다.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer" style="display: flex;flex-direction: column;align-items: center;">
        <div class=" container">
            <div class="row my-5">
                <div class="col-lg-6 text-lg-end" style="border-right:1px solid #B3B3B3">
                    <div class="col-lg-12">
                        <h3 class="justify-content-center justify-content-lg-end main-title">튀니지에 대해서</h3>
                        <ul>
                            <li><a href="#">역사</a> |</li>
                            <li><a href="#">음식</a> |</li>
                            <li><a href="#">문화</a> |</li>
                            <li><a href="#">목적지</a> |</li>
                            <li><a href="#">활동</a> |</li>
                            <li><a href="#">경제</a> |</li>
                            <li><a href="#">업적</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-12">
                        <h3 class="justify-content-center justify-content-lg-end main-title"> 여행 정보</h3>
                        <ul>
                            <li><a href="#">공항</a> |</li>
                            <li><a href="#">호텔</a> |</li>
                            <li><a href="#">통화</a> |</li>
                            <li><a href="#">계절</a></li>
                            <li><a href="#">최고의 제안</a> |</li>
                            <li><a href="#">우리가 도울 수 있는 방법</a> |</li>
                            <li><a href="#">비상</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="d-flex justify-content-evenly mb-4">
                        <img src="{{ asset('images/Group (3).png') }}" style="width: 93px; height: 62px;">
                        <img src="{{ asset('images/Group (4).png') }}" style="width: 93px; height: 62px;">
                        <img src="{{ asset('images/Group 52.png') }}" style="width: 93px; height: 62px;">
                    </div>
                    <div class="d-flex justify-content-evenly mb-4">
                        <img src="{{ asset('images/Group 62.png') }}" style="width: 93px; height: 62px;">
                        <img src="{{ asset('images/Group 63.png') }}" style="width: 93px; height: 62px;">
                        <img src="{{ asset('images/Group 39589.png') }}" style="width: 93px; height: 62px;">
                    </div>
                </div>
            </div>

        </div>

        <div class="w-100 mt-3 pt-2 px-0 container" style="border-top:1px solid #B3B3B3">
            <div class="row">
                <div class="text-left col-lg-4 image-footer-1">
                    <img src="{{ asset('images/Rectangle2.svg') }}">
                    <img src="{{ asset('images/Untitled-1.png') }}" style="height: 24px;">
                    <img src="{{ asset('images/Inspiring_tunisia.png') }}" style="height: 24px;">
                </div>
                <div class="col-lg-4 text-center image-footer-1">
                    <span>All rights reserved ©</span>
                </div>
                <div class="col-lg-4 text-right image-footer-1">
                    <img src="{{ asset('images/fb.svg') }}" style="height: 18px; max-width: 17px; margin-right: 4%;">
                    <img src="{{ asset('images/ig.svg') }}" style="height: 18px; max-width: 17px; margin-right: 4%;">
                    <img src="{{ asset('images/yt.svg') }}" style="height: 18px; max-width: 26px;">
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="modalemailsucc" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p>E-mail envoyer</p>
                </div>
            </div>
        </div>
    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/slick.js') }}" type="text/javascript" charset="utf-8"></script>

    <script src="{{ asset('js/ScriptPage1.js') }}"></script>
    <script type="text/javascript">
        // Code JavaScript pour gérer l'affichage/cachage du menu
        const toggleButton = document.getElementById('toggleButton');
        const navbarNav = document.getElementById('navbarNav');

        toggleButton.addEventListener('click', function() {
            navbarNav.classList.toggle('show');
        });
    </script>
    <script>
        jQuery(document).ready(function() {
            jQuery("#toggleButton").click(function() {
                jQuery(".custom-navbar").toggleClass("toggled");
            });

            var success = document.getElementById('success').value;
            console.log(success);
            if (success == 1) {
                $('#modalemailsucc').modal("show");
                setTimeout(function() {
                    $('#modalemailsucc').modal('hide');
                }, 2000);
            }
        });
    </script>
    <script>
        function toggleNavbarBackground() {
            var body = document.querySelector('body');
            body.classList.toggle('navbar-toggled');
        }
        $('#image-2, #image-3, #image-4, #image-5').on('click', function() {
            if ($(this).find('.parag-img').css('opacity', '0')) {
                $(this).find('.parag-img').css('opacity', '1')
                console.log("h1")
            } else {
                $(this).find('.parag-img').css('opacity', '0');
                console.log("h2")
            }
        })
    </script>
    <script>
        $('#mySlickCarousel .slick-slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            autoplay: true,
            autoplaySpeed: 4000,
            prevArrow: null,
            nextArrow: null,
            appendArrows: $('#mySlickCarousel'),
        });
    </script>


</body>

</html>
