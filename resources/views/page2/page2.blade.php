@include('page2.scriptpg2')


<body id="index" class="tunisiatrip">
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="padding: 0 !important;height: 60px;">
        <div class="container justify-content-between">
            <div id="myTopnav">
                <img id="logimg" src="{{ asset('images/logo2.png') }}">
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
                        <a class="nav-link" href="#" id="tun-time">튀니지에 대해서</a>
                    </li>
                    <li class="nav-item active d-flex align-items-center  txtnav">
                        <a class="nav-link" href="#" id="tun-time">보다 더 ></a>
                    </li>
                    <li class=" nav-item d-flex" id="tun-time">
                        <button type="button" class="btn btn-outline-primary  btn-main mr-2">문의하기</button>
                        <div class="position-relative">
                            <input type="text" class="input-search" style="border-radius:8px">
                            <i class="icon-search">
                                <img src="{{ asset('images/search2.svg') }}">
                            </i>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <main>
        <div class="container mt-5 mb-5 icon">
            <div class="flex-container">
                <div class="icns" onmouseenter="changeImage(true,1)" onmouseleave="changeImage(false,1)">
                    <img id='img1' src="{{ asset('images/icn1.png') }}" class="imgicns">
                    <p id="p1" class="txticns">호텔</p>
                </div>

                <div class=" ligne1 m-4 lg">|</div>
                <div class="icns" onmouseenter="changeImage(true,2)" onmouseleave="changeImage(false,2)"><img
                        id='img2' src="{{ asset('images/icn2.png') }}" class="imgicns">
                    <p id="p2" class="txticns">항공편</p>
                </div>
                <div class="ligne1 m-4 lg">|</div>
                <div class="icns" onmouseenter="changeImage(true,3)" onmouseleave="changeImage(false,3)"><img
                        id='img3' src="{{ asset('images/icn3.png') }}" class="imgicns">
                    <p id="p3" class="txticns">축제</p>
                </div>
                <div class="ligne1 m-4 lg">|</div>
                <div class="icns" onmouseenter="changeImage(true,4)" onmouseleave="changeImage(false,4)"><img
                        id='img4' src="{{ asset('images/icn4.png') }}" class="imgicns">
                    <p id="p4" class="txticns">활동</p>
                </div>
                <div class="ligne1 m-4 lg">|</div>
                <div class="icns" onmouseenter="changeImage(true,5)" onmouseleave="changeImage(false,5)"><img
                        id='img5' src="{{ asset('images/icn5.png') }}" class="imgicns">
                    <p id="p5" class="txticns">자동차 서비스</p>
                </div>
                <div class="ligne1 m-4 lg">|</div>
                <div class="icns" onmouseenter="changeImage(true,6)" onmouseleave="changeImage(false,6)"><img
                        id='img6' src="{{ asset('images/icn6.png') }}" class="imgicns">
                    <p id="p6" class="txticns">크루즈</p>
                </div>
                <div class="ligne1 m-4 lg">|</div>
                <div class="icns" onmouseenter="changeImage(true,7)" onmouseleave="changeImage(false,7)"><img
                        id='img7' src="{{ asset('images/icn7.png') }}" class="imgicns">
                    <p id="p7" class="txticns">박물관</p>
                </div>
            </div>
        </div>
    </main>


    <div class="container">
        <section id="section-1">
            <div class="text-center">
                <h2 class="main-title">튀니지 개관</h2>
            </div>

            <div class="row">
                <div class="col-lg-8 links_box">
                    <button type="button" class="btn btn-outline-primary button-main">수도</button>
                </div>
                <div class="col-lg-4">
                    <span class="txt1"><strong>공식명칭: </strong>튀니지 공화국(Republic of Tunisia) </span><br>
                    <span class="txt1"><strong>수도: </strong>튀니스(Tunis)</span><br>
                    <span class="txt1"><strong>면적:</strong>163,610km2(세계 93위. 한반도의 3/4) </span><br>
                    <span class="txt1"><strong>인구: </strong>약 1,248만 명(2023년)</span><br>
                    <span class="txt1"><strong>GDP: </strong>약 466억$(2023년. 세계 88위)</span><br>
                    <span class="txt1"><strong>언어: </strong>아랍어(공용어), 프랑스어(상용어)</span><br>
                    <span class="txt1"><strong>주요민족: </strong>아랍인(98%), 유태인, 유럽인 </span><br>
                    <span class="txt1"><strong>기후: </strong>지중해성 기후 </span><br>
                    <span class="txt1"><strong>정부/의회형태: </strong>공화제 / 다당제&단원제</span><br>
                    <span class="txt1"><strong>종교: </strong>수니파 이슬람교(98%), 그리스도교(1%), 유대교</span><br>
                    <span class="txt1"><strong>국가번호: </strong>216 </span><br>
                    <span class="txt1"><strong>화폐: </strong>튀니지 디나르(TND) </span><br>
                    <span class="txt1"><strong>전압: </strong>220~230V / 50Hz</span>
                </div>
            </div>
        </section>






        {{-- part 2 --}}
        <section id="section-3">
            <div class="text-center mt-5 links_box">
                <h2 class="main-title">위치</h2>
                <img src="{{ asset('images/new_map2.jpeg') }}" class="img2">
            </div>
            <div class="row block-cards">
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="titre-2">아프리카 최북단</h5>
                            <p class="parghraphe1">아프리카 대륙의 최북단에 위치하며, 아틀라스 산맥을 따라 자리 잡은 나라들 중 가장 작은 국가예요.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="titre-2">북아프리카</h5>
                            <p class="parghraphe1">아랍어로 "해가 지는 땅"이라는 의미의 마그레브 지역에 위치한 튀니지는 서쪽으로 알제리와 남동쪽으로는 리비아와 국경을
                                접하고
                                있어요.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="titre-2">지중해</h5>
                            <p class="parghraphe1">지중해 서부 연안에 위치한 아프리카와 유럽의 관문이기도 해요.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row slick-slide">
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="titre-2">아프리카 최북단</h5>
                            <p class="parghraphe1">아프리카 대륙의 최북단에 위치하며, 아틀라스 산맥을 따라 자리 잡은 나라들 중 가장 작은 국가예요.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="titre-2">북아프리카</h5>
                            <p class="parghraphe1">아랍어로 "해가 지는 땅"이라는 의미의 마그레브 지역에 위치한 튀니지는 서쪽으로 알제리와 남동쪽으로는 리비아와 국경을
                                접하고
                                있어요.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="titre-2">지중해</h5>
                            <p class="parghraphe1">지중해 서부 연안에 위치한 아프리카와 유럽의 관문이기도 해요.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="section-5">
            <div class="text-center mb-3">
                <span class="main-title">날씨</span>
            </div>
            <div class="row">
                <div class="col-lg-4 d-flex flex-column justify-content-start pt-4">
                    <img src="{{ asset('images/chammousa.png') }}" class="img-fluid img3" id='imgchoose'>

                    <div class="d-flex justify-content-center mt-5 sccgrp">
                        <a class="carousel-control-prev flch" href="#carouselExampleIndicators" role="button"
                            data-slide="prev" onclick="srllimg(-1)">
                            <span class="carousel-control-prev-icon-gauche" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <span id='crcl1'></span>
                        <span id='crcl2'></span>
                        <span id='crcl3'></span>
                        <a class="carousel-control-next flch" href="#carouselExampleIndicators" role="button"
                            data-slide="next" onclick="srllimg(1)">
                            <span class="carousel-control-prev-icon-droite" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-8 pt-4">
                    <p class="parghraphe">
                        튀니지는 제법 뚜렷한 봄, 여름, 가을, 겨울의 4계절이 있어요. 여행 시기에 맞춰 적절한 의복을 챙기는 게 좋습니다. 튀니지 1월 평균 최저 기온은 6 ̊C, 8월 평균
                        최고 기온은 33 ̊C입니다.
                    </p>

                    <span class="titre-1" id='scrlltitr'> 6월부터 9월:</span><br>

                    <p class="parghraphe my-3" id="scrllp">
                        튀니지 현지의 여름은 매우 뜨겁습니다. 8월 평균 기온은 33C이며, 40̊C가 넘을 때도 있어요.<br> 북부 튀니지는 덥고 건조하며 남부로 내려갈수록 기온이 더 올라가며
                        건조해지는 사하라 성 기후를 보입니다.<br> 하지만 아침, 저녁으로 해가 떨어지면 기온이 크게 내려가는 양상을 보이니 일교차에 유념하여 가디건을 챙기는 게 좋습니다.
                    </p>
                </div>
            </div>
        </section>



        <section id="section-6">
            <div class="text-center mb-3 d-flex flex-column align-items-center">
                <h2 class="main-title">언어</h2>
                <p class=" parghraphe1">
                    튀니지의 공용어는 아랍어예요.<br>
                    표준아랍어와는 차이가 있는 튀니지 방언 아랍어를 주로 사용하고요<br>
                    프랑스 식민 지배의 영향으로 제2공용어로 프랑스어를 사용하고 있어요.
                </p>
            </div>
            <div class="mt-5 d-flex flex-column align-items-center button1">
                <div class="col-12 d-flex justify-content-around button1">
                    <button id='btn0' class="p-2 btn btnactv" onclick="changtext(0)">아랍어</button>
                    <button id='btn1' class="p-2 btninactv" onclick="changtext(1)">프랑스어</button>
                    <button id='btn2' class="p-2 btninactv" onclick="changtext(2)">영어</button>
                    <button id='btn3' class="p-2 btninactv" onclick="changtext(3)">아마지그어</button>
                </div>
                <div class="ktbchng text-center">
                    <p class="mt-5" id='titrp5'>튀니지의 아랍어</p>
                    <span id='spnprt5'>2011년 시민혁명 이후 제정된 튀니지 헌법 제1조는 아랍어를 ‘국가의 언어’로 규정하고 있어요. 또한 헌법 제39조에는 아랍 정체성과
                        아랍어 사용
                        교육의 보편화가 규정되어
                        있기도 합니다.
                        <br>튀니지 아랍어는 국경을 마주하는 알제리나 모로코 방언과 비슷해요. 표준 아랍어와는 차이가 있어서 튀니지에서는 튀니지어를 사용한다는 농담도 있어요. 튀니지 아랍어는
                        표준아랍어와 프랑스어, 그리고 이탈리아어 등 다양한 언어가 많이 섞인 형태예요. </span>
                </div>
            </div>
        </section>

        <section id="section-8">
            <div class="text-center ">
                <div class="d-flex flex-column align-items-center">
                    <p class="main-title">종교</p>
                    <div class="parghraphe">
                        <span>튀니지의 공용어는 아랍어예요.<br>
                            표준 아랍어와는 차이가 있는 튀니지 방언 아랍어를 주로 사용하고요. 프랑스 식민 지배의 영향으로 프랑스어가 상용어로 쓰여요.
                        </span>
                    </div>
                </div>
                <div class="row mt-5 ">
                    <div class="col-lg-6 ">
                        <img src="{{ asset('images/img4.png') }}" class="img-fluid img4" id='img44'
                            style="object-fit: contain;">
                    </div>

                    <div class="align-items-start col-lg-6 d-flex flex-column justify-content-around pl-5 ">
                        <div>
                            <h4 id='h4prt6'>이슬람</h4>
                            <p id='pprt6'>튀니지에는 아주 오래 전부터 유대교 소수민족이 있었습니다. 1967년 이후 대부분의 유대인들이 프랑스나 이스라엘로 이주했고, 현재
                                남아있는
                                유대인들의 대부분은 제르바섬에 거주하고 있습니다.</p>
                        </div>



                        <div class="d-flex justify-content-between inx" onclick="changelement()">
                            <img id='imgindx' src="{{ asset('images/down.svg') }}">

                            <p id='txtindx' class="mb-0">유대교</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="section-9">

            <h2 class="main-title">튀니지는 어떤 것으로 유명한가요?</h2>

            <div class="row block-cards">
                <div class="col-lg-4">
                    <div class="links_box-1">
                        <button type="button" class="btn btn-outline-primary button-main">올리브</button>
                    </div>
                    <div class="height-p-card">
                        <p class="p1prt7 ">튀니지는 다양한 올리브 품종으로 유명한 세계적인 올리브 생산국 중 하나입니다. 이 나라는 기후와 토양이 올리브 재배에 이상적이어서
                            고품질의 올리브
                            생산을 자랑합니다. 현지에서는 올리브 생산 과정을 직접 관찰하고 현지 농부로부터 전통적인 농업 기술을 배울 수 있으며, 튀니지의 올리브와 관련된 풍부한 문화를
                            체험할 수
                            있습니다.</p>
                        <p class="p2prt7">더 읽어보세요..</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="links_box-2 ">

                        <button type="button" class="btn btn-outline-primary button-main">쿠스쿠스</button>
                    </div>
                    <div class="height-p-card">
                        <p class="p1prt7">튀니지에서는 관광객에게 꼭 시식해보아야 할 전통 음식인 쿠스쿠스가 있습니다. 이 음식은 증기로 익힌 세몰리나 밀 가루와 고기,
                            채소, 향신료로
                            만든 풍미 있는 스튜와 함께 제공됩니다. 튀니지의 다양한 지역 스타일로 만들어진 쿠스쿠스를 현지 레스토랑이나 시장에서 맛보세요. 이렇게 튀니지의 다양한
                            음식문화를 경험할 수
                            있는 쿠스쿠스는 여행객에게 꼭 추천하는 메뉴입니다.
                        </p>
                        <p class="p2prt7">더 읽어보세요..</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="links_box-3">
                        <button type="button" class="btn btn-outline-primary button-main">카이루안</button>
                    </div>
                    <div class="height-p-card">
                        <p class="p1prt7">튀니지의 카이루안은 유네스코에 등재된 도시로, 풍부한 역사와 문화적 유산으로 유명합니다. 카이루안의 메디나는 좁은 길과 시장이 있는
                            붐변한 곳으로
                            현지 생활을 경험할 수 있으며, 아글라비드 제반스와 같은 고대 기술을 보여주는 곳을 탐험할 수 있습니다. 이 도시는 역사, 문화, 그리고 현지 매력을 결합하여
                            튀니지의
                            독특한 경험을 제공합니다.
                        </p>
                        <p class="p2prt7">더 읽어보세요..</p>
                    </div>
                </div>
            </div>

            <div class="row slick-slide">
                <div class="col-lg-4">
                    <div class="links_box-1">
                        <button type="button" class="btn btn-outline-primary button-main">올리브</button>
                    </div>
                    <div class="height-p-card">
                        <p class="p1prt7 ">튀니지는 다양한 올리브 품종으로 유명한 세계적인 올리브 생산국 중 하나입니다. 이 나라는 기후와 토양이 올리브 재배에 이상적이어서
                            고품질의 올리브
                            생산을 자랑합니다. 현지에서는 올리브 생산 과정을 직접 관찰하고 현지 농부로부터 전통적인 농업 기술을 배울 수 있으며, 튀니지의 올리브와 관련된 풍부한 문화를
                            체험할 수
                            있습니다.</p>
                        <p class="p2prt7">더 읽어보세요..</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="links_box-2 ">

                        <button type="button" class="btn btn-outline-primary button-main">쿠스쿠스</button>
                    </div>
                    <div class="height-p-card">
                        <p class="p1prt7">튀니지에서는 관광객에게 꼭 시식해보아야 할 전통 음식인 쿠스쿠스가 있습니다. 이 음식은 증기로 익힌 세몰리나 밀 가루와 고기,
                            채소, 향신료로
                            만든 풍미 있는 스튜와 함께 제공됩니다. 튀니지의 다양한 지역 스타일로 만들어진 쿠스쿠스를 현지 레스토랑이나 시장에서 맛보세요. 이렇게 튀니지의 다양한
                            음식문화를 경험할 수
                            있는 쿠스쿠스는 여행객에게 꼭 추천하는 메뉴입니다.
                        </p>
                        <p class="p2prt7">더 읽어보세요..</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="links_box-3">
                        <button type="button" class="btn btn-outline-primary button-main">카이루안</button>
                    </div>
                    <div class="height-p-card">
                        <p class="p1prt7">튀니지의 카이루안은 유네스코에 등재된 도시로, 풍부한 역사와 문화적 유산으로 유명합니다. 카이루안의 메디나는 좁은 길과 시장이 있는
                            붐변한 곳으로
                            현지 생활을 경험할 수 있으며, 아글라비드 제반스와 같은 고대 기술을 보여주는 곳을 탐험할 수 있습니다. 이 도시는 역사, 문화, 그리고 현지 매력을 결합하여
                            튀니지의
                            독특한 경험을 제공합니다.
                        </p>
                        <p class="p2prt7">더 읽어보세요..</p>
                    </div>
                </div>
            </div>
        </section>


        {{-- part 8 --}}
        <section id="section-10">
            <div class="d-flex flex-column align-items-center">
                <h2 class="main-title">튀니지 문화</h2>
                <hr class="mt-1 mb-5 ">
                <p id='pprt8'>튀니지 문화는 축구와 같은 스포츠를 경험하고 다양하고 맛있는 음식인 쿠스쿠스와 매콤한 하리사로 유명하며, 그 예술은 복잡한 도자기와 모자이크 작품에서
                    이슬람, 지중해 및 지역 문화의 결합을 나타냅니다.</p>
            </div>
            <div class="crdd">
                <div class="d-flex flex-row justify-content-between crd8">
                    <div class="d-flex flex-column  prt8hov">
                        <div class="crd2 crd81">
                            <button class="btn btn-outline-primary button-main">예술</button>
                            <img src="{{ asset('images/img8p1.png') }}" class="img-fluid img6" alt="Image">
                        </div>
                        <p class="p1prt8 pt-4">튀니지에는 세계 고고학과 건축 연구에 중요한 많은 역사적 유적지가 있어요. 또한 카펫, 도자기, 가죽제품, 모자이크 등 수공예품이
                            유명합니다.
                        </p>
                    </div>
                    <div class="d-flex flex-column prt8hov">
                        <div class="crd2 crd81">
                            <button class="btn btn-outline-primary button-main">요리</button>
                            <img src="{{ asset('images/img8p2.png') }}" class="img-fluid img6" alt="Image">

                        </div>
                        <p class="p1prt8 pt-4">튀니지 음식은 동서양 요리 양식이 혼합된 형태예요. 올리브 오일, 향신료, 토마토, 해산물, 고기를 기반으로 한 요리가 많아요.
                            칠리고추 향신료인
                            하리사를 넣어 특유의 매운맛이 특징이에요.
                        </p>
                    </div>
                    <div class="d-flex flex-column prt8hov">
                        <div class="crd2 crd81">
                            <button class="btn btn-outline-primary button-main">스포츠</button>
                            <img src="{{ asset('images/img8p3.png') }}" class="img-fluid img6" style="z-index: -1;"
                                alt="Image">

                        </div>
                        <p class="p1prt8 pt-4">스포츠는 튀니지에서 점점 더 인기를 얻고 있어요. 특히 축구의 인기가 상당합니다. 2020년 10월, 튀니지 축구 국가대표팀은
                            FIFA
                            세계랭킹에서 26위에 오르기도 했어요.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </div>
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
                <div class="text-left col-lg-4">
                    <img src="{{ asset('images/Rectangle2.svg') }}">
                    <img src="{{ asset('images/MicrosoftTeams-image.png') }}" style="height: 24px;">
                    <img src="{{ asset('images/MicrosoftTeams-image_(1).png') }}" style="height: 24px;">
                </div>
                <div class="col-lg-4 text-center">
                    <span>All rights reserved ©</span>
                </div>
                <div class="col-lg-4 text-right">
                    <img src="{{ asset('images/fb.svg') }}" style="height: 18px; max-width: 17px; margin-right: 4%;">
                    <img src="{{ asset('images/ig.svg') }}" style="height: 18px; max-width: 17px; margin-right: 4%;">
                    <img src="{{ asset('images/yt.svg') }}" style="height: 18px; max-width: 26px;">
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/slick.js') }}" type="text/javascript" charset="utf-8"></script>

    <script src="{{ asset('js/scriptpj2.js') }}"></script>

</body>

</html
