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

    @include('layouts.front.footer')
