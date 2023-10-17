<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Footer Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/pg2.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css" />
    <link rel="stylesheet" href="{{ asset('js/scriptpj2.js') }}">

</head>

<body>
    <div class="container">
        @include('page2.navpg')

        {{-- part 1 --}}
        <div>
            <div class="text-center mb-3">
                <span class="titr1">튀니지 개관 </span>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <img src="{{ asset('images/Group 39572.png') }}" class="img-fluid img1">
                </div>

                <div class="col-lg-4 pt-4">
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
        </div>
        {{-- part 2 --}}
        <div>
            <div class="mt-4 crd2">
                <img src="{{ asset('images/Untitled-2 1.png') }}" class="img2">
                <span class="titr2 titr1">위치</span>
            </div>

            <div class="d-flex justify-content-between mt-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="titr3">아프리카 최북단</h5>
                        <p class="pg3">아프리카 대륙의 최북단에 위치하며, 아틀라스 산맥을 따라 자리 잡은 나라들 중 가장 작은 국가예요.</p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="titr3">북아프리카</h5>
                        <p class="pg3">아랍어로 "해가 지는 땅"이라는 의미의 마그레브 지역에 위치한 튀니지는서쪽으로 알제리와 남동쪽으로는 리비아와 국경을 접하고 있어요.</p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="titr3">지중해</h5>
                        <p class="pg3">지중해 서부 연안에 위치한 아프리카와 유럽의 관문이기도 해요.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- part 3 --}}
        <hr class="lignesfrk">
        <div>
            <div class="text-center mb-3">
                <span class="titr4">날씨</span>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset('images/chammousa.png') }}" class="img-fluid img3" id='imgchoose'>

                    <div class="chois">
                        <a onclick="srllimg(-1)">
                            < </a>
                                <span class="fa-solid fa-circle crlrd" id='crcl1'></span>
                                <span class="fa-regular fa-circle crlrd" id='crcl2'></span>
                                <span class="fa-regular fa-circle crlrd" id='crcl3'></span>
                                <a onclick="srllimg(1)">></a>
                    </div>
                </div>

                <div class="col-lg-8 pt-4">
                    <p class="prt3p">
                        튀니지는 제법 뚜렷한 봄, 여름, 가을, 겨울의 4계절이 있어요. 여행 시기에 맞춰 적절한 의복을 챙기는 게 좋습니다. 튀니지 1월 평균 최저 기온은 6 ̊C, 8월 평균
                        최고 기온은 33 ̊C입니다.
                    </p>

                    <span class="titr1" id='scrlltitr'> 6월부터 9월:</span><br>

                    <p class="prt3p my-3" id="scrllp">
                        튀니지 현지의 여름은 매우 뜨겁습니다. 8월 평균 기온은 33C이며, 40̊C가 넘을 때도 있어요.<br> 북부 튀니지는 덥고 건조하며 남부로 내려갈수록 기온이 더 올라가며
                        건조해지는 사하라 성 기후를 보입니다.<br> 하지만 아침, 저녁으로 해가 떨어지면 기온이 크게 내려가는 양상을 보이니 일교차에 유념하여 가디건을 챙기는 게 좋습니다.
                    </p>
                </div>
            </div>
        </div>

        {{-- part 4 --}}
        <hr class="lignesfrk">
        <div class="text-center mb-3">
            <span class="titr4">언어</span>
            <p class="pprt4">
                튀니지의 공용어는 아랍어예요. 표준아랍어와는 차이가 있는 튀니지 방언 아랍어를 주로 사용하고요. 프랑스 식민 지배의 영향으로 제2공용어로 프랑스어를 사용하고 있어요.
            </p>
        </div>

        {{-- part 5 --}}
        <div>
            <div class="col-12 d-flex justify-content-around ">
                <button class="p-2 btn btnactv" onclick="changtext(1)">아랍어</button>
                <button class="p-2 btninactv" onclick="changtext(2)">프랑스어</button>
                <button class="p-2 btninactv" onclick="changtext(3)">영어</button>
                <button class="p-2 btninactv" onclick="changtext(4)">아마지그어</button>
            </div>
            <div class="ktbchng text-center">
                <p class="mt-5">튀니지의 아랍어</p>
                <span>2011년 시민혁명 이후 제정된 튀니지 헌법 제1조는 아랍어를 ‘국가의 언어’로 규정하고 있어요. 또한 헌법 제39조에는 아랍 정체성과 아랍어 사용 교육의 보편화가 규정되어
                    있기도 합니다.
                    <br>튀니지 아랍어는 국경을 마주하는 알제리나 모로코 방언과 비슷해요. 표준 아랍어와는 차이가 있어서 튀니지에서는 튀니지어를 사용한다는 농담도 있어요. 튀니지 아랍어는
                    표준아랍어와 프랑스어, 그리고 이탈리아어 등 다양한 언어가 많이 섞인 형태예요. </span>
            </div>


        </div>
        <script>
            //scrll img ta9s
            var indx = 0;
            var img = [
                "{{ asset('images/chammousa.png') }}",
                "{{ asset('images/mtarr.png') }}",
                "{{ asset('images/msa77ba.png') }}"
            ];
            var titr = ["6월부터 9월:", "12월부터 2월 : 겨울", "봄(3~5월)과 가을(10~11월)"];
            var p = [
                "튀니지 현지의 여름은 매우 뜨겁습니다. 8월 평균 기온은 33C이며, 40̊C가 넘을 때도 있어요.<br> 북부 튀니지는 덥고 건조하며 남부로 내려갈수록 기온이 더 올라가며 건조해지는 사하라 성 기후를 보입니다.<br>하지만 아침, 저녁으로 해가 떨어지면 기온이 크게 내려가는 양상을 보이니 일교차에 유념하여 가디건을 챙기는 게 좋습니다.",
                "튀니지에도 겨울이 있습니다. 더운 여름만 생각하셨다면 꽤 매서운 추위를 경험할 텐데요. 영하로 내려가는 추위는 아니지만, 한국의 초겨울 날씨를 보입니다.<br> 12월 평균기온은 11 ̊C예요. 겨울에는 오히려 북부가 신선하고 습하며, 남부는 온화하고 건조합니다.<br> 겨울철 난방을 위한 실내 설계가 잘 안되어 있는 경우가 있으니 겨울철 방문을 준비 중이라면 전기장판, 경량 패딩, 목도리, 수면 바지, 수면 양말 등을 챙기길 추천해 드려요. 또한 겨울철에는 비가 오는 경우가 많으니 작은 우산이나 우비도 잊지 마세요!",
                "봄과 가을에는 평균기온이 약 20C에서 25 C를 웃도는 날씨를 유지합니다. 한국의 봄가을과 비슷한 날씨를 생각하면 되고, 일교차가 있으니 가벼운 겉옷을 늘 챙겨 다니는 게 좋습니다.<br>해안지역은 바닷바람 때문에 조금 더 춥다고 느낄 수 있어요. 한편 남부 사막을 여행 하기에 딱 좋은 날씨이니 사막여행을 계획 중인 분들이라면 봄가을 시기를 추천합니다."
            ];
            var indx = 0;

            function srllimg(x) {

                console.log(indx);
                if (x == -1 && indx > 0) {
                    indx--;
                } else if (x == 1 && indx < 2) {
                    indx++;
                }
                console.log(indx);

                document.getElementById('imgchoose').src = img[indx];
                document.getElementById('scrlltitr').innerHTML = titr[indx];
                document.getElementById('scrllp').innerHTML = p[indx];

                if (indx === 0) {
                    crcl1.className = "fa-solid fa-circle crlrd";
                    crcl2.className = "fa-regular fa-circle crlrd";
                    crcl3.className = "fa-regular fa-circle crlrd";
                } else if (indx === 1) {
                    crcl1.className = "fa-regular fa-circle crlrd";
                    crcl2.className = "fa-solid fa-circle crlrd";
                    crcl3.className = "fa-regular fa-circle crlrd";
                } else if (indx === 2) {
                    crcl1.className = "fa-regular fa-circle crlrd";
                    crcl2.className = "fa-regular fa-circle crlrd";
                    crcl3.className = "fa-solid fa-circle crlrd";
                }
            }
        </script>
        @include('page2.footerpg2')
