@include('layouts.front.head')

<body id="page-atlantis" class="tunisiatrip">
    {{-- nav bar --}}
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
        <section id="section-1 mt-5">
            <div class="text-center pt-5">
                <h2 class="main-title">ATLANTIS : Who are we?</h2>
            </div>
            <div class="card card-session1 radius-20 mt-lg-5">
                <div class="card-body mr-0 py-lg-4 row">
                    <div class="col-lg-5 h-100 pr-lg-5">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('images/Untitled-1.png') }}" class="w-100 mr-3" style="max-width: 150px;">
                            <div class="separator"></div>
                            <img src="{{ asset('images/CWT_Logo_Vector.svg') }}" class="img-fluid ml-3 mt-3" style="max-width: 130px;">
                        </div>


                        <p class="mb-lg-4 pt-lg-3">
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
                    <div class="col-lg-7 h-100 card-session4-cnt-imgs px-0">
                        <img src="{{ asset('images/O3.jpg') }}" class=" w-100 imgsess4 radius-20" id="imgsess1kb">
                        <div class="dirct">
                            <img src="{{ asset('images/flr.png') }}" onclick="chngimgsess1(-1)">
                            <img id='crclsess1' src="{{ asset('images/pt.png') }}">
                            <img id='crclsess2' src="{{ asset('images/crcl.png') }}">
                            <img id='crclsess3' src="{{ asset('images/crcl.png') }}">
                            <img src="{{ asset('images/fll.png') }}" onclick="chngimgsess1(1)">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="ligne-separtion"></div>

        {{-- section 2 --}}
        <section id="section-2 mt-5">
            <div class="text-center">
                <h2 class="main-title">A Message From our CEO</h2>
            </div>
            <div class="card-session2  radius-20 mt-lg-5">
                <div class=" row mx-0  p-0 my-0 w-100">
                    <div class="col-lg-6 sect2-prt1 px-0 h-100 p-lg-3">
                        <img src="{{ asset('images/crd1frst.png') }}" class="w-100 h-100 radius-20">
                    </div>
                    <div class="col-lg-6 h-100 py-3 pl-lg-5">
                        <div class="sect2-prt2 ">
                        <h2 class="sub-title pt-lg-3">"튀니지로 여러분을 초대합니다"</h2>

                        <p class="pt-lg-5">반갑습니다,</p>
                        <p>튀니지 아틀란티스 여행사 대표 카멜 라가입니다.</p>
                        <p>유구한 역사와 친절한 사람들로 유명한 튀니지로 여러분을 초대합니다.</p>
                        <p>튀니지는 프랑스 및 이탈리아에 인접하여,
                            아프리카와 유럽을 이어주는 다리 역할을 하고 있습니다.</p>
                        <p>아틀란티스는 진실한 마음과 오랜 경험을 토대로
                            튀니지의 아름다운 자연환경과 깊은 역사, 역동적인 현재를 넘나드는
                            최고의 여행을 안내해 드립니다.</p>
                        <p>곧 아름다운 튀니지에서 여러분을 만날 수 있기를 기대합니다.</p>
                        <h5 class="sub-sub-title pt-lg-4">카멜 라가,</h5>
                        <p>아틀란티스 여행사 대표</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="ligne-separtion"></div>

        {{-- section 3 --}}
        <section id="section-3 mt-5">
            <div class="text-center">
                <h2 class="main-title">Meet our Team Members</h2>
            </div>
            <div class="row session3-slick-web">
                <div class="card card-session3  mt-lg-5 col-lg-3">
                    <div class="card-body  row radius-20 text-center ">
                        <img src="{{ asset('images/Kamel.png') }}" class="imgface">
                        <h2 class="sub-title">카멜 라가 </h2>
                        <h2 class="sub-title">Kamel Lagha</h2>
                        <p>CEO of the agency</p>
                        <div class="d-flex align-items-center justify-content-center mt-lg-4"><img src="{{ asset('images/emil.png') }}" class="pr-2"><span
                              >Kamel@atlantis.tn</span></div>
                    </div>
                </div>
                <div class="card card-session3  mt-lg-5 col-lg-3">
                    <div class="card-body  row radius-20 text-center ">
                        <img src="{{ asset('images/Heidi.png') }}" class="imgface">
                        <h2 class="sub-title">정지혜</h2>
                        <h2 class="sub-title">Heidi Jung</h2>
                        <p>Korean department</p>
                        <div class="d-flex align-items-center justify-content-center mt-lg-4"><img src="{{ asset('images/emil.png') }}"
                                class="pr-2"> <span>jh.heidi.j@gmail.com</span></div>
                    </div>
                </div>
                <div class="card card-session3  mt-lg-5 col-lg-3">
                    <div class="card-body  row radius-20 text-center ">
                        <img src="{{ asset('images/Mariem.png') }}" class="imgface">
                        <h2 class="sub-title" >마리엠 조그라미</h2>
                        <h2 class="sub-title" >Meriem Zoghlami</h2>
                        <p >Executive management</p>
                        <div class="d-flex align-items-center justify-content-center mt-lg-4"><img src="{{ asset('images/emil.png') }}"
                                class="pr-2"><span>atlantis@atlantis.tn</span></div>
                    </div>
                </div>
                <div class="card card-session3  mt-lg-5 col-lg-3 mt-lg-4">
                    <div class="card-body  row radius-20 text-center ">
                        <img src="{{ asset('images/dunno.png') }}" class="imgface">
                        <h2 class="sub-title">소니아 벤 아모르 </h2>
                        <h2 class="sub-title">Sonia Ben Amor</h2>
                        <p>Tiketing Department</p>
                        <div class="d-flex align-items-center justify-content-center mt-lg-4"><img src="{{ asset('images/emil.png') }}"> <span
                               >Sonia.Benamor@atlantis.tn</span></div>
                    </div>
                </div>
            </div>

            <div class="row session3-slick-mobile">
                <div class="card card-session3  mt-lg-5 col-lg-3">
                    <div class="card-body  row radius-20 text-center ">
                        <img src="{{ asset('images/Kamel.png') }}" class="imgface">
                        <h2 class="sub-title">카멜 라가 </h2>
                        <h2 class="sub-title">Kamel Lagha</h2>
                        <p>CEO of the agency</p>
                        <div class="d-flex align-items-center justify-content-center mt-lg-4"><img src="{{ asset('images/emil.png') }}" class="pr-2"><span
                                id='crd1eml'>Kamel@atlantis.tn</span></div>
                    </div>
                </div>
                <div class="card card-session3  mt-lg-5 col-lg-3">
                    <div class="card-body  row radius-20 text-center ">
                        <img src="{{ asset('images/Heidi.png') }}" class="imgface">
                        <h2 class="sub-title">정지혜</h2>
                        <h2 class="sub-title">Heidi Jung</h2>
                        <p>Korean department</p>
                        <div class="d-flex align-items-center justify-content-center mt-lg-4"><img src="{{ asset('images/emil.png') }}"
                                class="pr-2"> <span>jh.heidi.j@gmail.com</span></div>
                    </div>
                </div>
                <div class="card card-session3  mt-lg-5 col-lg-3">
                    <div class="card-body  row radius-20 text-center ">
                        <img src="{{ asset('images/Mariem.png') }}" class="imgface">
                        <h2 class="sub-title" >마리엠 조그라미</h2>
                        <h2 class="sub-title" >Meriem Zoghlami</h2>
                        <p >Executive management</p>
                        <div class="d-flex align-items-center justify-content-center mt-lg-4"><img src="{{ asset('images/emil.png') }}"
                                class="pr-2"><span>atlantis@atlantis.tn</span></div>
                    </div>
                </div>
                <div class="card card-session3  mt-lg-5 col-lg-3">
                    <div class="card-body  row radius-20 text-center ">
                        <img src="{{ asset('images/dunno.png') }}" class="imgface">
                        <h2 class="sub-title">소니아 벤 아모르 </h2>
                        <h2 class="sub-title">Sonia Ben Amor</h2>
                        <p>Tiketing Department</p>
                        <div class="d-flex align-items-center justify-content-center mt-lg-4"><img src="{{ asset('images/emil.png') }}"> <span
                               >Sonia.Benamor@atlantis.tn</span></div>
                    </div>
                </div>
            </div>

        </section>

        <div class="ligne-separtion"></div>

        {{-- section 4 --}}
        <section id="section-4 mt-5">
            <div class="pt-lg-5 text-center">
                <h2 class="main-title">Car services</h2>
            </div>
            <div class="col-12 d-flex justify-content-around button1 mt-lg-5">
                <button id='choix0' class="p-2 btn btnactv" onclick="chngcontsess4(0)" >Car</button>
                <button id='choix1' class="p-2 btninactv" onclick="chngcontsess4(1)">Mini-Bus</button>
                <button id='choix2' class="p-2 btninactv" onclick="chngcontsess4(2)">Bus</button>
                <button id='choix3' class="p-2 btninactv" onclick="chngcontsess4(3)">Van</button>
            </div>
            <div class="card card-session4-cnt radius-20 mt-lg-5 p-lg-5">
                <div class="card-body p-lg-5 row">
                    <div class="col-lg-5  h-100 pr-lg-5">
                        <input hidden value=0 id='numcrd'>
                        <p class="mb-lg-4 psess4" id="psess4">고객의 필요에 따라 프라이빗 차량+운전기사 서비스를 이용할 수 있습니다.

                            공항-호텔 간 운행 및 비즈니스 미팅을 위한 다수의 회의 장소로 여러번의 이동이 가능하며 원하는 시간에 예약할 수 있습니다.

                            포함사항
                            - 운전기사 이용 요금, 주차비, 연료비, 통행료

                            불포함사항
                            - 투어 가이드, 개인 여행자 보험


                            places 1-4
                            Fee 상담 후 메일 안내</p>
                        <h5 class="sub-sub-title" id='h1sess4'>places 1-4</h5>
                        <h5 class="sub-sub-title" id='h2sess4'>Fee 상담 후 메일 안내</h5>
                    </div>
                    <div class="col-lg-7 h-100 card-session4-cnt-imgs px-0">
                        <img src="{{ asset('images/van1.jpg') }}" class=" w-100 imgsess4 radius-20" id="imgsess4kb">
                        <div class="dirct">
                            <img src="{{ asset('images/flr.png') }}" onclick="chngimgsess4(-1)">
                            <img id='crcl11' src="{{ asset('images/pt.png') }}">
                            <img id='crcl22' src="{{ asset('images/crcl.png') }}">
                            <img id='crcl33' src="{{ asset('images/crcl.png') }}">
                            <img src="{{ asset('images/fll.png') }}" onclick="chngimgsess4(1)">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="ligne-separtion"></div>

        {{-- section 5 --}}
        <section id="section-5 mt-5">
            <div class="text-center pb-lg-5">
                <h2 class="main-title">Hotels & Resorts</h2>
            </div>
            <div class="row sess5-crds  session5-slick-web"  id='sess5-crds'>
                <div class="col-lg-3 offset-lg-1 sess5crd radius-20">
                    <div class="mask-image">
                        <img id='sess5crd1img' src="{{ asset('images/sess5crd1.jpeg') }}" class="img-fluid"
                            alt="Carthage">
                    </div>
                    <img src="{{ asset('images/sess5crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p id="sess5crd1p">HAMMAMET, Tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 id="sess5crd1h2" class="sub-title sess5h2">Four Seasons Tunis</h2>
                </div>
                <div class="col-lg-3 sess5crd radius-20">
                    <div class="mask-image">
                        <img id='sess5crd2img' src="{{ asset('images/sess5crd2.jpeg') }}" class="img-fluid"
                            alt="Carthage">
                    </div>
                    <img src="{{ asset('images/sess5crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p id="sess5crd2p"> TOZEUR, Tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 id="sess5crd2h2" class="sub-title sess5h2">Anantara Tozeur</h2>
                </div>
                <div class="col-lg-3 sess5crd radius-20">
                    <div class="mask-image">
                        <img id='sess5crd3img' src="{{ asset('images/sess5crd3.jpeg') }}" class="img-fluid"
                            alt="Carthage">
                    </div>
                    <img src="{{ asset('images/sess5crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p id="sess5crd3p"> SOUSSE, Tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 id="sess5crd3h2" class="sub-title sess5h2">Movenpick Sousse</h2>
                </div>
                <div class="col-lg-3 offset-lg-1 sess5crd radius-20">
                    <div class="mask-image">
                        <img id='sess5crd4img' src="{{ asset('images/sess5crd4.jpeg') }}" class="img-fluid"
                            alt="Carthage">
                    </div>
                    <img src="{{ asset('images/sess5crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p id="sess5crd4p"> TUNIS, Tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 id="sess5crd4h2" class="sub-title sess5h2">The Residence Tunis</h2>
                </div>
                <div class="col-lg-3 sess5crd radius-20">
                    <div class="mask-image">
                        <img id='sess5crd5img' src="{{ asset('images/sess5crd5.jpeg') }}" class="img-fluid"
                            alt="Carthage">
                    </div>
                    <img src="{{ asset('images/sess5crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p id="sess5crd5p"> KAIROUAN, Tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 id="sess5crd5h2" class="sub-title sess5h2">Le Kasbah Kairouan</h2>
                </div>
                <div class="col-lg-3 sess5crd radius-20">
                    <div class="mask-image">
                        <img id='sess5crd6img' src="{{ asset('images/sess5crd6.jpeg') }}" class="img-fluid"
                            alt="Carthage">
                    </div> <img src="{{ asset('images/sess5crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p id="sess5crd6p"> TUNIS, Tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 id="sess5crd6h2" class="sub-title sess5h2">Sheraton Tunis</h2>
                </div>
            </div>
            <div class="row sess5-crds  session5-slick-mobile">
                <div class="col-lg-3 offset-lg-1 sess5crd radius-20">
                    <img id='sess5crd7img' src="{{ asset('images/sess5crd1.png') }}">
                    <img src="{{ asset('images/sess5crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p id="sess5crd1p">HAMMAMET, Tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 id="sess5crd1h2" class="sub-title sess5h2">Four Seasons Tunis</h2>
                </div>
                <div class="col-lg-3 sess5crd radius-20">
                    <img id='sess5crd2img' src="{{ asset('images/sess5crd2.png') }}">
                    <img src="{{ asset('images/sess5crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p id="sess5crd2p"> TOZEUR, Tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 id="sess5crd2h2" class="sub-title sess5h2">Anantara Tozeur</h2>
                </div>
                <div class="col-lg-3 sess5crd radius-20">
                    <img id='sess5crd3img' src="{{ asset('images/sess5crd3.png') }}">
                    <img src="{{ asset('images/sess5crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p id="sess5crd3p"> SOUSSE, Tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 id="sess5crd3h2" class="sub-title sess5h2">Movenpick Sousse</h2>
                </div>
                <div class="col-lg-3 offset-lg-1 sess5crd radius-20">
                    <img id='sess5crd4img' src="{{ asset('images/sess5crd4.png') }}">
                    <img src="{{ asset('images/sess5crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p id="sess5crd4p"> TUNIS, Tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 id="sess5crd4h2" class="sub-title sess5h2">The Residence Tunis</h2>
                </div>
                <div class="col-lg-3 sess5crd radius-20">
                    <img id='sess5crd5img' src="{{ asset('images/sess5crd5.png') }}">
                    <img src="{{ asset('images/sess5crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p id="sess5crd5p"> KAIROUAN, Tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 id="sess5crd5h2" class="sub-title sess5h2">Le Kasbah Kairouan</h2>
                </div>
                <div class="col-lg-3 sess5crd radius-20">
                    <img id='sess5crd6img' src="{{ asset('images/sess5crd6.png') }}">
                    <img src="{{ asset('images/sess5crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p id="sess5crd6p"> TUNIS, Tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 id="sess5crd6h2" class="sub-title sess5h2">Sheraton Tunis</h2>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5 sccgrp">
                <a class="carousel-control-prev flch" href="#carouselExampleIndicators" role="button"
                    data-slide="prev" onclick="srllcrdssess5(-1)">
                    <span class="carousel-control-prev-icon-gauche" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <span id='crcl1sess5'></span>
                <span id='crcl2sess5'></span>
                <a class="carousel-control-next flch" href="#carouselExampleIndicators" role="button"
                    data-slide="next" onclick="srllcrdssess5(1)">
                    <span class="carousel-control-prev-icon-droite" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <div class="ligne-separtion"></div>

        {{-- section 6 --}}
        <section id="section-6 mt-5">
            <div class="text-center pb-lg-5">
                <h2 class="main-title">Guest houses</h2>
            </div>
            <div class="row sess6-crds session6-slick-web mb-5">
                <div class="col-lg-3 offset-lg-1 sess6crd radius-20">
                    <img src="{{ asset('images/sess6crd.png') }}">
                    <img src="{{ asset('images/sess6crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p>Bizerte, tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 class="sub-title sess6h2">Dar el-emma</h2>
                </div>
                <div class="col-lg-3 sess6crd radius-20">
                    <img src="{{ asset('images/sess6crd.png') }}">
                    <img src="{{ asset('images/sess6crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p>Bizerte, tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 class="sub-title sess6h2">Dar el-emma</h2>
                </div>
                <div class="col-lg-3 sess6crd radius-20">
                    <img src="{{ asset('images/sess6crd.png') }}">
                    <img src="{{ asset('images/sess6crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p>Bizerte, tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 class="sub-title sess6h2">Dar el-emma</h2>
                </div>
            </div>
            <div class="row sess6-crds session6-slick-mobile">
                <div class="col-lg-3 offset-lg-1 sess6crd radius-20">
                    <img src="{{ asset('images/sess6crd.png') }}">
                    <img src="{{ asset('images/sess6crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p>Bizerte, tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 class="sub-title sess6h2">Dar el-emma</h2>
                </div>
                <div class="col-lg-3 sess6crd radius-20">
                    <img src="{{ asset('images/sess6crd.png') }}">
                    <img src="{{ asset('images/sess6crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p>Bizerte, tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 class="sub-title sess6h2">Dar el-emma</h2>
                </div>
                <div class="col-lg-3 sess6crd radius-20">
                    <img src="{{ asset('images/sess6crd.png') }}">
                    <img src="{{ asset('images/sess6crd1crcl.png') }}" class="cercle-img">
                    <p class="text-img">링크</p>
                    <div class="posit">
                        <img src="{{ asset('images/gps.png') }}" class="mr-2">
                        <p>Bizerte, tunisia</p>
                    </div>
                    <img src="{{ asset('images/note.png') }}" class="note">
                    <h2 class="sub-title sess6h2">Dar el-emma</h2>
                </div>
            </div>
        </section>

    </div>
    @include('layouts.front.footer')

    <script src="{{ asset('js/atlantis.js') }}"></script>
    <script>
        $('.session3-slick-mobile').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });
        $('.session5-slick-mobile').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });
        $('.session6-slick-mobile').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1
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
</body>

</html>
