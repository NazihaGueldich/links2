@include('layouts.front.head')


<body id="page-subpage">
    @include('layouts.front.header')
    {{-- session 1 --}}
    <section id="section1">
        <img src="{{ asset('images/Tunisie-Sahara.png') }}" class="img1" alt="Tunisie Sahara">
        <div class="overlay-content">
            <img id='icnav' src="{{ asset('images/avion.png') }}" alt="Avion"
                class=" d-flex align-items-center justify-content-center">
            <span class="text">지중해의 보석 튀니지로 떠나요!</span>
        </div>
    </section>
    <div class="sec-con pb-1 pt-4">
        <div class="container">
            {{-- section 2 --}}
            <section id='section2'>
                <div>
                    <p>꿈에 그리던 튀니지 여행을 맞춤화하려면 저희에게 연락하세요.</p>
                    <p class="sub-title sub-title2-3">아틀란티스가 함께합니다.</p>
                </div>
                <div class="button-sub">
                <button type="button"
                    class="btn btn-outline-primary d-flex align-items-center btnsect2 radius-20 pr-lg-4 pl-lg-4">
                    <img src="{{ asset('images/enveloppe.png') }}" alt="Enveloppe">문의하기</button>
                </div>
            </section>
        </div>
    </div>
    <div class="container">
        {{-- session 3 --}}
        <section id='section3'>
            <h2 class="main-title text-center">How to get from KOREA to TUNISIA</h2>
            <p class="text-center">한국에서 튀니지로 여행하는 주요 3가지 방법은 다음과 같습니다</p>
            <div id='slick-section3-web' class="slick-section3-web">
                <div class="pr-lg-3">
                    <div class="crdsess3">
                        <div class="crdsess3prt1 m-3">
                            <p class="sub-sub-title text-center">Qatar Airways</p>
                        </div>
                        <div class="crdsess3prt2">
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">인천<strong>한국</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">도하<strong>카타르</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">5 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스<strong> 튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-lg-3">
                    <div class="crdsess3">
                        <div class="crdsess3prt1 m-3">
                            <p class="sub-sub-title text-center">Turkish airlines</p>
                        </div>
                        <div class="crdsess3prt2">
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">인천<strong> 한국</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">도하 <strong> 카타르</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">5 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스<strong> 튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-lg-3">
                    <div class="crdsess3">
                        <div class="crdsess3prt1 m-3">
                            <p class="sub-sub-title text-center">Airfrance</p>
                        </div>
                        <div class="crdsess3prt2">
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">인천<strong> 한국</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">파리 <strong>프랑스</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">5 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스<strong> 튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-lg-3">
                    <div class="crdsess3">
                        <div class="crdsess3prt1 m-3">
                            <p class="sub-sub-title text-center">Emirates</p>
                        </div>
                        <div class="crdsess3prt2">
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">인천 <strong>한국</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">두바이 <strong>(아랍에미리트)</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스 <strong> 튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id='slick-section3-mobil' class="slick-section3-mobil">
                <div >
                    <div class="crdsess3">
                        <div class="crdsess3prt1 m-3">
                            <p class="sub-sub-title text-center">Qatar Airways</p>
                        </div>
                        <div class="crdsess3prt2">
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">인천<strong>한국</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">도하<strong>카타르</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">5 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스<strong> 튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div >
                    <div class="crdsess3">
                        <div class="crdsess3prt1 m-3">
                            <p class="sub-sub-title text-center">Turkish airlines</p>
                        </div>
                        <div class="crdsess3prt2">
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">인천<strong> 한국</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">도하 <strong> 카타르</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">5 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스<strong> 튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div >
                    <div class="crdsess3">
                        <div class="crdsess3prt1 m-3">
                            <p class="sub-sub-title text-center">Airfrance</p>
                        </div>
                        <div class="crdsess3prt2">
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">인천<strong> 한국</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">파리 <strong>프랑스</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">5 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스<strong> 튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div >
                    <div class="crdsess3">
                        <div class="crdsess3prt1 m-3">
                            <p class="sub-sub-title text-center">Emirates</p>
                        </div>
                        <div class="crdsess3prt2">
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">인천 <strong>한국</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">두바이 <strong>(아랍에미리트)</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스 <strong> 튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="ligne-separtion"></div>

        {{-- session 4 --}}
        <section id='section4'>
            <h2 class="main-title text-center">Our Most Popular Tour</h2>
            <p class="text-center">아틀란티스가 제안하는 8일 튀니지 추천 여행 일정</p>
            <div id="section4-part1" class="mt-lg-5">
                <div class="row p-4 mr-0">
                    <div class="col-lg-6 py-lg-4 section4-part1-part1">
                        <h2 class="sub-title">튀니지 5성급 일주 </h2>
                        <p>- 사하라사막 포함 </p>
                        <p>- 스타워즈 촬영지 방문</p>
                        <p>- 프리미엄 호텔 숙박 </p>
                        <p>- 영어 가이드 동행</p>
                    </div>
                    <div class="col-lg-6">
                        <img id='imgsesss4' src="{{ asset('images/cont.png') }}" alt="Tunisie Sahara">
                    </div>
                </div>
            </div>
            {{-- web --}}
            <div class=" mt-5 section4-part2 section4-part2-web">
                <div class="row">
                    <div class="col-lg-6 d-flex h-100">
                        <button type="button" class="btn btn-outline-primary  radius-20 ">DAY 1</button>
                        <div class='sect4crd ml-lg-3 w-100'>
                            <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                            <div class="pl-lg-3">
                                <p class="sub-sub-title mb-1">튀니지 도착</p>
                                <p> 카르타고 유적지 - 시디 부 사이드</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex h-100">
                        <button type="button" class="btn btn-outline-primary  radius-20 ">DAY 5</button>
                        <div class='sect4crd ml-lg-3 w-100'>
                            <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                            <div class="pl-lg-3">
                                <p class="sub-sub-title mb-1">두즈 - 마트마타 - 스팍스 (숙박) </p>
                                <p> 쇼트 엘 제리드 소금호수 - 동굴도시</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex h-100">
                        <button type="button" class="btn btn-outline-primary  radius-20 ">DAY 2</button>
                        <div class='sect4crd ml-lg-3 w-100'>
                            <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                            <div class="pl-lg-3">
                                <p class="sub-sub-title mb-1">두가</p>
                                <p> 두가 로마 원형극장</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex h-100">
                        <button type="button" class="btn btn-outline-primary  radius-20 ">DAY 6</button>
                        <div class='sect4crd ml-lg-3 w-100'>
                            <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                            <div class="pl-lg-3">
                                <p class="sub-sub-title mb-1">엘젬</p>
                                <p> 엘젬 원형극장(콜로세움) - 엘젬 박물관</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex h-100">
                        <button type="button" class="btn btn-outline-primary  radius-20 ">DAY 3</button>
                        <div class='sect4crd ml-lg-3 w-100'>
                            <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                            <div class="pl-lg-3">
                                <p class="sub-sub-title mb-1">카이루완 - 스베틀라 - 토주르 (숙박)</p>
                                <p> 카이루완 대모스크 - 카펫 구경 - 스베틀라 고고학 건축물</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex h-100">
                        <button type="button" class="btn btn-outline-primary  radius-20 ">DAY 7</button>
                        <div class='sect4crd ml-lg-3 w-100'>
                            <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                            <div class="pl-lg-3">
                                <p class="sub-sub-title mb-1">수스</p>
                                <p> 메디나 - 리바트</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex h-100">
                        <button type="button" class="btn btn-outline-primary  radius-20 ">DAY 4</button>
                        <div class='sect4crd ml-lg-3 w-100'>
                            <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                            <div class="pl-lg-3">
                                <p class="sub-sub-title mb-1">토주르 - 쉐비카 - 타메르자 </p>
                                <p> 오아시스 = 스타워즈 촬영지</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex h-100">
                        <button type="button" class="btn btn-outline-primary  radius-20 ">DAY 8</button>
                        <div class='sect4crd ml-lg-3 w-100'>
                            <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                            <div class="pl-lg-3">
                                <p class="sub-sub-title mb-1">튀니스 </p>
                                <p> 바르도 박물관 - 튀니스 메디나</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" mt-5 section4-part2 section4-part2-mobil">
                <div class="slick-section4">
                    <div class="row">
                        <div class="col-lg-6 d-flex h-100">
                            <button type="button" class="btn btn-outline-primary  radius-20 ">DAY 1</button>
                            <div class='sect4crd ml-lg-3 w-100'>
                                <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                                <div class="pl-lg-3">
                                    <p class="sub-sub-title mb-1">튀니지 도착</p>
                                    <p> 카르타고 유적지 - 시디 부 사이드</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex h-100">
                            <button type="button" class="btn btn-outline-primary  radius-20 ">DAY 2</button>
                            <div class='sect4crd ml-lg-3 w-100'>
                                <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                                <div class="pl-lg-3">
                                    <p class="sub-sub-title mb-1">두가</p>
                                    <p> 두가 로마 원형극장</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex h-100">
                            <button type="button" class="btn btn-outline-primary  radius-20 ">DAY 3</button>
                            <div class='sect4crd ml-lg-3 w-100'>
                                <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                                <div class="pl-lg-3">
                                    <p class="sub-sub-title mb-1">카이루완 - 스베틀라 - 토주르 (숙박)</p>
                                    <p> 카이루완 대모스크 - 카펫 구경 - 스베틀라 고고학 건축물</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex h-100">
                            <button type="button" class="btn btn-outline-primary  radius-20 ">DAY 4</button>
                            <div class='sect4crd ml-lg-3 w-100'>
                                <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                                <div class="pl-lg-3">
                                    <p class="sub-sub-title mb-1">토주르 - 쉐비카 - 타메르자 </p>
                                    <p> 오아시스 = 스타워즈 촬영지</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 d-flex h-100">
                            <button type="button" class="btn btn-outline-primary  radius-20 ">DAY 5</button>
                            <div class='sect4crd ml-lg-3 w-100'>
                                <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                                <div class="pl-lg-3">
                                    <p class="sub-sub-title mb-1">두즈 - 마트마타 - 스팍스 (숙박) </p>
                                    <p> 쇼트 엘 제리드 소금호수 - 동굴도시</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex h-100">
                            <button type="button" class="btn btn-outline-primary  radius-20 ">DAY 6</button>
                            <div class='sect4crd ml-lg-3 w-100'>
                                <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                                <div class="pl-lg-3">
                                    <p class="sub-sub-title mb-1">엘젬</p>
                                    <p> 엘젬 원형극장(콜로세움) - 엘젬 박물관</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex h-100">
                            <button type="button" class="btn btn-outline-primary  radius-20 ">DAY 7</button>
                            <div class='sect4crd ml-lg-3 w-100'>
                                <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                                <div class="pl-lg-3">
                                    <p class="sub-sub-title mb-1">수스</p>
                                    <p> 메디나 - 리바트</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex h-100">
                            <button type="button" class="btn btn-outline-primary  radius-20 ">DAY 8</button>
                            <div class='sect4crd ml-lg-3 w-100'>
                                <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                                <div class="pl-lg-3">
                                    <p class="sub-sub-title mb-1">튀니스 </p>
                                    <p> 바르도 박물관 - 튀니스 메디나</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="ligne-separtion"></div>

        {{-- session 5 --}}
        <section id='section5'>
            <h2 class="main-title text-center">Our Trips’ main routes</h2>
            <p class="text-center">튀니지 내 필수 방문도시들과 경로를 확인해보세요.</p>
            <div class="wrap-trips-routes">
                <div class="img-container" style="display: inline-block; position: relative;">
                    <img src="{{ asset('images/trips-routes/map-tour1.jpg') }}" alt="trips-routes" width="596" height="842">
                    <div class="wrap-single-zone zone-tunis" style="left: 57.07%; top: 17.58%;">
                        @include('pages.zones.tunis-zone')
                    </div>
                    <div class="wrap-single-zone zone-kerkouane" style="left: 69.57%; top: 15.1%;">
                        <a href="#" title=""></a>
                        @include('pages.zones.kerkouane-zone')
                    </div>
                    <div class="wrap-single-zone zone-sousse" style="left: 63.07%; top: 28.7%;">
                        @include('pages.zones.sousse-zone')
                    </div>
                    <div class="wrap-single-zone zone-kairouane" style="left: 55.57%; top: 30.7%;">
                        @include('pages.zones.kairouane-zone')
                    </div>
                    <div class="wrap-single-zone zone-sufetela" style="left: 42.37%; top: 35.78%;">
                        @include('pages.zones.sufetela-zone')
                    </div>
                    <div class="wrap-single-zone zone-tozeur" style="left: 28.57%; top: 51.2%;">
                        <a href="#" title="Tozeur"></a>
                        @include('pages.zones.tozeur-zone')
                    </div>
                    <div class="wrap-single-zone zone-matmata" style="left: 51.17%; top: 56.6%;">
                        @include('pages.zones.matmata-zone')
                    </div>
                    <div class="wrap-single-zone zone-djerba" style="left: 66.17%; top: 52.8%;">
                        @include('pages.zones.djerba-zone')
                    </div>

                </div>
                <div class="wrap-trips-routes-infos">
                    <div class="content"></div>
                </div>
            </div>
        </section>

        <div class="ligne-separtion"></div>

        {{-- session 6 --}}
        <section id='section6'>
            <h2 class="main-title text-center">Tips before trips</h2>
            <p class="text-center">자주 하는 질문을 확인하고 여행을 준비해 보세요.</p>

            <div id="section6cont" class="mt-lg-5">
                <h2 class="sub-title" id='section6h2'>어떤 어댑터를 사용하나요?</h2>
                <p id="section6p">튀니지에서는 한국과 동일한 220v 전압을 사용합니다. 따로 변환 플러그나 어댑터가 없어도 된다는 게 장점이에요.</p>
            </div>

            <div class="d-flex justify-content-center mt-5 ">
                <a class="carousel-control-prev flch"  role="button"
                    data-slide="prev" onclick="srllcrdssess6(-1)">
                    <span class="carousel-control-prev-icon-gauche" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <span id='crcl1sess6'></span>
                <span id='crcl2sess6'></span>
                <span id='crcl3sess6'></span>
                <span id='crcl4sess6'></span>
                <span id='crcl5sess6'></span>
                <span id='crcl6sess6'></span>
                <a class="carousel-control-next flch"  role="button"
                    data-slide="next" onclick="srllcrdssess6(1)">
                    <span class="carousel-control-prev-icon-droite" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
    </div>

    @include('layouts.front.footer')
