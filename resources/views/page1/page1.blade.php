@include('page1.javascript')
@include('page1.script')

<body>
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


    <main>


        <div id="myCarousel" class="carousel slide" data-ride="carousel">


            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/image (2).png') }}" class="img1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/MicrosoftTeams-image (3).png') }}" class="img1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/sergey-pesterev-_VqyrvQi6do-unsplash.jpg') }}" class="img1">
                </div>
                <div class="align-items-center d-flex h-100 justify-content-center position-absolute w-100">
                    <div class="text-center">
                        <div class="d-flex flex-column align-items-center">
                            <span class="text1">
                                튀니지
                                <br>파란 하늘 푸른 바다
                            </span>

                            <button type="button" class="btn btn-outline-primary btn1-main">더보기</button>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class=" rounded-circle" style="width: 16px;
                        height: 16px;"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class="rounded-circle" style="width: 16px;
                    height: 16px;"></li>
                        <li data-target="#myCarousel" data-slide-to="2" class="rounded-circle" style="width: 16px;
                    height: 16px;"></li>
                    </ol>
                </div>
            </div>
        </div>

    </main>


    <div class="container mt-5">
        <div class="flex-container" style="display: flex;  justify-content: center;    justify-content: space-evenly;">
            <div class="flex-item">
                <img id='img1' src="{{ asset('images/atlantis_button_1_state_0.svg') }}" style="height: 70px;">
                <p id="p1">호텔</p>
            </div>
            <div class=" ligne1 m-4 lg">|</div>
            <div style="display: flex; align-items: center; flex-direction: column;"><img id='img2' src="{{ asset('images/atlantis_button_2_state_0.svg') }}" style="height: 70px;">
                <p id="p2">항공편</p>
            </div>
            <div class="ligne1 m-4 lg">|</div>
            <div style="display: flex; align-items: center; flex-direction: column;"><img id='img3' src="{{ asset('images/atlantis_button_3_state_0.svg') }}" style="height: 70px;">
                <p id="p3">축제</p>
            </div>
            <div class="ligne1 m-4 lg">|</div>
            <div style="display: flex; align-items: center; flex-direction: column;"><img id='img4' src="{{ asset('images/atlantis_button_4_state_0.svg') }}" style="height: 70px;">
                <p id="p4">활동</p>
            </div>
            <div class="ligne1 m-4 lg">|</div>
            <div style="display: flex; align-items: center; flex-direction: column;"><img id='img5' src="{{ asset('images/atlantis_button_5_state_0.svg') }}" style="height: 70px;">
                <p id="p5">자동차 서비스</p>
            </div>
            <div class="ligne1 m-4 lg">|</div>
            <div style="display: flex; align-items: center; flex-direction: column;"><img id='img6' src="{{ asset('images/atlantis_button_6_state_0.svg') }}" style="height: 70px;">
                <p id="p6">크루즈</p>
            </div>
            <div class="ligne1 m-4 lg">|</div>
            <div style="display: flex; align-items: center; flex-direction: column;"><img id='img7' src="{{ asset('images/atlantis_button_7_state_0.svg') }}" style="height: 70px;">
                <p id="p7">박물관</p>
            </div>
        </div>
    </div>






    <div class="container mt-5">
        <div class="row">
            {{-- image 1 --}}
            <div class="col-6 r-image1">
                <div class="image-1">
                    <div class="ml-4">
                        <div class="d-flex flex-column align-items-start">
                            <button class="btn btn-outline-primary mt-4 r-btn1 mr-6">고고학 유적지</button>
                        </div>
                        {{-- <div class="r-text1">
                        튀니지
                        <br>파란 하늘 푸른 바다
                    </div>
 --}}
                    </div>

                </div>
            </div>
            {{-- bloc 1 --}}
            <div class="col-6 d-flex flex-column justify-content-between">
                <div class="d-flex">
                    <div class="pr-4">
                        <div class="image-2">
                            <div class="align-items-center d-flex flex-column h-100 justify-content-between">

                                <button type="button" class="btn btn-outline-primary mt-4 r-btn2">
                                    튀니지 미식 체험
                                </button>
                                <p class="p-2 parag-img">메디나 전통시장에서 역사적 정취를 느끼고,튀니지의 문화를 체험해보세요. 이 곳에서 기념품도 구매할 수 있어요.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-3">
                            <div class="align-items-center d-flex flex-column h-100 justify-content-between">
                                <button type="button" class="btn btn-outline-primary  mt-4 r-btn3">메디나 역사지구</button>
                                <p class="p-2 parag-img">튀니지 음식은 동서양 요리 양식이 혼합된 형태예요. 역사적으로 고대 페니키아, 로마, 오스만제국을 거쳐 프랑스의 영향도 많이 받았어요. 올리브 오일, 향신료, 토마토, 해산물, 닭고기나 양고기를 기반으로 한 요리가 많아요.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="d-flex">
                    <div class="pr-4">
                        <div class="image-4">
                            <div class="align-items-center d-flex flex-column h-100 justify-content-between">
                                <button type="button" class="btn btn-outline-primary  mt-4 r-btn4">즐길거리</button>
                                <p class="p-2 parag-img">시디부사이드, 엘젬, 두가, 수스 등 매력이 각기 다른 인기 목적지가 있어요. 과거와 현대가 공존하고 유럽과 아프리카, 아랍의 다양한 색깔이 함께하는 튀니지의 여러 도시들을 방문해보세요.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-5">
                            <div class="align-items-center d-flex flex-column h-100 justify-content-between">
                                <button type="button" class="btn btn-outline-primary  mt-4 r-btn5">인기 목적지</button>
                                <p class="p-2 parag-img">사하라사막에서의 낙타 타기 체험, 지중해 바다에서의 서핑 등 다양한 액티비티를 즐길 수 있어요.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <div class="mt-5 border-top mx-auto" style="width: 45.49px; height: 100px; color: #B3B3B3;"></div>

    <div class="container" style="display: flex;
