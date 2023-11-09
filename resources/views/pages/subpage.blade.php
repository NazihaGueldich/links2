@include('layouts.front.head')


<body id="page-subpage">
    @include('layouts.front.header')
        {{-- session 1 --}}
        <section id="section1">
            <img src="{{ asset('images/Tunisie-Sahara.png') }}" class="img1" alt="Tunisie Sahara">
            <div class="overlay-content">
                    <img id='icnav' src="{{ asset('images/avion.png') }}" alt="Avion" class=" d-flex align-items-center justify-content-center">
                    <span class="text">지중해의 보석 튀니지로 떠나요!</span>
            </div> 
        </section>
        <div class="container">
    </div>
 
    @include('layouts.front.footer')
