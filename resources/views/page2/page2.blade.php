@include('page2.scriptpg2')


<body id="about-tunisia" class="tunisiatrip">
    @include('layouts.front.header')
    <main>
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
    </main>


    <div class="container">
        <section id="section-1">
            <div class="text-center">
                <h2 class="main-title">Tunisia overview</h2>
            </div>

            <div class="row">
                <div class="col-lg-7  one-time-slide">
                    <img src="{{ asset('images/Matmata.jpg') }}" class="w-100" id='imgsess1' alt="Matmata Tunisie">
                    <div class="d-flex sccgrp p-lg-3 sess1direct align-items-center" id="dirct">
                        <img src="{{ asset('images/flr.png') }}" onclick="ChangImgSess1(-1)" alt='Arrow left'>
                        <img id='sess1crc1' src="{{ asset('images/pt.png') }}" alt="Point">
                        <img id='sess1crc2' src="{{ asset('images/crcl.png') }}" alt="Cercle">
                        <img id='sess1crc3' src="{{ asset('images/crcl.png') }}" alt="Cercle">
                        <img id='sess1crc4' src="{{ asset('images/crcl.png') }}" alt="Cercle">
                        <img id='sess1crc5' src="{{ asset('images/crcl.png') }}" alt="Cercle">
                        <img src="{{ asset('images/fll.png') }}" onclick="ChangImgSess1(1)" alt='Arrow right'>
                    </div>
                </div>
                <div class="col-lg-4 ml-lg-3 pt-3">
                    <p class="txt1"><strong>공식명칭: </strong>튀니지 공화국(Republic of Tunisia) </p>
                    <p class="txt1"><strong>수도: </strong>튀니스(Tunis)</p>
                    <p class="txt1"><strong>면적:</strong>163,610km2(세계 93위. 한반도의 3/4) </p>
                    <p class="txt1"><strong>인구: </strong>약 1,248만 명(2023년)</p>
                    <p class="txt1"><strong>GDP: </strong>약 466억$(2023년. 세계 88위)</p>
                    <p class="txt1"><strong>언어: </strong>아랍어(공용어), 프랑스어(상용어)</p>
                    <p class="txt1"><strong>주요민족: </strong>아랍인(98%), 유태인, 유럽인 </p>
                    <p class="txt1"><strong>기후: </strong>지중해성 기후 </p>
                    <p class="txt1"><strong>정부/의회형태: </strong>공화제 / 다당제&단원제</p>
                    <p class="txt1"><strong>종교: </strong>수니파 이슬람교(98%), 그리스도교(1%), 유대교</p>
                    <p class="txt1"><strong>국가번호: </strong>216 </p>
                    <p class="txt1"><strong>화폐: </strong>튀니지 디나르(TND) </p>
                    <p class="txt1"><strong>전압: </strong>220~230V / 50Hz</p>
                </div>
            </div>
        </section>






        {{-- part 2 --}}
        <section id="section-3">
            <div class="row slick-slide">
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="titre-2">아프리카 최북단</h5>
                            <img src="{{ asset('images/map2-02-05_2.svg') }}" class="img2-section3 mt-n3" alt="Afrique">
                            <p class="parghraphe1">아프리카 대륙의 최북단에 위치하며, 아틀라스 산맥을 따라 자리 잡은 나라들 중 가장 작은 국가예요.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="titre-2">북아프리카</h5>
                            <img src="{{ asset('images/map2-02-03_2.svg') }}" class="img1-section3 mt-n3" alt="Point Afrique">
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
                            <img src="{{ asset('images/map2-02-04_2.svg') }}"class="img3-section3 mt-n3" >
                            <p class="parghraphe1">지중해 서부 연안에 위치한 아프리카와 유럽의 관문이기도 해요.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center  links_box">
                <h2 class="main-title">Location</h2>
                <img src="{{ asset('images/mapppp_finaaallllll-02.svg') }}" class="img2" alt="Map">
            </div>
            <div class="row block-cards">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body d-flex flex-column">
                            <h5 class="titre-2">아프리카 최북단</h5>
                            <img src="{{ asset('images/map2-02-05_2.svg') }}" class="img2-section3">
                            <p class="parghraphe1">아프리카 대륙의 최북단에 위치하며, 아틀라스 산맥을 따라 자리 잡은 나라들 중 가장 작은 국가예요.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body d-flex flex-column">
                            <h5 class="titre-2">북아프리카</h5>
                            <img src="{{ asset('images/map2-02-03_2.svg') }}" class="img1-section3">
                            <p class="parghraphe1 par1">아랍어로 "해가 지는 땅"이라는 의미의 마그레브 지역에 위치한 튀니지는 서쪽으로 알제리와 남동쪽으로는 리비아와 국경을
                                접하고
                                있어요.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body d-flex flex-column">
                            <h5 class="titre-2">지중해</h5>
                            <img src="{{ asset('images/map2-02-04_2.svg') }}"class="img3-section3" >
                            <p class="parghraphe1">지중해 서부 연안에 위치한 아프리카와 유럽의 관문이기도 해요.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section id="section-5">
            <div class="text-center mb-2 d-flex flex-column align-items-center">
                <h2 class="main-title " >Weather</h2>

                <p class=" parghraphe1">
                    튀니지는 제법 뚜렷한 봄, 여름, 가을, 겨울의 4계절이 있어요. 여행 시기에 맞춰 적절한 의복을 챙기는 게 좋습니다. 튀니지 1월 평균 최저 기온은 6 ̊C, 8월
                            평균
                            최고 기온은 33 ̊C입니다.
                </p>
                <div class=" buttons">
                    <button id='btn0sect5' class="p-2  btnactv" onclick="changtextSect3(0)">여름은</button>
                    <button id='btn1sect5' class="p-2 btninactv" onclick="changtextSect3(1)">겨울</button>
                    <button id='btn2sect5' class="p-2 btninactv" onclick="changtextSect3(2)">봄 과 가을</button>
                </div>
            </div>
            <div class="d-flex flex-column  align-items-center  allsec">

                <div class="ktbchng text-center" >


                    <div class="row">
                        <div class="align-items-start col-lg-6 d-flex flex-column justify-content-around text-alignes  ">
                            <div class="para-section">
                                <p class="mt-3 mt-lg-5" id='sec3titrp5'>6월부터 9월:</p>
                                <p id='sec3spnprt5'>튀니지 현지의 여름은 매우 뜨겁습니다. 8월 평균 기온은 33C이며, 40̊C가 넘을 때도 있어요.<br> 북부 튀니지는 덥고 건조하며 남부로 내려갈수록 기온이 더
                                    올라가며
                                    건조해지는 사하라 성 기후를 보입니다.<br> 하지만 아침, 저녁으로 해가 떨어지면 기온이 크게 내려가는 양상을 보이니 일교차에 유념하여 가디건을 챙기는 게
                                    좋습니다.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <img src="{{ asset('images/chammousa.png') }}" alt="Sun" class="mt-lg-5 p-lg-4"
                                id="sec3img">
                        </div>
                    </div>

                </div>
            </div>


        </section>
    </div>


    <section id="section-6">
        <div class="container">

            <div class="text-center mb-2 d-flex flex-column align-items-center">
                <h2 class="main-title " >Language</h2>

                <p class=" parghraphe1">
                    튀니지의 공용어는 아랍어예요.표준아랍어와는 차이가 있는 튀니지 방언 아랍어를 주로 사용하고요 프랑스 식민 지배의 영향으로 제2공용어로 프랑스어를 사용하고 있어요.
                </p>
                <div class=" buttons ">
                    <button id='btn0' class="p-2 btnactv" onclick="changtext(0)">아랍어</button>
                    <button id='btn1' class="p-2 btninactv" onclick="changtext(1)">프랑스어</button>
                    <button id='btn2' class="p-2 btninactv" onclick="changtext(2)">영어</button>
                    <button id='btn3' class="p-2 btninactv" onclick="changtext(3)">아마지그어</button>
                </div>
            </div>
            <div class=" d-flex flex-column  align-items-center allsec">

                <div class="ktbchng text-center" >


                    <div class="row">
                        <div class="align-items-start col-lg-6 d-flex flex-column justify-content-around text-alignes">
                            <div class="para-section">
                                <p class="mt-lg-5" id='titrp5'>튀니지의 아랍어</p>
                                <p id='spnprt5'>2011년 시민혁명 이후 제정된 튀니지 헌법 제1조는 아랍어를 ‘국가의 언어’로 규정하고 있어요. 또한 헌법
                                    제39조에는 아랍 정체성과
                                    아랍어 사용 교육의 보편화가 규정되어 있기도 합니다.<br>튀니지 아랍어는 국경을 마주하는 알제리나 모로코 방언과 비슷해요. 표준 아랍어와는 차이가
                                    있어서 튀니지에서는 튀니지어를 사용한다는 농담도 있어요. 튀니지 아랍어는
                                    표준아랍어와 프랑스어, 그리고 이탈리아어 등 다양한 언어가 많이 섞인 형태예요. </span>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <img src="{{ asset('images/arabe-langue.png') }}" alt="Arabe Language"
                                id="img-langue">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <section id="section-8">
            <div class="text-center ">
                <div class="d-flex flex-column align-items-center">
                    <p class="main-title">Religion</p>
                    <div class="ligne-separtion"></div>
                    <div class="parghraphe">
                        <span>튀니지의 국교는 이슬람교!<br>
                            튀니지는 헌법에서 종교가 이슬람교임을 명시적으로 밝히고 있는 이슬람교 국가예요.
                        </span>
                    </div>
                </div>
                <div class="row mt-5 ">
                    <div class="col-lg-6 section-8-prt1">
                        <img src="{{ asset('images/Kairouan-Great.png') }}" class="img-fluid img4" id='img44' alt="Kairouan Great Tunisia">
                    </div>

                    <div
                        class="align-items-start col-lg-6 d-flex flex-column justify-content-around pl-lg-5 pb-lg-3 section-costum">
                        <div class="pt-lg-5">
                            <h4 id='h4prt6'>이슬람</h4>
                            <p id='pprt6'>국민의 98.2%가 수니파 이슬람을 믿는 무슬림입니다. 그렇지만 1988년 국가 헌장에 따라 종교의 자유가 보장됩니다. 다만 개종
                                권유, 포교는 법적 제한을 받아요.</p>
                        </div>
                        <div class="d-flex justify-content-between  pb-5">
                            <div class="d-flex  mr-lg-5 sccgrp p-lg-3">
                                <a class="carousel-control-prev flch"
                                    role="button" data-slide="prev" onclick="changelement(-1)">
                                    <span class="carousel-control-prev-icon-gauche" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <span id='crcl11'></span>
                                <span id='crcl22'></span>
                                <span id='crcl33'></span>
                                <a class="carousel-control-next flch"
                                    role="button" data-slide="next" onclick="changelement(1)">
                                    <span class="carousel-control-prev-icon-droite" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <p id='txtindx' class="mb-0 main-title">유대교</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="section-9">
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
            <h2 class="main-title">Spotlight</h2>

            <div class="row block-cards">
                <div class="col-lg-4 section-9-hover">
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
                <div class="col-lg-4 section-9-hover">
                    <div class="links_box-2">

                        <button type="button" class="btn btn-outline-primary button-main">쿠스쿠스</button>
                    </div>
                    <div class="height-p-card ">
                        <p class="p1prt7">튀니지에서는 관광객에게 꼭 시식해보아야 할 전통 음식인 쿠스쿠스가 있습니다. 이 음식은 증기로 익힌 세몰리나 밀 가루와 고기,
                            채소, 향신료로
                            만든 풍미 있는 스튜와 함께 제공됩니다. 튀니지의 다양한 지역 스타일로 만들어진 쿠스쿠스를 현지 레스토랑이나 시장에서 맛보세요. 이렇게 튀니지의 다양한
                            음식문화를 경험할 수
                            있는 쿠스쿠스는 여행객에게 꼭 추천하는 메뉴입니다.
                        </p>
                        <p class="p2prt7">더 읽어보세요..</p>
                    </div>
                </div>
                <div class="col-lg-4 section-9-hover">
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
                <h2 class="main-title">Culture</h2>
                <div class="ligne-separtion"></div>
                <p id='pprt8'>튀니지 문화는 축구와 같은 스포츠를 경험하고 다양하고 맛있는 음식인 쿠스쿠스와 매콤한 하리사로 유명하며,<br> 그 예술은 복잡한 도자기와 모자이크 작품에서
                    이슬람, 지중해 및 지역 문화의 결합을 나타냅니다.</p>
            </div>
            <div class="crdd">
                <div class="d-flex flex-row justify-content-between crd8 slick-block-section-10">
                    <div class="d-flex flex-column  prt8hov">
                        <div class="crd2 crd81">
                            <button class="btn btn-outline-primary button-main">예술</button>
                            <img src="{{ asset('images/Culture-Tunisia.png') }}" class="img-fluid img6" alt="Culture Tunisia">
                        </div>
                        <p class="p1prt8 pt-4">튀니지에는 세계 고고학과 건축 연구에 중요한 많은 역사적 유적지가 있어요. 또한 카펫, 도자기, 가죽제품, 모자이크 등 수공예품이
                            유명합니다.
                        </p>
                    </div>
                    <div class="d-flex flex-column prt8hov">
                        <div class="crd2 crd81">
                            <button class="btn btn-outline-primary button-main">요리</button>
                            <img src="{{ asset('images/Ojja.png') }}" class="img-fluid img6" alt="Food Tubisie">

                        </div>
                        <p class="p1prt8 pt-4">튀니지 음식은 동서양 요리 양식이 혼합된 형태예요. 올리브 오일, 향신료, 토마토, 해산물, 고기를 기반으로 한 요리가 많아요.
                            칠리고추 향신료인
                            하리사를 넣어 특유의 매운맛이 특징이에요.
                        </p>
                    </div>
                    <div class="d-flex flex-column prt8hov">
                        <div class="crd2 crd81">
                            <button class="btn btn-outline-primary button-main">스포츠</button>
                            <img src="{{ asset('images/Sport_fun.jpg') }}" class="img-fluid img6" style="z-index: -1;"
                                alt="Football Tunisie">

                        </div>
                        <p class="p1prt8 pt-4">스포츠는 튀니지에서 점점 더 인기를 얻고 있어요. 특히 축구의 인기가 상당합니다. 2020년 10월, 튀니지 축구 국가대표팀은
                            FIFA
                            세계랭킹에서 26위에 오르기도 했어요.
                        </p>
                    </div>
                </div>
                <div class="row slick-section-10">
                    <div class="col-lg-4">

                        <div class="d-flex flex-column prt8hov">
                            <div class="crd2 crd81 ">
                                <button class="btn btn-outline-primary button-main">예술</button>
                                <img src="{{ asset('images/Culture-Tunisia.png') }}" class="img-fluid img6" alt="Image">
                            </div>
                            <p class="p1prt8 pt-4">튀니지에는 세계 고고학과 건축 연구에 중요한 많은 역사적 유적지가 있어요. 또한 카펫, 도자기, 가죽제품, 모자이크 등
                                수공예품이 유명합니다.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="d-flex flex-column prt8hov">
                            <div class="crd2 crd81">
                                <button class="btn btn-outline-primary button-main">요리</button>
                                <img src="{{ asset('images/Ojja.png') }}" class="img-fluid img6" alt="Image">
                            </div>
                            <p class="p1prt8 pt-4">튀니지 음식은 동서양 요리 양식이 혼합된 형태예요. 올리브 오일, 향신료, 토마토, 해산물, 고기를 기반으로 한 요리가
                                많아요. 칠리고추 향신료인 하리사를 넣어 특유의 매운맛이 특징이에요.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">

                        <div class="d-flex flex-column prt8hov">
                            <div class="crd2 crd81">
                                <button class="btn btn-outline-primary button-main">스포츠</button>
                                <img src="{{ asset('images/Sport_fun.jpg') }}" alt="Football" class="img-fluid img6"
                                    style="z-index: -1;" alt="Image">
                            </div>
                            <p class="p1prt8 pt-4">스포츠는 튀니지에서 점점 더 인기를 얻고 있어요. 특히 축구의 인기가 상당합니다. 2020년 10월, 튀니지 축구
                                국가대표팀은 FIFA 세계랭킹에서 26위에 오르기도 했어요.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <footer class="footer" style="display: flex;flex-direction: column;align-items: center;">
        <div class=" container ">
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
                <div class="text-left col-lg-4 image-1">
                    <img src="{{ asset('images/Rectangle2.svg') }}">
                    <img src="{{ asset('images/Untitled-1.png') }}" style="height: 24px;">
                    <img src="{{ asset('images/Inspiring_tunisia.png') }}" style="height: 24px;">
                </div>
                <div class="col-lg-4 text-center image-2">
                    <span>All rights reserved ©</span>
                </div>
                <div class="col-lg-4 text-right image-3">
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
    <script type="text/javascript">
        $('.variable-width').slick({
            dots: true,
            infinite: true,
            adaptiveHeight: true,
            appendArrows: false,
            fade: true,
            cssEase: 'linear'
        });


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
        });

        $(document).ready(function() {
        //54it il lien connecter
        var currentURL = window.location.href;
        var parts = currentURL.split('/');
        var routeValue = parts[parts.length - 1];
        var home=document.getElementById('home') ;
        var aboute=document.getElementById('aboute');
        var aboutatlnts=document.getElementById('aboutatlnts');
        var travel=document.getElementById('travel');
        var more=document.getElementById('dropdownMenuButton');

        console.log(routeValue);
        if(routeValue==''){
            home.style.color = '#347EFF';
            aboute.style.color = '#000';
            aboutatlnts.style.color = '#000';
            travel.style.color = '#000';
            more.style.color = '#000';
        }else if(routeValue=='about-tunisia'){
            aboute.style.color = '#347EFF';
            home.style.color = '#000';
            aboutatlnts.style.color = '#000';
            travel.style.color = '#000';
            more.style.color = '#000';
        }else if(routeValue=='about-atlantis'){
            aboutatlnts.style.color = '#347EFF';
            aboute.style.color = '#000';
            home.style.color = '#000';
            travel.style.color = '#000';
            more.style.color = '#000';
        }else if(routeValue=='travel-information'){
            travel.style.color = '#347EFF';
            aboute.style.color = '#000';
            aboutatlnts.style.color = '#000';
            home.style.color = '#000';
            more.style.color = '#000';
        }else{
            more.style.color = '#347EFF';
            aboute.style.color = '#000';
            aboutatlnts.style.color = '#000';
            travel.style.color = '#000';
            home.style.color = '#000';
        }
    });
    </script>
</body>


</html