justify-content: space-between;">
        <div>
            <video id="my-video" class="video-js" controls preload="auto" width="740" height="385" poster="images/sahrouch.png">
                <source src="images/vd.mp4" type="video/mp4" />
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    supports HTML5 video
                </p>
            </video>

        </div>
        <div class=" ml-5 text2">
            <div>
                <h4>홍보 영상</h4>
            </div>

            <span>
                튀니지의 매력을 영상으로 확인해보세요.
                <br>사하라 사막부터 역사가 살아숨쉬는 도시까지.
                북아프리카의 보석 튀니지의 풍부한 문화가 당신을 기다립니다.
            </span>
        </div>
    </div>

    <div class="mt-5 border-top mx-auto" style="width: 45.49px; height:70px; color: #B3B3B3;"></div>

    <div class=" mx-auto text3">
        <span>튀니지 주요 도시</span>
    </div>


    <div class="container mt-5">
        <div style="background-image: url('{{ asset('images/MicrosoftTeams-image (3).png') }}');   background-size: cover;
    background-position: center center;" class="image1-2" id="imageCov1">

            <div class="d-flex flex-column align-items-start  ">
                <div class="text-3 mt-5 ml-5 order-last" style="margin-top: 18% !important ">
                    <span> 튀니스</span>
                    <p> 튀니스는 튀니지 북부에 있는 도시이자 수도로, 튀니지 최대도시예요.
                        대표적인 관광지인 고대 카르타고 유적과 중세 구시가지 메디나는 유네스코 세계문화유산에 등재됐고요.
                        외곽에 위치한 시디 부 사이드는 튀니스 만 위 절벽에 높게 자리잡은 작고 예쁘게 하얀 색칠을 한 마을로
                        꼭 방문해야할 명소입니다.도시 자체가 지닌 오랜 역사에 프랑스 지배로 인한 유럽풍까지 더해 여러 매력이 공존하는 도시예요!</p>
                    <button class="btn btn-outline-primary btn1-main">더보기</button>
                </div>

            </div>
        </div>
        <div style="background-image: url('{{ asset('images/sahhara.png') }}');background-size: cover;
    background-position: center center;display:none" class="image1-2" id="imageCov2">

            <div class="d-flex flex-column align-items-start  ">
                <div class="text-3 mt-5 ml-5 order-last" style="margin-top: 18% !important ">
                    <span> 두가</span>
                    <p>튀니스에서 105km 남서쪽에 있는 두가는 한 때 번영했던 고대 로마의 도시 중 하나예요,. 두가의 로마유적은 북아프리카에서 가장 잘 보존된 것으로 꼽힙니다. 수천
                        년의
                        세월이
                        담긴
                        역사성과
                        보존의 탁월함을 인정받아 1997년 유네스코 문화유산에 등재되었고요. 의사당과 포럼, 원형 극장과 공중목욕탕 등 로마 제국 변방에 있던 작은 도시의 모습을 보여주는
                        인상적인
                        유적들을
                        확인할 수
                        있습니다.</p>
                </div>

            </div>
        </div>
        <div style="background-image: url('{{ asset('images/Rectangle 82456.png') }}');   background-size: cover;
    background-position: center center;display:none" class="image1-2" id="imageCov3">

            <div class="d-flex flex-column align-items-start  ">
                <div class="text-3 mt-5 ml-5 order-last" style="margin-top: 18% !important ">
                    <span>토주르</span>
                    <p>토주르는 튀니지 서남부의 도시로, 베르베르인의 색채가 가장 강한 곳이에요. 리조트 단지와 노천 온천이 있어 여행자들이 쉬어가는 경우가 많아요. 야자수, 무화과나무,
                        석류나무,
                        바나나 숲이
                        있는
                        크고 아름다운 오아시스 도시로 매년 12월에는 오아시스 국제 페스티벌이 열리기도 합니다. 또한 아프리카 최대의 소금호수이자 스타워즈 촬영지로 유명한 쇼트 엘 제리드는
                        유명
                        관광지
                        중
                        하나예요.
                        토주르 일대에서 생산되는 대추야자가 특산물이니 꼭 한 번 맛보시길 추천해 드려요.</p>
                </div>

            </div>
        </div>
        <div style="background-image: url('{{ asset('images/Rectangle 8246.png') }}');   background-size: cover;
    background-position: center center;display:none" class="image1-2" id="imageCov4">

            <div class="d-flex flex-column align-items-start">
                <div class="text-3 mt-5 ml-5 order-last" style="margin-top: 18% !important ">
                    <span> 수스</span>
                    <p>지중해 해안에 있는 수스는 휴양도시로 유명해요. 해안을 가로지르는 긴 바닷가에 고급 리조트는 물론, 레스토랑, 호텔, 쇼핑센터 등이 잘 갖춰져 있어 튀니지 관광
                        중심지 중
                        하나로
                        꼽혀요.
                        특히
                        수스의 메디나는 유네스코 세계 문화유산으로 지정됐을 정도로, 마그레브 이슬람 건축물의 전형적인 모습을 잘 보여주는 관광명소입니다. 수스 메디나에 방문하여 수스 고고학
                        박물관과
                        카스바, 대
                        모스크
                        등을 구경해 보세요.</p>
                </div>

            </div>
        </div>


        <div class="mt-3 ml-2">
            <div class="d-flex">
                <div class="d-flex flex-column">
                    <img src="{{ asset('images/MicrosoftTeams-image (3).png') }}" class="imageB1 mr-3" id="imageB1" onclick="changeImage1()">
                    <div class="d-flex flex-column align-items-start">
                        <span class="text-p ">튀니스</span>
                        <div class=" d-flex justify-content-between">
                            <button class="btn btn-outline-primary btn1-b text-center mr" id="btn1">수도</button>
                            <button class="btn btn-outline-primary btn1-b1 ml-2 text-center" id="btn1-b">동쪽</button>
                        </div>

                    </div>

                </div>

                <div class="d-flex flex-column">
                    <img src="{{ asset('images/Rectangle 821.png') }}" class="imageB2 mr-3" id="imageB2" style="filter: grayscale(100%);" onclick="changeImage2()">
                    <div class="d-flex flex-column align-items-start">
                        <span class="text-p2">두즈</span>
                        <div class=" d-flex justify-content-between">
                            <button class="btn btn-outline-primary btn2 text-center" id="btn2">따뜻한</button>
                            <button class=" btn btn-outline-primary btn1-b2 ml-2 text-center" id="btn2-b">남쪽</button>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column">
                    <img src="{{ asset('images/Rectangle 822.png') }}" class="imageB3 mr-3" id="imageB3" style="filter: grayscale(100%);" onclick="changeImage3()">
                    <div class="d-flex flex-column align-items-start">
                        <span class="text-p3">카이루안</span>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-outline-primary   btn3 text-center" id="btn3">따뜻한</button>
                            <button class="btn btn-outline-primary btn1-b3 ml-2 text-center" id="btn3-b">남쪽</button>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column">
                    <img src="{{ asset('images/ooi.png') }}" class="imageB4 mr-3 " id="imageB4" style="filter: grayscale(100%);" onclick="changeImage4()">
                    <div class="d-flex flex-column align-items-start">
                        <span class="text-p4">마트마타</span>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-outline-primary btn4 text-center" id="btn4">따뜻한</button>
                            <button class="btn btn-outline-primary btn1-b4 ml-2 text-center" id="btn4-b">해변</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="mt-5 border-top mx-auto" style="width: 45.49px; height:70px; color: #B3B3B3;"></div>


    <div class=" mx-auto text4">
        <span>튀니지 주요 도시</span>
    </div>

    <div class="mt-5">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-auto justify-content-center" style="width: 788px;height: 246px; border-radius: 20px; border: 1px solid #B3B3B3;">
                    <div class="row no-gutters">
                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                            <img id="imgwj1" src="{{ asset('images/BG (3).png') }}" style="width: 91.88px; height: 91.88px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h5 class="card-title" style="font-size: 36px;">오OO</h5>
                                <p class="card-text text-left" style="font-size: 20px;">유럽같으면서 아랍적인 독특한 매력을 가진 나라 튀니지．지중해를 배경으로 하는 시디부사이드의 모습은 아직도 잊지 못할 것 같습니다．
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vertical-line"></div>
                <div class="card mx-auto justify-content-center" style="width: 788px;height: 246px; border-radius: 20px; border: 1px solid #B3B3B3;">
                    <div class="row no-gutters">
                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                            <img id="imgwj1" src="{{ asset('images/BG (2).png') }}" style="width: 91.88px; height: 91.88px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h5 class="card-title" style="font-size: 36px;">오OO</h5>
                                <p class="card-text text-left" style="font-size: 20px;">튀니지를 도착했을때 아 이곳이 북아프리카구나，
                                    했던 생각들이 이주일 뒤엔 이곳이 그리스인가？ 하고 바뀌었어요．
                                    갔다 와 보시면 아실거예요．.
                                    죽기 전에 꼭 다시 한번 와보고 싶다 하는것을！II 매일 점심마다 400원 주고 ...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vertical-line"></div>
                <div class="card mx-auto justify-content-center" style="width: 788px;height: 246px; border-radius: 20px; border: 1px solid #B3B3B3;">
                    <div class="row no-gutters">
                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                            <img id="imgwj1" src="{{ asset('images/BG1 (2).png') }}" style="width: 91.88px; height: 91.88px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h5 class="card-title" style="font-size: 36px;">오OO</h5>
                                <p class="card-text text-left" style="font-size: 20px;">유럽같으면서 아랍적인 독특한 매력을 가진 나라 튀니지．
                                    지중해를 배경으로 하는 시디부사이드의 모습은 아직도 잊지 못할 것 같습니다．
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5" style="display: flex; align-items: center; justify-content: center;">
            <span class="textbas">여기에 더 많은 의견</span>
            <img src="{{ asset('images/Property 1=Default.png') }}">

            <hr class="lignes" style="margin: 10px;">
            <button class="btn btn-outline-primary button3">여기에서 더 많은 의견을 확인하세요</button>
        </div>

        <div class="container mt-5">
            <div class="form-group">
                <input type="text" class="txt1 px-3" placeholder="이름">
            </div>
            <div class="form-group">
                <input type="text" class="txt1 px-3" placeholder="이메일">
            </div>
            <div class="form-group ">
                <textarea type="text" class="txt2 mt-1 px-3" placeholder="문의사항 "></textarea>
            </div>
        </div>



        <div class="container">
            <div style="display: flex; align-items: center; justify-content: flex-end;">

                <hr class="lignes" style="width: 300px;">
                <button class="btn btn-outline-primary button4 mx-3">제출</button>
            </div>
        </div>
        <div class="container my-5">
            <div class="card2 pt-5">
                <div>
                    <ul class="cardul d-flex justify-content-around" style="list-style-type: none">
                        <li><a href="#" class="show-paragraph" data-paragraph="ahla1">
                                <h5 id='tit1' style="font-size: 57px; color: #347EFF; text-align: Center;font-family: noto;">
                                    +12 M
                                </h5>
                                <h5 id='tit11' style="font-size: 31px; color: black; text-align: Center;font-family: noto;">
                                    2023년
                                    인구
                                </h5>
                            </a></li>
                        <li><a href="#" class="show-paragraph" data-paragraph="ahla12">
                                <h5 id='tit2' style="font-size: 42px; color: #B3B3B3; text-align: Center;font-family: noto;font-weight: bold;">
                                    2M
                                </h5>
                                <h5 id='tit22' style="font-size: 31px; color: #D9D9D9; text-align: Center;font-family: noto;">
                                    관광객
                                    200만명
                                </h5>
                            </a></li>
                        <li><a href="#" class="show-paragraph" data-paragraph="ahla13">
                                <h5 id='tit3' style="font-size: 42px; color: #B3B3B3; text-align: Center;font-family: noto;font-weight: bold;">700
                                </h5>
                                <h5 id='tit33' style="font-size: 31px; color: #D9D9D9; text-align: Center;font-family: noto;"> 역사적인
                                    장소
                                </h5>
                            </a></li>
                        <li><a href="#" class="show-paragraph" data-paragraph="ahla14">
                                <h5 id='tit4' style="font-size: 42px; color: #B3B3B3; text-align: Center;font-family: noto;font-weight: bold;">1
                                </h5>
                                <h5 id='tit44' style="font-size: 31px; color: #B3B3B3; text-align: Center;font-family: noto;"> 세계 1위
                                    대학
                                </h5>
                            </a></li>
                    </ul>
                    <p id="ahla1" style="display: block;text-align: start;font-size: 25px;margin:37px 43px;font-family: noto;">튀니지는 아프리카
                        북부에 위치한 나라로, 약 2023년 현재, 약 12,000만 명의 인구를 가지고 있습니다. 이 지역은 역사적으로 다양한 문화와 역동적인 역사를 자랑하며, 지중해 연안의 아름다운
                        해변과 역사적인 도시들이 매력적인 관광지로 알려져 있습니다.</p>
                    <p id="ahla12" style="display: none;text-align: start;font-size: 25px;margin:37px 43px;font-family: noto;">2021년 튀니지는
                        200만 명의 관광객을 맞이하며 관광업에서 상당한 부상을 보였습니다. 이 나라의 아름다운 지중해 해안선, 역사적 유산 및 다양한 명소는 전 세계에서 온 방문객을 끌어들이며 관광업
                        부문을 부흥시켰으며 번창한 미래에 대한 희망을 심었습니다.</p>
                    <p id="ahla13" style="display: none;text-align: start;font-size: 25px;margin:37px 43px;font-family: noto;">튀니지는 다양한
                        문명을 아우르는 약 700개의 역사적인 장소를 자랑합니다. 고대의 카르타고부터 도우까와 엘 잠까까와 같은 로마 시대 유적까지, 이러한 명소들은 지중해 지역의 역사를 매력적으로
                        보여주어 역사 애호가와 호기심 많은 여행자들에게 감탄을 자아냅니다.</p>
                    <p id="ahla14" style="display: none;text-align: start;font-size: 25px;margin:37px 43px;font-family: noto;">튀니지는 세계
                        최초의 대학이 있는 특별한 곳으로, 859년에 설립된 알 카라위인 대학은 유네스코로부터 세계에서 가장 오래된 학위 수여 대학으로 인정받았습니다. 이 고대 대학은 튀니지가 교육과
                        지적 발전에 대한 헌신을 강조합니다.</p>
                </div>
            </div>
        </div>
        <footer class="foot">
            <div class="footer-column">
                <div class="left-content">
                    <h3 style="font-size: 16px;text-align: end;">튀니지에 대해서</h3>
                    <ul style="font-size: 16px;">
                        <li><a href="#">역사</a> |</li>
                        <li><a href="#">음식</a> |</li>
                        <li style="font-weight: bold"><a href="#">문화</a> |</li>
                        <li><a href="#">목적지</a> |</li>
                        <li><a href="#">활동</a> |</li>
                        <li><a href="#">경제</a> |</li>
                        <li><a href="#">업적</a></li>
                    </ul>
                </div>

                <div class="right-content">
                    <h3 style="font-size: 32px;color: #347EFF"> 여행 정보</h3>
                    <ul style="
                    text-align: end;
                ">

                        <li><a href="#">공항</a> |</li>
                        <li><a href="#">호텔</a> |</li>
                        <li><a href="#">통화</a> |</li>
                        <li><a href="#">계절</a></li>
                        <bR>
                        <li class="ml-5"><a href="#">최고의 제안</a> |</li>
                        <li style="font-weight: bold"><a href="#">우리가 도울 수 있는 방법</a> |</li>
                        <li><a href="#">비상</a></li>
                    </ul>
                </div>
            </div>




            <div class="footer-images" style="display: flex; justify-content: space-between; height: 230px;">
                <div style="display: flex; justify-content: space-between;">
                    <img src="{{ asset('images/Group (3).png') }}" style="width: 93px; height: 62px;">
                    <img src="{{ asset('images/Group (4).png') }}" style="width: 93px; height: 62px;">
                    <img src="{{ asset('images/Group 52.png') }}" style="width: 93px; height: 62px;">
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <img src="{{ asset('images/Group 62.png') }}" style="width: 93px; height: 62px;">
                    <img src="{{ asset('images/Group 63.png') }}" style="width: 93px; height: 62px;">
                    <img src="{{ asset('images/Group 39589.png') }}" style="width: 93px; height: 62px;">
                </div>
                <div>
                    <div class="footer-images2" style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="titr" style="color: #8C8C8C;font-size: 14px;
                        width: 159px;">All rights
                            reserved</span>
                        <hr class="lignes ml-1 mr-3" style="margin: 0;">
                        <div class="img12" style="display: flex;">
                            <img src="{{ asset('images/Rectangle2.svg') }}">
                            <img src="{{ asset('images/MicrosoftTeams-image.png') }}" style="height: 24px;">
                            <img src="{{ asset('images/MicrosoftTeams-image_(1).png') }}" style="height: 24px;">
                        </div>
                    </div>
                    <div class="bloc2 ml-5">
                        <img src="{{ asset('images/fb.svg') }}" style="height: 18px; max-width: 17px; margin-right: 4%;">
                        <img src="{{ asset('images/ig.svg') }}" style="height: 18px; max-width: 17px; margin-right: 4%;">
                        <img src="{{ asset('images/yt.svg') }}" style="height: 18px; max-width: 26px;">
                    </div>
                </div>
            </div>
        </footer>



        <script>
            function changeImage1() {
                document.getElementById('imageCov1').style.display = "block";
                document.getElementById('imageCov2').style.display = "none";
                document.getElementById('imageCov3').style.display = "none";
                document.getElementById('imageCov4').style.display = "none";
                document.getElementById('imageB1').style.filter = 'none';
                document.getElementById('imageB2').style.filter = 'grayscale(100%)';
                document.getElementById('imageB3').style.filter = 'grayscale(100%)';
                document.getElementById('imageB4').style.filter = 'grayscale(100%)';
                document.getElementById('btn1').style.backgroundColor = '#347EFF';
                document.getElementById('btn1-b').style.backgroundColor = '#347EFF';
                document.getElementById('btn2').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn2-b').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn3').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn3-b').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn4').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn4-b').style.backgroundColor = '#B3B3B3';
            }

            function changeImage2() {
                document.getElementById('imageCov1').style.display = "none";
                document.getElementById('imageCov2').style.display = "block";
                document.getElementById('imageCov3').style.display = "none";
                document.getElementById('imageCov4').style.display = "none";
                document.getElementById('imageB2').style.filter = 'none';
                document.getElementById('imageB1').style.filter = 'grayscale(100%)';
                document.getElementById('imageB3').style.filter = 'grayscale(100%)';
                document.getElementById('imageB4').style.filter = 'grayscale(100%)';
                document.getElementById('btn1').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn1-b').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn2').style.backgroundColor = '#347EFF';
                document.getElementById('btn2-b').style.backgroundColor = '#347EFF';
                document.getElementById('btn3').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn3-b').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn4').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn4-b').style.backgroundColor = '#B3B3B3';

            }

            function changeImage3() {
                document.getElementById('imageCov1').style.display = "none";
                document.getElementById('imageCov2').style.display = "none";
                document.getElementById('imageCov3').style.display = "block";
                document.getElementById('imageCov4').style.display = "none";
                document.getElementById('imageB3').style.filter = 'none';
                document.getElementById('imageB2').style.filter = 'grayscale(100%)';
                document.getElementById('imageB1').style.filter = 'grayscale(100%)';
                document.getElementById('imageB4').style.filter = 'grayscale(100%)';
                document.getElementById('btn1').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn1-b').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn2').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn2-b').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn3').style.backgroundColor = '#347EFF';
                document.getElementById('btn3-b').style.backgroundColor = '#347EFF';
                document.getElementById('btn4').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn4-b').style.backgroundColor = '#B3B3B3';

            }

            function changeImage4() {
                document.getElementById('imageCov1').style.display = "none";
                document.getElementById('imageCov2').style.display = "none";
                document.getElementById('imageCov3').style.display = "none";
                document.getElementById('imageCov4').style.display = "block";
                document.getElementById('imageB4').style.filter = 'none';
                document.getElementById('imageB2').style.filter = 'grayscale(100%)';
                document.getElementById('imageB3').style.filter = 'grayscale(100%)';
                document.getElementById('imageB1').style.filter = 'grayscale(100%)';
                document.getElementById('btn1').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn1-b').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn2').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn2-b').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn3').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn3-b').style.backgroundColor = '#B3B3B3';
                document.getElementById('btn4').style.backgroundColor = '#347EFF';
                document.getElementById('btn4-b').style.backgroundColor = '#347EFF';
            }

            document.addEventListener("DOMContentLoaded", function() {
                const listItems = document.querySelectorAll(".show-paragraph");

                listItems.forEach(function(item) {
                    item.addEventListener("click", function(e) {
                        e.preventDefault();
                        const paragraphId = this.getAttribute("data-paragraph");
                        const paragraphs = document.querySelectorAll("p");

                        paragraphs.forEach(function(paragraph) {
                            if (paragraph.id === paragraphId) {
                                paragraph.style.display = "block";
                            } else {
                                paragraph.style.display = "none";
                            }
                        });

                        const liElements = document.querySelectorAll('.card ul li');
                        liElements.forEach(li => {
                            const dataParagraph = li.querySelector('a').getAttribute(
                                'data-paragraph');

                            const h5Elements = li.querySelectorAll('h5');

                            if (dataParagraph == item.getAttribute("data-paragraph")) {
                                h5Elements[0].style.fontSize = "57px";
                                h5Elements[0].style.color = "#347EFF";
                                h5Elements[1].style.fontSize = "31px";
                                h5Elements[1].style.color = "black";
                            } else {
                                h5Elements[0].style.fontSize = "42px";
                                h5Elements[0].style.color = "#B3B3B3";
                                h5Elements[1].style.fontSize = "31px";
                                h5Elements[1].style.color = "#D9D9D9";
                            }
                        });
                    });
                });
            });
        </script>
</body>

</html>