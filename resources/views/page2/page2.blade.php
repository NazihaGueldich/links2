@include('page2.scriptpg2')
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
<hr class="mt-5 mb-5 lignesfrk">
<div style="height: 594px">
    <div class="text-center mb-3">
        <span class="titr4">날씨</span>
    </div>
    <div class="row">
        <div class="col-lg-4 d-flex flex-column justify-content-start pt-4">
            <img src="{{ asset('images/chammousa.png') }}" class="img-fluid img3" id='imgchoose'>

            <div class="d-flex justify-content-center mt-5" style="color: #FD4343;">
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"
                    style="position: relative!important;opacity: 1 !important" onclick="srllimg(-1)">
                    <span class="carousel-control-prev-icon-gauche" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <span class="crlrd" id='crcl1'
                    style="width: 20px;background-image:url({{ asset('images/point.svg') }});background-repeat: no-repeat;background-position: center;"></span>
                <span class="crlrd" id='crcl2'
                    style="width: 20px;background-image:url({{ asset('images/cercle.svg') }});background-repeat: no-repeat;background-position: center;"></span>
                <span class="crlrd" id='crcl3'
                    style="width: 20px;background-image:url({{ asset('images/cercle.svg') }});background-repeat: no-repeat;background-position: center;"></span>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"
                    style="position: relative!important;opacity: 1 !important" onclick="srllimg(1)">
                    <span class="carousel-control-prev-icon-droite" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
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
<hr class="mt-5 mb-5 lignesfrk">
<div class="text-center mb-3 d-flex flex-column align-items-center">
    <span class="titr4">언어</span>
    <p class=" pprt4">
        튀니지의 공용어는 아랍어예요. 표준아랍어와는 차이가 있는 튀니지 방언 아랍어를 주로 사용하고요. 프랑스 식민 지배의 영향으로 제2공용어로 프랑스어를 사용하고 있어요.
    </p>
</div>

{{-- part 5 --}}
<div class="mt-5 d-flex flex-column align-items-center">
    <div class="col-12 d-flex justify-content-around ">
        <button id='btn0' class="p-2 btn btnactv" onclick="changtext(0)">아랍어</button>
        <button id='btn1' class="p-2 btninactv" onclick="changtext(1)">프랑스어</button>
        <button id='btn2' class="p-2 btninactv" onclick="changtext(2)">영어</button>
        <button id='btn3' class="p-2 btninactv" onclick="changtext(3)">아마지그어</button>
    </div>
    <div class="ktbchng text-center">
        <p class="mt-5" id='titrp5'>튀니지의 아랍어</p>
        <span id='spnprt5'>2011년 시민혁명 이후 제정된 튀니지 헌법 제1조는 아랍어를 ‘국가의 언어’로 규정하고 있어요. 또한 헌법 제39조에는 아랍 정체성과 아랍어 사용
            교육의 보편화가 규정되어
            있기도 합니다.
            <br>튀니지 아랍어는 국경을 마주하는 알제리나 모로코 방언과 비슷해요. 표준 아랍어와는 차이가 있어서 튀니지에서는 튀니지어를 사용한다는 농담도 있어요. 튀니지 아랍어는
            표준아랍어와 프랑스어, 그리고 이탈리아어 등 다양한 언어가 많이 섞인 형태예요. </span>
    </div>


</div>

