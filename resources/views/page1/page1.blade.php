@include('page1.javascript')
@include('page1.script')
@include('page1.stye')

<nav class=" bg-white container justify-content-between navbar navbar-expand-lg navbar-light">

    <div id="myTopnav">
        <img id="logimg" src="{{ asset('images/LogoProk.png') }}">
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item d-flex align-items-center">
                    <img src="{{ asset('images/Flag_of_Tunisia.svg') }}" style="width: 28px; object-fit: cover;"
                        class="mr-2">
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">4:09:27 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">튀니지에</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">보다 더</a>
                </li>
                <li class="nav-item d-flex align-items-center">


                    <input class="btn btn-outline-primary form-control text-blue-placeholder rounded-8" type="text"
                        placeholder="문의하기" style="width: 83.48px;height:33px">

                    <div class="input-group-append ml-2">
                        <button class="btn btn-outline-primary rounded-8" type="button" style="width: 47.27px;height:33px">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>



                </li>




            </ul>

        </div>

    </div>

</nav>

<main>
    <div class="">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">


            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/image (2).png') }}" class="img1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/MicrosoftTeams-image (3).png') }}" class="img1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/sergey-pesterev-_VqyrvQi6do-unsplash.jpg') }}" class="img1">
                </div>
                <div class="align-items-center d-flex h-100 justify-content-center position-absolute w-100">
                    <div class="text-center">
                        <div class="d-flex flex-column align-items-center">
                            <span class="text1">
                                튀니지
                                <br>파란 하늘 푸른 바다
                            </span>
                            <button type="button" class="btn btn-light mt-4 btn1">더보기</button>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active rounded-circle"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class="rounded-circle"></li>
                        <li data-target="#myCarousel" data-slide-to="2" class="rounded-circle"></li>
                    </ol>
                </div>
            </div>
        </div>
</main>
<div class="container">

    <div>

    </div>
    </body>

    </html>
