 @include('info.script')

<body id="page-info">
  @include('layouts.front.header')
    <main>
        <div class="wrapper">
            <section id="p3-section1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header">
                                <h2 class="main-title dm-sans text-center">Common Expressions</h2>
                                <p class="sub-title text-center">여행에 필요한 튀니지 아랍어, 잠깐 배워볼까요?</p>
                            </div>
                        </div>
                    </div>
                    <div class="row wrap-custom-card">
                        <div class="col-md-4">
                            <div class="custom-card">
                                <h5 class="custom-card-title dm-sans">‘Aslema!’</h5>
                                <p class="custom-card-text">안녕하세요(만났을 때)</p>
                                <img class="custom-card-img" src="{{asset('assets/img/Aslema_icon.svg')}}" alt="Aslema">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-card">
                                <h5 class="custom-card-title dm-sans">‘Bqadech?’</h5>
                                <p class="custom-card-text">얼마예요?</p>
                                <img class="custom-card-img" src="{{asset('assets/img/Bqadesh_icon.svg')}}" alt="Aslema">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-card">
                                <h5 class="custom-card-title dm-sans">‘Yaaychek’</h5>
                                <p class="custom-card-text">고맙습니다</p>
                                <img class="custom-card-img" src="{{asset('assets/img/Yaaychek_icon.svg')}}" alt="Aslema">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-card">
                                <h5 class="custom-card-title dm-sans">‘A-atini _’</h5>
                                <p class="custom-card-text">___ 주세요</p>
                                <img class="custom-card-img" src="{{asset('assets/img/Aatini_icon.svg')}}" alt="Aslema">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-card">
                                <h5 class="custom-card-title dm-sans">‘Beslema!’</h5>
                                <p class="custom-card-text">안안녕히 가세요/계세요 (헤어질 때)</p>
                                <img class="custom-card-img" src="{{asset('assets/img/Beslema_icon.svg')}}" alt="Aslema">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-card">
                                <h5 class="custom-card-title dm-sans">‘Mahlek!’</h5>
                                <p class="custom-card-text">예뻐요, 좋아요 등</p>
                                <img class="custom-card-img" src="{{asset('assets/img/Mahlek_icon.svg')}}" alt="Aslema">
                            </div>
                        </div>


                    </div>
                </div>
            </section>
            <div class="separateur"></div>

            <section id="p3-section2">
                <div class="container">
