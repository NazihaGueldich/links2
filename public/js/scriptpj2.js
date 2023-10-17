
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