{{-- part 6 --}}
<hr class="mt-5 mb-5 lignesfrk">
<div class="mt-5 text-center crd6">
    <div class="d-flex flex-column align-items-center">
        <p class="titr4">종교</p>
        <div class="prt6prt1">
            <span class='titrsghyr'>튀니지의 공용어는 아랍어예요.</span><br>
            <span class='pgsghyra'>표준 아랍어와는 차이가 있는 튀니지 방언 아랍어를 주로 사용하고요. 프랑스 식민 지배의 영향으로 프랑스어가 상용어로 쓰여요. </span>
        </div>
    </div>
    <div class="row mt-5 crd66">
        <div class="col-lg-6">
            <img src="{{ asset('images/img4.png') }}" class="img-fluid img4" id='img4'>
        </div>

        <div class="align-items-start col-lg-6 d-flex flex-column justify-content-around pl-5 pt-4">
            <div>
                <h4 id='h4prt6'>이슬람</h4>
                <p id='pprt6'>튀니지에는 아주 오래 전부터 유대교 소수민족이 있었습니다. 1967년 이후 대부분의 유대인들이 프랑스나 이스라엘로 이주했고, 현재 남아있는
                    유대인들의 대부분은 제르바섬에 거주하고 있습니다.</p>
            </div>
            <div class="d-flex justify-content-between" style="width: 30%" onclick="changelement()">
                <img src="{{ asset('images/down.svg') }}" style="width: 26px">
                <p id='txtindx' style="color: #C4C2D4;font-size: 32px;font-weight: 900" class="mb-0">유대교</p>
            </div>

        </div>
    </div>
</div>

{{-- part 7 --}}
<hr class="mt-5 mb-5 lignesfrk">
<div>
    <div>
        <p class="titr4">튀니지는 어떤 것으로 <br>유명한가요?</p>
    </div>
    <div class="d-flex flex-row justify-content-around">
        <div class="d-flex flex-column align-items-start">
            <div class="crd2">
                <img src="{{ asset('images/Rectangle 16 (2).png') }}" class="img-fluid img5" alt="Image">
                <button class="btncrd">올리브</button>
            </div>

            <p class="p1prt7">튀니지는 다양한 올리브 품종으로 유명한 세계적인 올리브 생산국 중 하나입니다. 이 나라는 기후와 토양이 올리브 재배에 이상적이어서 고품질의 올리브
                생산을 자랑합니다. 현지에서는 올리브 생산 과정을 직접 관찰하고 현지 농부로부터 전통적인 농업 기술을 배울 수 있으며, 튀니지의 올리브와 관련된 풍부한 문화를 체험할 수
                있습니다.</p>
            <p class="p2prt7">더 읽어보세요..</p>
        </div>
        <div class="d-flex flex-column align-items-start ml-4">
            <div class="crd2">
                <img src="{{ asset('images/Rectangle 16.png') }}" class="img-fluid img5" alt="Image">
                <button class="btncrd">쿠스쿠스</button>
            </div>

            <p class="p1prt7">튀니지에서는 관광객에게 꼭 시식해보아야 할 전통 음식인 쿠스쿠스가 있습니다. 이 음식은 증기로 익힌 세몰리나 밀 가루와 고기, 채소, 향신료로
                만든 풍미 있는 스튜와 함께 제공됩니다. 튀니지의 다양한 지역 스타일로 만들어진 쿠스쿠스를 현지 레스토랑이나 시장에서 맛보세요. 이렇게 튀니지의 다양한 음식문화를 경험할 수
                있는 쿠스쿠스는 여행객에게 꼭 추천하는 메뉴입니다.
            </p>
            <p class="p2prt7">더 읽어보세요..</p>
        </div>
        <div class="d-flex flex-column align-items-start ml-4">
            <div class="crd2">
                <img src="{{ asset('images/Rectangle 16 (1).png') }}" class="img-fluid img5" alt="Image">
                <button class="btncrd">카이루안</button>
            </div>

            <p class="p1prt7">튀니지의 카이루안은 유네스코에 등재된 도시로, 풍부한 역사와 문화적 유산으로 유명합니다. 카이루안의 메디나는 좁은 길과 시장이 있는 붐변한 곳으로
                현지 생활을 경험할 수 있으며, 아글라비드 제반스와 같은 고대 기술을 보여주는 곳을 탐험할 수 있습니다. 이 도시는 역사, 문화, 그리고 현지 매력을 결합하여 튀니지의
                독특한 경험을 제공합니다.
            </p>
            <p class="p2prt7">더 읽어보세요..</p>
        </div>
    </div>
</div>

