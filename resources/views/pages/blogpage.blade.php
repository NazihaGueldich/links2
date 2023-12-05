@include('layouts.front.head')

<body id="blog-page">
    @include('layouts.front.header')

        {{-- icons --}}
        <main class="container">
        <div class="flex-container pt-5 sessicn">
            <a href="about-atlantis#ligne-section-5">
                <div class="icns" onmouseenter="changeImage(true,1)" onmouseleave="changeImage(false,1)">
                    <img id='img1' src="{{ asset('images/Icon_1_Second_Animation.gif') }}" class="imgicns">
                    <p id="p1" class="txticns">호텔</p>
                </div>
            </a>
            <div class=" ligne1 m-4 lg">|</div>
            <a href="sub-page#ligne-section3">
                <div class="icns" onmouseenter="changeImage(true,2)" onmouseleave="changeImage(false,2)"><img
                        id='img2' src="{{ asset('images/Icon_2_Second_Animation.gif') }}" class="imgicns">
                    <p id="p2" class="txticns">항공편</p>
                </div>
            </a>
            <div class="ligne1 m-4 lg">|</div>
            <a href="travel-information#p3-section5">
                <div class="icns" onmouseenter="changeImage(true,3)" onmouseleave="changeImage(false,3)"><img
                        id='img3' src="{{ asset('images/Icon_3_Second_Animation.gif') }}" class="imgicns">
                    <p id="p3" class="txticns">축제</p>
                </div>
            </a>
            <div class="ligne1 m-4 lg">|</div>
            <a href="about-tunisia#ligne-section9">
                <div class="icns" onmouseenter="changeImage(true,4)" onmouseleave="changeImage(false,4)"><img
                        id='img4' src="{{ asset('images/Icon_4_Second_Animation.gif') }}" class="imgicns">
                    <p id="p4" class="txticns">활동</p>
                </div>
            </a>
            <div class="ligne1 m-4 lg">|</div>
            <a href="about-atlantis#to-section-4">
                <div class="icns" onmouseenter="changeImage(true,5)" onmouseleave="changeImage(false,5)"><img
                        id='img5' src="{{ asset('images/Icon_5_Second_Animation.gif') }}" class="imgicns">
                    <p id="p5" class="txticns">자동차 서비스</p>
                </div>
            </a>
            <div class="ligne1 m-4 lg">|</div>
            <a href="sub-page#Popular-Tour">
                <div class="icns" onmouseenter="changeImage(true,6)" onmouseleave="changeImage(false,6)"><img
                        id='img6' src="{{ asset('images/Icon_6_Second_Animation.gif') }}" class="imgicns">
                    <p id="p6" class="txticns">크루즈</p>
                </div>
            </a>
            <div class="ligne1 m-4 lg">|</div>
            <a href="travel-information#p3-section4">
                <div class="icns" onmouseenter="changeImage(true,7)" onmouseleave="changeImage(false,7)"><img
                        id='img7' src="{{ asset('images/Icon_7_Second_Animation.gif') }}" class="imgicns">
                    <p id="p7" class="txticns">박물관</p>
                </div>
            </a>
        </div>
        </main>
        {{-- section 1 --}}
        <section id='section1' class="container">
            <h2 class="main-title text-center">
                <span class="title-new">New</span> To the Unknown Beauties of Tunisia with Hae In Jung
            </h2>
            <div class="wrap-video w-100">
                <iframe class="video-js" src="https://www.youtube.com/embed/21r1M3L-yqM?si=4nA-T16uk1ekfLQ6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            </div>
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
                <button id='itm0' class="item-actv" onclick="changSection6(0)">All</button>
                <button id='itm1' class="item-inactv" onclick="changSection6(1)">Popular</button>
                <button id='itm2' class="item-inactv" onclick="changSection6(2)">News</button>
                <button id='itm3' class="item-inactv" onclick="changSection6(3)">Travel Tips</button>
                <button id='itm4' class="item-inactv" onclick="changSection6(4)">Food</button>
                <button id='itm5' class="item-inactv" onclick="changSection6(5)">Archeological Sites</button>
            </div>
        </section>
        {{-- section 4 --}}
        <section id='section4'>
            <h2 class="main-title text-center">Videos About TUNISIA</h2>
            <div class=" slick-sect4">
                <div >
                    <div class="wrap-video pb-lg-0">
                        <video id="-video" class="video-js" preload="auto"
                            poster="images/Creator-Talking-Tunisia.png">
                            <source src="images/Tozeur.mp4" type="video/mp4" />
                        </video>
                        <div class="video-overlay">
                            <p id="video-title" class="sub-title">Discover Tozeur</p>
                            <button id="play-btn" class="btn">Play Video <img src="images/Arrow Right Blue.png"
                                    alt="Arrow Right Blue"></button>
                        </div>
                    </div>


                </div>
                <div >
                    <div class="wrap-video pb-lg-0">
                        <video id="-video2" class="video-js" preload="auto"
                            poster="images/Creator-Talking-Tunisia 2.png">
                            <source src="images/video2.mp4" type="video/mp4" />
                        </video>
                        <div class="video-overlay" id='crd2'>
                            <button id="play-btn2" class="btn">Play Video <img src="{{ asset('images/Arrow Right white.png') }}"
                                alt="Arrow Right white">
                        </button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="wrap-video pb-lg-0">
                        <video id="-video3" class="video-js" preload="auto"
                            poster="images/sahrouch.png">
                            <source src="images/vd.mp4" type="video/mp4" />
                        </video>
                        <div class="video-overlay" id='crd3'>
                                <button id="play-btn3" class="btn">Play Video <img src="{{ asset('images/Arrow Right Blue.png') }}"
                                    alt="Arrow Right white">
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="ligne-separtion"></div>
        {{-- section 5 --}}
        <section id='section5'>
            <h2 class="main-title text-center">Articles</h2>
            <div id='section5-cont'>
                <div class="crdsess5  p-lg-5 mt-lg-3">
                    <div class="row">
                        <div class="col-lg-6 crdsess5-prt1">
                            <img class='crdsess5-img' src="{{ asset('images/Bardo_museum.jpg') }}"
                                alt="Bardo National Museum">
                        </div>
                        <div class="col-lg-6 pl-lg-5 crdsess5-prt2">
                            <p class="sub-title ">바르도 박물관</p>
                            <p>바르도 박물관은 튀니지 전역에서 발굴된 유물들을 비롯해 그리스, 로마, 이집트 유물을 시대별로 전시해 놓았어요.</p>
                            <p> 특히 고대의 다양한 모자이크 장식품 등이 전시돼 있어세계 최대의 모자이크 전시관으로 유명합니다.</p>
                            <div>
                                <button class="btn">Read more <i class="fas fa-arrow-right"></i></button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="crdsess5  p-lg-5 mt-lg-5">
                    <div class="row">
                        <div class="col-lg-6 crdsess5-prt1">
                            <img class='crdsess5-img' src="{{ asset('img/Trans_Taxi.jpg') }}" alt="Hot hatch">
                        </div>
                        <div class="col-lg-6 pl-lg-5 crdsess5-prt2">
                            <p class="sub-title ">택시</p>
                            <p>튀니지의 택시는 노란색이라 눈에 쉽게 띈다는 장점이 있어요.</p>
                            <p> 택시는 미터 택시와 앱 택시로 나눌 수 있고, 둘의 요금 지급 방식이 달라요..</p>
                            <div>
                                <button class="btn">Read more <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="crdsess5  p-lg-5 mt-lg-5">
                    <div class="row">
                        <div class="col-lg-6 crdsess5-prt1">
                            <img class='crdsess5-img' src="{{ asset('images/Couscous.jpg') }}"
                            alt="kouskous with osban">
                        </div>
                        <div class="col-lg-6 pl-lg-5 crdsess5-prt2">
                            <p class="sub-title ">쿠스쿠스</p>
                            <p>듀럼밀을 갈아서 만든 ‘세몰리나’ 알갱이에 양고기, 생선, 당근과 감자 등을 함께 쪄서 만든 요리예요.</p>
                            <div>
                                <button class="btn">Read more <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="crdsess5  p-lg-5 mt-lg-5">
                    <div class="row">
                        <div class="col-lg-6 crdsess5-prt1">
                            <img class='crdsess5-img' src="{{ asset('images/lablebi.png') }}" alt="Lablebi">
                        </div>
                        <div class="col-lg-6 pl-lg-5 crdsess5-prt2">
                            <p class="sub-title ">라블라비</p>
                            <p>마늘과 커민 향이 나는 맑은 국물에 마른 병아리콩을 넣어 만든 튀니지 병아리콩 수프예요.</p>
                            <div>
                                <button class="btn">Read more <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="d-flex justify-content-center mt-5 ">
                    <a class="carousel-control-prev flch"  role="button"
                        data-slide="prev" onclick="BPsrllcrdssess5(-1)">
                        <span class="carousel-control-prev-icon-gauche" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <span id='crcl1sess5'></span>
                    <span id='crcl2sess5'></span>
                    <span id='crcl3sess5'></span>
                    <a class="carousel-control-next flch"  role="button"
                        data-slide="next" onclick="BPsrllcrdssess5(1)">
                        <span class="carousel-control-prev-icon-droite" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div> --}}
            </div>
        </section>
        <script>
            const videos = document.querySelectorAll('video');

            videos.forEach(video => {
                video.addEventListener('play', () => {
                    pauseOtherVideos(video);
                });
            });

            function pauseOtherVideos(currentVideo) {
                videos.forEach(video => {
                    if (video !== currentVideo && !video.paused && !video.ended) {
                        video.pause();
                    }
                });
            }
        </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myVideo = document.getElementById('-video');
            var playButton = document.getElementById('play-btn');

            myVideo.controls = false;


            function playVideo() {
                myVideo.play();
                myVideo.controls = true;
            }

            playButton.addEventListener('click', playVideo);
        });


        document.addEventListener("DOMContentLoaded", function() {
            const playButton = document.getElementById('play-btn');
            const video = document.getElementById('-video');
            const videoTitle = document.getElementById('video-title');

            playButton.addEventListener('click', function() {
                video.play();
                playButton.style.display = 'none';
                videoTitle.style.display = 'none';
            });

            video.addEventListener('play', function() {
                playButton.style.display = 'none';
                videoTitle.style.display = 'none';
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var myVideo = document.getElementById('-video2');
            var playButton = document.getElementById('play-btn2');

            myVideo.controls = false;


            function playVideo() {
                myVideo.play();
                myVideo.controls = true;
            }

            playButton.addEventListener('click', playVideo);
        });


        document.addEventListener("DOMContentLoaded", function() {
            const playButton = document.getElementById('play-btn2');
            const video = document.getElementById('-video2');

            playButton.addEventListener('click', function() {
                video.play();
                playButton.style.display = 'none';
            });

            video.addEventListener('play', function() {
                playButton.style.display = 'none';
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var myVideo = document.getElementById('-video3');
            var playButton = document.getElementById('play-btn3');

            myVideo.controls = false;


            function playVideo() {
                myVideo.play();
                myVideo.controls = true;
            }

            playButton.addEventListener('click', playVideo);
        });


        document.addEventListener("DOMContentLoaded", function() {
            const playButton = document.getElementById('play-btn3');
            const video = document.getElementById('-video3');

            playButton.addEventListener('click', function() {
                video.play();
                playButton.style.display = 'none';
                videoTitle.style.display = 'none';
            });

            video.addEventListener('play', function() {
                playButton.style.display = 'none';
                videoTitle.style.display = 'none';
            });
        });


    </script>

    @include('layouts.front.footer')