<!--                     <div class="row">
                        <div class="col-md-12">
                            <div class="section-header">
                                <h2 class="main-title dm-sans text-center">Culinary Recommendations</h2>
                                <p class="sub-title text-center">튀니지 음식은 동서양 요리 양식이 혼합된 형태예요.<br>
                                    역사적으로 고대 페니키아, 로마, 오스만제국을 거쳐 프랑스의 영향도 많이 받았어요.<br>
                                    올리브 오일, 향신료, 토마토, 해산물, 닭고기나 양고기를 기반으로 한 요리가 많아요.
                                </p>
                                <br>
                                <p class="sub-title text-center">튀니지에서 꼭 먹어봐야 할 음식들을 소개할게요.</p>
                            </div>
                        </div>
                    </div> -->
                    <div class="row wrap-culinary-card">
                        <div class="col-md-12">
                            <ul class="list-culinary-card p-0">
                                <li>
                                    <div class="culinary-card">
                                        <img class="card-img-top" src="{{asset('assets/img/culinary1.png')}}" alt="Card image cap">
                                        <div class="card-body p-0">
                                          <h5 class="card-title">쿠스쿠스</h5>
                                          <p class="card-text">듀럼밀을 갈아서 만든 ‘세몰리나’ 알갱이에 양고기, 생선, 당근과 감자 등을 함께 쪄서 만든 요리예요.</p>
                                        </div>
                                      </div>
                                </li>
                                <li>
                                    <div class="culinary-card">
                                        <img class="card-img-top" src="{{asset('assets/img/culinary2.png')}}" alt="Card image cap">
                                        <div class="card-body p-0">
                                          <h5 class="card-title">브릭</h5>
                                          <p class="card-text">얇은 반죽 피에 달걀, 양파, 참치, 감자, 파슬리 등을 속으로 채워 튀긴 튀니지의 대표적인 튀김 요리예요.</p>
                                        </div>
                                      </div>
                                </li>
                                <li>
                                    <div class="culinary-card">
                                        <img class="card-img-top" src="{{asset('assets/img/culinary3.png')}}" alt="Card image cap">
                                        <div class="card-body p-0">
                                          <h5 class="card-title">라블라비</h5>
                                          <p class="card-text">마늘과 커민 향이 나는 맑은 국물에 마른 병아리콩을 넣어 만든 튀니지 병아리콩 수프예요.</p>
                                        </div>
                                      </div>
                                </li>
                                <li>
                                    <div class="culinary-card">
                                        <img class="card-img-top" src="{{asset('assets/img/culinary4.png')}}" alt="Card image cap">
                                        <div class="card-body p-0">
                                          <h5 class="card-title">오짜</h5>
                                          <p class="card-text">반숙 달걀과 감자, 토마토, 양파, 마늘, 향신료를 올리브 오일로 조리하고, 메르게즈나 생선 등을 넣기도 해요.</p>
                                        </div>
                                      </div>
                                </li>
                                <li>
                                    <div class="culinary-card">
                                        <img class="card-img-top" src="{{asset('assets/img/culinary3.png')}}" alt="Card image cap">
                                        <div class="card-body p-0">
                                          <h5 class="card-title">라블라비</h5>
                                          <p class="card-text">마늘과 커민 향이 나는 맑은 국물에 마른 병아리콩을 넣어 만든 튀니지 병아리콩 수프예요.</p>
                                        </div>
                                      </div>
                                </li>
                                <li>
                                    <div class="culinary-card">
                                        <img class="card-img-top" src="{{asset('assets/img/culinary4.png')}}" alt="Card image cap">
                                        <div class="card-body p-0">
                                          <h5 class="card-title">오짜</h5>
                                          <p class="card-text">반숙 달걀과 감자, 토마토, 양파, 마늘, 향신료를 올리브 오일로 조리하고, 메르게즈나 생선 등을 넣기도 해요.</p>
                                        </div>
                                      </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="separateur"></div>

            <section id="p3-section3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header">
                                <h2 class="main-title dm-sans text-center">Transportation</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row wrap-nav-transportation">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#domav">Domestic Aviation</a></li>
                                <li><a data-toggle="tab" href="#carnt">Car Rent</a></li>
                                <li><a data-toggle="tab" href="#taxi">Taxi</a></li>
                                <li><a data-toggle="tab" href="#loug">Louage</a></li>
                                <li><a data-toggle="tab" href="#trnmet">Train/Metro</a></li>
                                <li><a data-toggle="tab" href="#ferr">Ferry</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="domav" class="tab-pane fade in active show">
                                    <div class="row">
                                        <div class="col-md-6 pr-0 pr-md-3">
                                            <p>가장 큰 공항의 이름은 고대 로마 도시 카르타고의 이름을 따 ‘튀니스 카르타고 국제공항’으로 명명됐어요. 매일 수십 개의 주요 유럽 도시를 지원하는 항공편이 있고, 튀니스, 제르바, 모나스티르 등 주요 도시를 효율적으로 오갈 수 있는 비행편도 운영 중입니다.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{asset('assets/img/taxi.png')}}" class="img-fluid" alt="taxi">
                                        </div>
                                    </div>
                                </div>
                                <div id="carnt" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-md-6 pr-0 pr-md-3">
                                            <p>자동차 렌트를 통해 자유롭게 튀니지를 여행할 수도 있어요. 도로 대부분의 표지판에는 아랍어와 프랑스어로 이중언어 표기가 돼 있어요.</p>
                                            <p>주차 공간이 부족하고 도로가 좁아 첫 방문 시 운전은 쉽지 않으니 주의하세요.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{asset('assets/img/taxi.png')}}" class="img-fluid" alt="taxi">
                                        </div>
                                    </div>
                                </div>
                                <div id="taxi" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-md-6 pr-0 pr-md-3">
                                            <p>튀니지의 택시는 노란색이라 눈에 쉽게 띈다는 장점이 있어요.</p>
                                            <p>차량 오른쪽 아래에 빨간색 표시등이 켜져 있으면 빈 택시, 초록색 표시등이 켜져 있으면 이미 운행 중이라는 의미에요. 기본요금은 우리나라 기본요금의 약 1/10에서 시작합니다. 밤 9시부터 새벽 5시까지는 야간 할증이 적용돼요.</p>
                                            <p>‘Bolt’ 앱을 통해 택시를 이용하면 일반 택시보다 조금 더 비싸지만 편하게 튀니지를 다닐 수 있어요.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{asset('assets/img/taxi.png')}}" class="img-fluid" alt="taxi">
                                        </div>
                                    </div>
                                </div>
                                <div id="loug" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-md-6 pr-0 pr-md-3">
                                            <p>루아지는 시외 이동 시 이용하는 합동 승합 택시 개념의 미니버스예요. 이동경로와 요금이 정해져 있어요. 8명의 승객이 다 찰 때까지 기다렸다가 출발하기 때문에 시간표는 없습니다.</p>
                                            <p>시외 이동을 위한 루아지 탑승 정류장은 아래를 확인하세요.</p>
                                            <p>Station louage Beb Alioua ; 서남부 (Hammamet, Nabeul 등)</p>
                                            <p>Station louage Beb Saadoun ; 북부 (Bizerte, Tabarka 등)</p>
                                            <p>Station louage Moncef Bey ; 남부 (Sousse, Sfax, Djerba)</p>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{asset('assets/img/taxi.png')}}" class="img-fluid" alt="taxi">
                                        </div>
                                    </div>
                                </div>
                                <div id="trnmet" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-md-6 pr-0 pr-md-3">
                                            <p>수도 튀니스에는 메트로라고 불리는 경전철 시스템이 있어요. 총 6개 선의 노선을 운영하며 튀니스 시내와 도심을 연결해요. 요금은 거리에 따라 달라지지만 보통 2TND 내외입니다.</p>
                                            <p>TGM이라고 불리는 트램도 운행합니다. 튀니스 시내 중심부터 유명 관광지 카르타고, 시디 부 사이드, 라 마르사 등을 연결해요.  또한 교외 도시를 연결하는 기차도 있어요.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{asset('assets/img/taxi.png')}}" class="img-fluid" alt="taxi">
                                        </div>
                                    </div>
                                </div>
                                <div id="ferr" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-md-6 pr-0 pr-md-3">
                                            <p>튀니지는 이탈리아, 프랑스 등 유럽행 페리 노선을 운영합니다. 국제노선뿐만 아니라, 튀니지 내 유명 관광지인 제르바섬과 케르케나섬 이동을 지원하는 정기 페리 노선이 있습니다. 주로 스팍스 항구에서 케르케나 섬 이동을 지원하거나, 남부의 자르지스 항구에서 제르바섬으로 이동하는 노선을 운영합니다.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{asset('assets/img/taxi.png')}}" class="img-fluid" alt="taxi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="separateur"></div>

            <section id="p3-section4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header">
                                <h2 class="main-title dm-sans text-center">Museums</h2>
                                <p class="sub-title text-center">튀니지 박물관은 대부분 월요일이 휴관일이에요.<br>
                                    영업시간은 계절에 따라 차이가 있으므로 확인 후 방문하시길 추천해 드립니다.
                                </p>
                                <br>
                                <p class="sub-title text-center">튀니지에서 꼭 먹어봐야 할 음식들을 소개할게요.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row wrap-museums-card">
                        <div class="col-md-12">
                            <ul class="list-museums-card p-0">
                                <li>
                                    <div class="museums-card">
                                        <img class="card-img-top" src="{{asset('assets/img/museums1.png')}}" alt="Museums">
                                        <div class="card-body p-0">
                                          <h5 class="card-title">바르도 박물관</h5>
                                          <div class="card-text">
                                              <p>바르도 박물관은 튀니지 전역에서 발굴된 유물들을 비롯해 그리스, 로마, 이집트 유물을 시대별로 전시해 놓았어요.</p>
                                              <p>특히 고대의 다양한 모자이크 장식품 등이 전시돼 있어<br>세계 최대의 모자이크 전시관으로 유명합니다.</p>
                                          </div>
                                        </div>
                                      </div>
                                </li>
                                <li>
                                    <div class="museums-card">
                                        <img class="card-img-top" src="{{asset('assets/img/museums1.png')}}" alt="Museums">
                                        <div class="card-body p-0">
                                          <h5 class="card-title">카르타고 박물관</h5>
                                          <div class="card-text">
                                            <p>카르타고 중심부, 비르사 언덕 꼭대기에 위치해요.</p>
                                            <p>1875년에 설립된 박물관은 포에니 시대를 포함하여<br>여러 시대를 거친 고고학 유물을 보존하고 전시하고 있어요.</p>
                                            <p>많은 유물 중에서도 카르타고 묘지에서 발굴된 기원전 3세기의 대리석 석관이 유명해요.</p>
                                          </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="museums-card">
                                        <img class="card-img-top" src="{{asset('assets/img/museums1.png')}}" alt="Museums">
                                        <div class="card-body p-0">
                                          <h5 class="card-title">하비브 부르기바 박물관</h5>
                                          <div class="card-text">
                                              <p>1957년부터 1987년 집권한  튀니지 공화국의 초대 대통령
                                                  하비브 부르기바 사망 13주년을 기념하여 2013년에 개장했어요.</p>
                                              <p>하비브 부르기바의 고향인 모나스티르에 자리 잡고 있고
                                                  카르타고 대통령궁에서 발견된
                                                  개인 소지품과 사진 앨범, 연설 녹음, 승마 동상 등을 확인할 수 있어요.</p>
                                          </div>
                                        </div>
                                      </div>
                                </li>


                                <li>
                                    <div class="museums-card">
                                        <img class="card-img-top" src="{{asset('assets/img/museums1.png')}}" alt="Museums">
                                        <div class="card-body p-0">
                                            <h5 class="card-title">다르 애시드 박물관</h5>
                                            <div class="card-text">
                                                <p>튀니지 수스 지역에 있는 박물관으로,
                                                    19세기 오스만 시대 전형적인 부유층의 저택이
                                                    당시 사용했던 가구와 도구 등이 그대로 전시돼있어</p>
                                                <p>중세 시대 중산층의 생활상을 확인할 수 있어요.</p>
                                                <p>꼭대기 층에서 메디나와 바다 전경을 볼 수 있어요.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="museums-card">
                                        <img class="card-img-top" src="{{asset('assets/img/museums1.png')}}" alt="Museums">
                                        <div class="card-body p-0">
                                            <h5 class="card-title">수스 고고학 박물관</h5>
                                            <div class="card-text">
                                                <p>바르도 국립 박물관 다음으로 광범위한 모자이크 컬렉션을 자랑하는 박물관이에요.</p>
                                                <p>사냥, 오락 등과 관련된 많은 작품을 통해 당시의 삶을 엿볼 수 있습니다.</p>
                                                <p>모자이크 외에도 시대를 망라하는 여러 조각품을 소장하고 있어요.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="museums-card">
                                        <img class="card-img-top" src="{{asset('assets/img/museums1.png')}}" alt="Museums">
                                        <div class="card-body p-0">
                                            <h5 class="card-title">다르 체라이트 박물관</h5>
                                            <div class="card-text">
                                                <p>튀니지 최초의 사설 박물관이에요.</p>
                                                <p>1990년 튀니지 유산 홍보를 위한 여러 문화 프로젝트를 시작했던 당시 토주르의 시장,
                                                    압델라자크 체레이트(Abderrazak Cherait)에 의해 설립됐어요.</p>
                                                <p>과거 생활 장면을 엿볼 수 있는 전형적인 부엌, 터키식 목욕탕 등을 볼 수 있어요.</p>
                                                <p>도자기, 보석, 의복, 기타 골동품 등의 전시물도 확인할 수 있습니다.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="museums-card">
                                        <img class="card-img-top" src="{{asset('assets/img/museums1.png')}}" alt="Museums">
                                        <div class="card-body p-0">
                                            <h5 class="card-title">엘젬 고고학 박물관</h5>
                                            <div class="card-text">
                                                <p>엘젬 박물관은 엘젬 원형 극장 근처에 위치해있습니다.</p>
                                                <p>로마시대 번성했던 귀족의 가옥에 공간 구성을 복원하여, 1970년 처음 문을 열었습니다.</p>
                                                <p>로마 가옥은 물론 모자이크, 조각품, 도자기 등의 전시물을 볼 수 있습니다.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="separateur"></div>

            <section id="p3-section5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header">
                                <h2 class="main-title dm-sans text-center">Festivals coming soon</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row wrap-festival-card">
                        <div class="col-md-4">
                            <div class="custom-card">
                                <div class="mask-image">
                                    <img src="{{asset('images/carthage.png')}}" class="img-fluid" alt="Carthage">
                                </div>
                                <h5 class="custom-card-title dm-sans">축제 이름</h5>
                                <ul class="custom-card-text">
                                    <li class="icone-date">축제일</li>
                                    <li class="icone-place">축제의 장소</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-card">
                                <div class="mask-image">
                                    <img src="{{asset('images/dune-electro.png')}}" class="img-fluid" alt="Carthage">
                                </div>
                                <h5 class="custom-card-title dm-sans">축제 이름</h5>
                                <ul class="custom-card-text">
                                    <li class="icone-date">축제일</li>
                                    <li class="icone-place">축제의 장소</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-card">
                                <div class="mask-image">
                                    <img src="{{asset('images/jazz-tabarka.png')}}" class="img-fluid" alt="Carthage">
                                </div>
                                <h5 class="custom-card-title dm-sans">축제 이름</h5>
                                <ul class="custom-card-text">
                                    <li class="icone-date">축제일</li>
                                    <li class="icone-place">축제의 장소</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-card">
                                <div class="mask-image">
                                    <img src="{{asset('images/jcc.png')}}" class="img-fluid" alt="Carthage">
                                </div>
                                <h5 class="custom-card-title dm-sans">축제 이름</h5>
                                <ul class="custom-card-text">
                                    <li class="icone-date">축제일</li>
                                    <li class="icone-place">축제의 장소</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-card">
                                <div class="mask-image">
                                    <img src="{{asset('images/jmc.png')}}" class="img-fluid" alt="Carthage">
                                </div>
                                <h5 class="custom-card-title dm-sans">축제 이름</h5>
                                <ul class="custom-card-text">
                                    <li class="icone-date">축제일</li>
                                    <li class="icone-place">축제의 장소</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-card">
                                <div class="mask-image">
                                    <img src="{{asset('images/dj-symphony.png')}}" class="img-fluid" alt="Carthage">
                                </div>
                                <h5 class="custom-card-title dm-sans">축제 이름</h5>
                                <ul class="custom-card-text">
                                    <li class="icone-date">축제일</li>
                                    <li class="icone-place">축제의 장소</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="separateur"></div>

            <section id="p3-section6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header">
                                <h2 class="main-title dm-sans text-center">Souvenir Items We Recommend</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row wrap-souvenir-card">
                        <div class="col-md-12">
                            <ul class="list-souvenir-card p-0">
                                <li>
                                    <div class="souvenir-card">
                                        <h5 class="card-title">쿠스쿠스</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="souvenir-card">
                                        <h5 class="card-title">도자기</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="souvenir-card">
                                        <h5 class="card-title">올리브오일</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="souvenir-card">
                                        <h5 class="card-title">튀니지산 와인</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="souvenir-card">
                                        <h5 class="card-title">쿠스쿠스</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="souvenir-card">
                                        <h5 class="card-title">도자기</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="my-5"></div>
        </div>
    </main>
  @include('layouts.front.footer')