{{-- part 8 --}}
<div>
    <div class="d-flex flex-column align-items-center">
        <p class="titr4 mt-5">튀니지 문화</p>
        <hr class="mt-1 mb-5 lignesfrk">
        <p id='pprt8'>튀니지 문화는 축구와 같은 스포츠를 경험하고 다양하고 맛있는 음식인 쿠스쿠스와 매콤한 하리사로 유명하며, 그 예술은 복잡한 도자기와 모자이크 작품에서
            이슬람, 지중해 및 지역 문화의 결합을 나타냅니다.</p>
    </div>
    <div class="d-flex flex-row justify-content-around mt-5">
        <div class="d-flex flex-column align-items-start">
            <div class="crd2">
                <img src="{{ asset('images/img8p1.png') }}" class="img-fluid img6" alt="Image">
                <button class="btncrd">예술</button>
            </div>

            <p class="p1prt8">튀니지에는 세계 고고학과 건축 연구에 중요한 많은 역사적 유적지가 있어요. 또한 카펫, 도자기, 가죽제품, 모자이크 등 수공예품이 유명합니다.
            </p>
        </div>
        <div class="d-flex flex-column align-items-start ml-4">
            <div class="crd2">
                <img src="{{ asset('images/img8p2.png') }}" class="img-fluid img6" alt="Image">
                <button class="btncrd">요리</button>
            </div>

            <p class="p1prt8">튀니지 음식은 동서양 요리 양식이 혼합된 형태예요. 올리브 오일, 향신료, 토마토, 해산물, 고기를 기반으로 한 요리가 많아요. 칠리고추 향신료인
                하리사를 넣어 특유의 매운맛이 특징이에요.
            </p>
        </div>
        <div class="d-flex flex-column align-items-start ml-4">
            <div class="crd2">
                <img src="{{ asset('images/img8p3.png') }}" class="img-fluid img6" alt="Image">
                <button class="btncrd">스포츠</button>
            </div>

            <p class="p1prt8">스포츠는 튀니지에서 점점 더 인기를 얻고 있어요. 특히 축구의 인기가 상당합니다. 2020년 10월, 튀니지 축구 국가대표팀은 FIFA
                세계랭킹에서 26위에 오르기도 했어요.
            </p>
        </div>
    </div>
