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
                    <p class="sub-title">아틀란티스가 함께합니다.</p>
                </div>
                <button type="button"
                    class="btn btn-outline-primary d-flex align-items-center btnsect2 radius-20 pr-lg-4 pl-lg-4">
                    <img src="{{ asset('images/enveloppe.png') }}" alt="Enveloppe">문의하기</button>
            </section>
        </div>
    </div>
    <div class="container">
        <section id='section3'>
            <h2 class="main-title text-center">How to get from korea to tunisia</h2>
            <p class="text-center">한국에서 튀니지로 여행하는 주요 3가지 방법은 다음과 같습니다</p>
            <div id='slick-section3-web' class="slick-section3-web">
                <div class="px-3" >
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
                                <div >
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">도하<strong>카타르</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div >
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
                <div class="px-3">
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
                                <div >
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">도하 <strong>  카타르</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div >
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
                <div class="px-3">
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
                                <div >
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">파리 <strong>프랑스</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div >
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">5 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스<strong>  튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-3">
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
                                <div >
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">두바이 <strong>(아랍에미리트)</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div >
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
                <div class="px-3" >
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
                                <div >
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">도하<strong>카타르</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div >
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
                <div class="px-3">
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
                                <div >
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">도하 <strong>  카타르</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div >
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
                <div class="px-3">
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
                                <div >
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">파리 <strong>프랑스</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div >
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">5 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스<strong>  튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-3">
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
                                <div >
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">4 hours</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">두바이 <strong>(아랍에미리트)</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div >
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
            <div class="ligne-separtion"></div>

        </section>
    </div>

    @include('layouts.front.footer')
