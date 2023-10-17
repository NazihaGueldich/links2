@include('page1.javascript')
@include('page1.script')

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container justify-content-between">
            <div id="myTopnav">
                <img id="logimg" src="{{ asset('images/LogoProk.png') }}">
            </div>

            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav" style="width:572px;height:33px">

                    <li class="nav-item active d-flex align-items-center">
                        <img src="{{ asset('images/Flag_of_Tunisia.svg') }}" style="width: 24px; object-fit: cover;"
                            class="mr-1">
                        <a class="nav-link" href="#">4:09:27 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">튀니지에</a>
                    </li>
                    <li class="nav-item active mr-4">
                        <a class="nav-link" href="#">보다 더</a>
                    </li>

                    <li class="mr-3" >
                        <button type="button" class="btn btn-outline-primary  btn-main mr-2">문의하기</button>

                        <button type="button" class="btn btn-outline-primary" style="border-radius:8px">
                            <i class="fas fa-search"></i>
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
                        <li data-target="#myCarousel" data-slide-to="0" class=" rounded-circle"
                            style="width: 16px;
                        height: 16px;"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class="rounded-circle"
                            style="width: 16px;
                    height: 16px;"></li>
                        <li data-target="#myCarousel" data-slide-to="2" class="rounded-circle"
                            style="width: 16px;
                    height: 16px;"></li>
                    </ol>
                </div>
            </div>
        </div>

    </main>


    <div class= "container mt-5">
        <div class="flex-container" style="display: flex;  justify-content: center;    justify-content: space-evenly;">
            <div class="flex-item">
                <img id='img1' src="{{ asset('images/atlantis_button_1_state_0.svg') }}" style="height: 70px;">
                <p id="p1">호텔</p>
            </div>
            <div class=" ligne1 m-4 lg">|</div>
            <div style="display: flex; align-items: center; flex-direction: column;"><img id='img2'
                    src="{{ asset('images/atlantis_button_2_state_0.svg') }}" style="height: 70px;">
                <p id="p2">항공편</p>
            </div>
            <div class="ligne1 m-4 lg">|</div>
            <div style="display: flex; align-items: center; flex-direction: column;"><img id='img3'
                    src="{{ asset('images/atlantis_button_3_state_0.svg') }}" style="height: 70px;">
                <p id="p3">축제</p>
            </div>
            <div class="ligne1 m-4 lg">|</div>
            <div style="display: flex; align-items: center; flex-direction: column;"><img id='img4'
                    src="{{ asset('images/atlantis_button_4_state_0.svg') }}" style="height: 70px;">
                <p id="p4">활동</p>
            </div>
            <div class="ligne1 m-4 lg">|</div>
            <div style="display: flex; align-items: center; flex-direction: column;"><img id='img5'
                    src="{{ asset('images/atlantis_button_5_state_0.svg') }}" style="height: 70px;">
                <p id="p5">자동차 서비스</p>
            </div>
            <div class="ligne1 m-4 lg">|</div>
            <div style="display: flex; align-items: center; flex-direction: column;"><img id='img6'
                    src="{{ asset('images/atlantis_button_6_state_0.svg') }}" style="height: 70px;">
                <p id="p6">크루즈</p>
            </div>
            <div class="ligne1 m-4 lg">|</div>
            <div style="display: flex; align-items: center; flex-direction: column;"><img id='img7'
                    src="{{ asset('images/atlantis_button_7_state_0.svg') }}" style="height: 70px;">
                <p id="p7">박물관</p>
            </div>
        </div>
    </div>






    <div class="container mt-5">
        <div class="row">
            {{-- image 1 --}}
            <div class="col-6 r-image1">
                <div style="background-image: url('{{ asset('images/image 4.png') }}')" class="image-1">
                    <div class="d-flex flex-column align-items-center">
                        <div class="d-flex flex-column align-items-start mr-5">
                            <button class="btn btn-outline-primary mt-4 r-btn1 mr-6">고고학 유적지</button>
                        </div>
                        {{--     <div class="r-text1">
                        튀니지
                        <br>파란 하늘 푸른 바다
                    </div>
 --}}
                    </div>

                </div>
            </div>
            {{-- bloc 1 --}}
            <div class="col-6">
                <div class="d-flex">
                    <div class="m-2">
                        <div style="background-image: url('{{ asset('images/Rectangle (2).png') }}');  background-size: cover;"
                            class="image-2">
                            <div class="d-flex flex-column align-items-center">
                                <div>
                                    <button type="button" class="btn btn-outline-primary mt-4 r-btn2">튀니지 미식
                                        체험</button>
                                </div>
                                {{--  <div class="r-text2">
                                튀니지
                                <br>파란 하늘 푸른 바다
                            </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="m-2">
                        <div style="background-image: url('{{ asset('images/Asset 6@2x 1.png') }}'); background-size: cover;"
                            class="image-3">
                            <div class="d-flex flex-column align-items-center">
                                <div>
                                    <button type="button" class="btn btn-outline-primary  mt-4 r-btn3">메디나
                                        역사지구</button>
                                </div>
                                {{--       <div class="r-text3">
                                튀니지
                                <br>파란 하늘 푸른 바다
                            </div> --}}
                            </div>
                        </div>
                    </div>
                </div>


                <div class="d-flex">
                    <div class="m-2">
                        <div style="background-image: url('{{ asset('images/tiniseeee.jpg') }}');background-size: cover;"
                            class="image-4">
                            <div class="d-flex flex-column align-items-center">
                                <div>
                                    <button type="button" class="btn btn-outline-primary  mt-4 r-btn4">즐길거리</button>
                                </div>
                                {{--       <div class="r-text4">
                                튀니지
                                <br>파란 하늘 푸른 바다
                            </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="m-2">
                        <div style="background-image: url('{{ asset('images/Asset 5@2x 1.png') }}');background-size: cover;"
                            class="image-4">
                            <div class="d-flex flex-column align-items-center">
                                <div>
                                    <button type="button" class="btn btn-outline-primary  mt-4 r-btn5">인기
                                        목적지</button>
                                </div>
                                {{--                             <div class="r-text5">
                                튀니지
                                <br>파란 하늘 푸른 바다
                            </div> --}}
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
            <video id="my-video" class="video-js" controls preload="auto" width="740" height="385"
                poster="images/sahrouch.png">
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
    background-position: center center;"
            class="image1-2">

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


        <div class="mt-3 ml-2">
            <div class="d-flex">
                <div class="d-flex flex-column align-items-center">
                    <img src="{{ asset('images/MicrosoftTeams-image (3).png') }}" class="imageB1 mr-3">
                    <div class="d-flex flex-column align-items-start">
                        <span class="text-p ">튀니스</span>
                        <div class=" d-flex justify-content-between">
                            <button class="btn btn-outline-primary btn1-b text-center mr">수도</button>
                            <button class="btn btn-outline-primary btn1-b1 ml-2 text-center">동쪽</button>
                        </div>

                    </div>

                </div>

                <div class="d-flex flex-column align-items-center">
                    <img src="{{ asset('images/Rectangle 821.png') }}" class="imageB2 mr-3">
                    <div class="d-flex flex-column align-items-start">
                        <span class="text-p2">두즈</span>
                        <div class=" d-flex justify-content-between">
                            <button class="btn btn-outline-primary btn2 text-center">따뜻한</button>
                            <button class=" btn btn-outline-primary btn1-b2 ml-2 text-center">남쪽</button>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column align-items-center">
                    <img src="{{ asset('images/Rectangle 822.png') }}" class="imageB3 mr-3">
                    <div class="d-flex flex-column align-items-start">
                        <span class="text-p3">카이루안</span>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-outline-primary   btn3 text-center">따뜻한</button>
                            <button class="btn btn-outline-primary btn1-b3 ml-2 text-center">남쪽</button>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column align-items-center">
                    <img src="{{ asset('images/ooi.png') }}" class="imageB4 mr-3 ">
                    <div class="d-flex flex-column align-items-start">
                        <span class="text-p4">마트마타</span>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-outline-primary btn4 text-center">따뜻한</button>
                            <button class="btn btn-outline-primary btn1-b4 ml-2 text-center">해변</button>
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
                <div class="card mx-auto"
                    style="width: 788px; border-radius: 20px; border: 1px solid #B3B3B3; margin-bottom: 20px;">
                    <div class="row no-gutters">
                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                            <img id="imgwj1" src="{{ asset('images/BG (3).png') }}"
                                style="width: 91.88px; height: 91.88px; object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h5 class="card-title">오OO</h5>
                                <p class="card-text text-left">유럽같으면서 아랍적인 독특한 매력을 가진 나라 튀니지．
                                    <br>지중해를 배경으로 하는 시디부사이드의 모습은 아직도 잊지 못할 것 같습니다．
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vertical-line"></div>
                <div class="card mx-auto"
                    style="width: 788px; border-radius: 20px; border: 1px solid #B3B3B3; margin-bottom: 20px;">
                    <div class="row no-gutters">
                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                            <img id="imgwj1" src="{{ asset('images/BG (2).png') }}"
                                style="width: 91.88px; height: 91.88px; object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h5 class="card-title">오OO</h5>
                                <p class="card-text text-left">튀니지를 도착했을때 아 이곳이 북아프리카구나，
                                    했던 생각들이 이주일 뒤엔 이곳이 그리스인가？ 하고 바뀌었어요．
                                    갔다 와 보시면 아실거예요．.
                                    죽기 전에 꼭 다시 한번 와보고 싶다 하는것을！II 매일 점심마다 400원 주고 ...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vertical-line"></div>
                <div class="card mx-auto"
                    style="width: 788px; border-radius: 20px; border: 1px solid #B3B3B3; margin-bottom: 20px;">
                    <div class="row no-gutters">
                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                            <img id="imgwj1" src="{{ asset('images/BG1 (2).png') }}"
                                style="width: 91.88px; height: 91.88px; object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h5 class="card-title">오OO</h5>
                                <p class="card-text text-left">유럽같으면서 아랍적인 독특한 매력을 가진 나라 튀니지．
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
                <input type="text" class="txt1" placeholder="이름">
            </div>
            <div class="form-group">
                <input type="text" class="txt1" placeholder="이메일">
            </div>
            <div class="form-group ">
                <textarea type="text" class="txt2 mt-1" placeholder="문의사항 "></textarea>
            </div>
        </div>



        <div class="container">
            <div style="display: flex; align-items: center; justify-content: flex-end;">

                <hr class="lignes">
                <button class="btn btn-outline-primary button4">제출</button>
            </div>
        </div>
        <div class="container mt-5">
            <div class="card2 ">
                <div class="card-body mt-5">
                    <ul class="list-unstyled cardul d-flex justify-content-between align-items-center">
                        <li>
                            <a href="#" class="show-paragraph" data-paragraph="ahla1">
                                <h5>+12 M</h5>
                                <span>2023년 인구</span>
                            </a>

                        </li>
                        <div class="vertical-alignes"></div>
                        <li>
                            <a href="#" class="show-paragraph2" data-paragraph="ahla12">
                                <h5 class="ml-5">2M</h5>
                                <span>관광객 200만명</span>
                            </a>
                        </li>
                        <div class="vertical-alignes"></div>
                        <li>
                            <a href="#" class="show-paragraph3" data-paragraph="ahla13">
                                <h5 class="ml-5">700</h5>
                                <span>역사적인 장소</span>
                            </a>
                        </li>
                        <div class="vertical-alignes"></div>
                        <li>
                            <a href="#" class="show-paragraph4" data-paragraph="ahla14">
                                <h5 class="ml-5">1</h5>
                                <span>세계 1위 대학</h5>
                            </a>
                        </li>
                    </ul>
                    <p id="ahla1" style="display: block;text-align: start;font-size: 25px;margin:37px 43px;">튀니지는
                        아프리카
                        북부에 위치한 나라로, 약 2023년 현재, 약 12,000만 명의 인구를 가지고 있습니다. 이 지역은 역사적으로 다양한 문화와 역동적인 역사를 자랑하며, 지중해 연안의
                        아름다운
                        해변과 역사적인 도시들이 매력적인 관광지로 알려져 있습니다.</p>
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
                    <div class="footer-images2"
                        style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="titr"
                            style="color: #8C8C8C;font-size: 14px;
                        width: 159px;">All rights
                            reserved</span>
                        <hr class="lignes ml-1">
                        <div class="img12" style="display: flex;">
                            <img src="{{ asset('images/Rectangle2.svg') }}">
                            <img src="{{ asset('images/MicrosoftTeams-image.png') }}" style="height: 24px;">
                            <img src="{{ asset('images/MicrosoftTeams-image_(1).png') }}" style="height: 24px;">
                        </div>
                    </div>
                    <div class="bloc2 ml-5">
                        <img src="{{ asset('images/fb.svg') }}"
                            style="height: 18px; max-width: 17px; margin-right: 4%;">
                        <img src="{{ asset('images/ig.svg') }}"
                            style="height: 18px; max-width: 17px; margin-right: 4%;">
                        <img src="{{ asset('images/yt.svg') }}" style="height: 18px; max-width: 26px;">
                    </div>
                </div>
            </div>
        </footer>




</body>

</html>