</div>
<script>
    //scrll img ta9s

    var indx = 0;

    function srllimg(x) {

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
            crcl1.style.backgroundImage = "url({{ asset('images/point.svg') }} )";
            crcl2.style.backgroundImage = "url({{ asset('images/cercle.svg') }} )";
            crcl3.style.backgroundImage = "url({{ asset('images/cercle.svg') }} )";
        } else if (indx === 1) {
            crcl1.style.backgroundImage = "url({{ asset('images/cercle.svg') }} )";
            crcl2.style.backgroundImage = "url({{ asset('images/point.svg') }} )";
            crcl3.style.backgroundImage = "url({{ asset('images/cercle.svg') }} )";
        } else if (indx === 2) {
            crcl1.style.backgroundImage = "url({{ asset('images/cercle.svg') }} )";
            crcl2.style.backgroundImage = "url({{ asset('images/cercle.svg') }} )";
            crcl3.style.backgroundImage = "url({{ asset('images/point.svg') }} )";
        }
    }

    function changtext(indx) {
        var titr = ["튀니지의 아랍어", "튀니지의 프랑스어", "튀니지의 영어", "아마지그어"];
        var p = [
            "2011년 시민혁명 이후 제정된 튀니지 헌법 제1조는 아랍어를 ‘국가의 언어’로 규정하고 있어요. 또한 헌법 제39조에는 아랍 정체성과 아랍어 사용 교육의 보편화가 규정되어 있기도 합니다.<br>튀니지 아랍어는 국경을 마주하는 알제리나 모로코 방언과 비슷해요. 표준 아랍어와는 차이가 있어서 튀니지에서는 튀니지어를 사용한다는 농담도 있어요. 튀니지 아랍어는 표준아랍어와 프랑스어, 그리고 이탈리아어 등 다양한 언어가 많이 섞인 형태예요.",
            "프랑스가 튀니지를 식민 지배하는 동안, 프랑스어가 공공 기관과 교육 시스템에 도입됐어요. 프랑스어 사용 국가로 구성된 국제기구인 프랑코포니의 정회원국이기도 해요.",
            "젊은 튀니지인들은 영어를 상당히 잘하고, 프랑스어보다 영어를 선호하는 경향을 보입니다.",
            "베르베르인들이 쓰는 언어로 베르베르어라고도 불립니다. 중세에 아랍어가 퍼지기 전 북아프리카 지역에서 사용되었던 언어예요."
        ];
        document.getElementById('titrp5').innerHTML = titr[indx];
        document.getElementById('spnprt5').innerHTML = p[indx];

        var btn0 = document.getElementById('btn0');
        var btn1 = document.getElementById('btn1');
        var btn2 = document.getElementById('btn2');
        var btn3 = document.getElementById('btn3');

        if (indx == 0) {
            btn0.classList = 'p-2 btn btnactv';
            btn1.classList = 'p-2 btninactv';
            btn2.classList = 'p-2 btninactv';
            btn3.classList = 'p-2 btninactv';
        } else if (indx == 1) {
            btn0.classList = 'p-2 btninactv';
            btn1.classList = 'p-2 btn btnactv';
            btn2.classList = 'p-2 btninactv';
            btn3.classList = 'p-2 btninactv';
        } else if (indx == 2) {
            btn0.classList = 'p-2 btninactv';
            btn1.classList = 'p-2 btninactv';
            btn2.classList = 'p-2 btn btnactv';
            btn3.classList = 'p-2 btninactv';
        } else {
            btn0.classList = 'p-2 btninactv';
            btn1.classList = 'p-2 btninactv';
            btn2.classList = 'p-2 btninactv';
            btn3.classList = 'p-2 btn btnactv';
        }
    }

    var elm = 0;

    function changelement() {
        if (elm < 2) {
            elm++;
        } else {
            elm = 0;
        }
        var img = ["{{ asset('images/img1.png') }}",
            "{{ asset('images/img2.png') }}",
            "{{ asset('images/img3.png') }}"
        ];
        var h = ['이슬람', '유대교', '기독교'];
        var p = [
            '튀니지에는 아주 오래 전부터 유대교 소수민족이 있었습니다. 1967년 이후 대부분의 유대인들이 프랑스나 이스라엘로 이주했고, 현재 남아있는 유대인들의 대부분은 제르바섬에 거주하고 있습니다.',
            '튀니지 내 기독교 공동체도 있습니다. 공동체는 대부분 외국인들로 구성되어 있어요. 이들은 자유롭게 교회 예배를 드리며 소수의 학교를 운영하기도 합니다.',
            '국민의 98.2%가 수니파 이슬람을 믿는 무슬림입니다. 그렇지만 1988년 국가 헌장에 따라 종교의 자유가 보장됩니다. 다만 개종 권유, 포교는 법적 제한을 받아요.'
        ];
        var txtindx = ['유대교', '기독교', '이슬람'];


        fade(document.getElementById('img4'), img[elm],0);
        fade(document.getElementById('h4prt6'), h[elm],1);
        fade(document.getElementById('pprt6'), p[elm],1);
        fade(document.getElementById('txtindx'), txtindx[elm],1);

        document.getElementById('h4prt6').innerHTML = h[elm];
        document.getElementById('pprt6').innerHTML = p[elm];
        document.getElementById('txtindx').innerHTML = txtindx[elm];

    }

    function fade(element, value,type) {
        var op = 1; 
        var timer = setInterval(function() {
            if (op <= 0.1) {
                clearInterval(timer);
                element.style.display = 'none';
                if(type==0){
                    element.src = value;
                }else{
                    element.innerHTML = value;
                }
                
                unfade(element);
            }
            element.style.opacity = op;
            element.style.filter = 'alpha(opacity=' + op * 100 + ")";
            op -= op * 0.1;
        }, 5);
    }

    function unfade(element) {
        var op = 0.1; // initial opacity
        element.style.display = 'block';
        var timer = setInterval(function() {
            if (op >= 1) {
                clearInterval(timer);
            }
            element.style.opacity = op;
            element.style.filter = 'alpha(opacity=' + op * 100 + ")";
            op += op * 0.1;
        }, 5);
    }
</script>
@include('page2.footerpg2')
