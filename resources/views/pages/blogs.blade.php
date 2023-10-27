@include('pages.header')

<body>
    <div class="container">
        <section id="section-1" class="section-1">
            <div class="main-img radius-20">
                <div class="text-in-img">
                    <h1 class="col-lg-8">Hear from the Korean Amassador in Tunisia</h1>
                    <p class="col-lg-6">Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit
                        nullam neque ultrices.</p>
                    <div class='btns'>
                        <button class="btn radius-20 btn-white mr-lg-3">Play Video
                             <img  src="{{ asset('images/Arrow Right.png') }}"></button>
                        <button class="btn radius-20 btn-transparant">See more like this</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-2" class="pt-lg-5 pb-lg-5">
            <div class="items">
                <span id='itm0' class="item-actv" onclick="changSection6(0)">Popular</span>
                <span id='itm1' class="item-inactv" onclick="changSection6(1)">News</span>
                <span id='itm2' class="item-inactv" onclick="changSection6(2)">Travel Tips</span>
                <span id='itm3' class="item-inactv" onclick="changSection6(3)">Food</span>
                <span id='itm4' class="item-inactv" onclick="changSection6(4)">Life Style</span>
                <span id='itm5' class="item-inactv" onclick="changSection6(5)">Art</span>
                <span id='itm6' class="item-inactv" onclick="changSection6(6)">Knowledge</span>
            </div>
        </section>
        <section id="section-3">
            <div class="row pt-lg-5 pb-lg-3">
                <div class="col-lg-6 pl-lg-5 sect3-partie1">
                    <span>
                        Want to stay up to date with our content? <strong>Subscribe Now!</strong>
                    </span>
                </div>
                <div class="col-lg-6 form-group pb-lg-3 pr-lg-5 section-3-pat2">
                    <div class="row pb-lg-3">
                        <input class="col-lg-9" type="email" class="form-control" aria-describedby="emailHelp"
                            placeholder="Enter your email">

                            <div class="lign-in-sectuion-3-mobil"></div>

                        <button class="btn radius-20 btn-color col-lg-3 btn-subscrib">Suscribe<img
                                src="{{ asset('images/Arrow Right whit.png') }}"></button>
                    </div>
                    <div class="lign-in-sectuion-3"></div>
                    <p>
                        <input class="form-check-input" type="checkbox" value="" checked>
                        Allow us to reach out to you
                    </p>
                </div>


            </div>
        </section>
        <section id="section-4">
            <div class="d-flex justify-content-between pt-lg-5">
                <div class=" patie-1">
                    <h1>Videos from Creators</h1>
                    <p class="col-lg-8">Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum
                        tempus hac tellus
                        libero</p>
                </div>
                <div>
                    <button class="btn radius-20 btn-color btn-see-more">See More<img
                            src="{{ asset('images/Arrow Right whit.png') }}"></button>
                </div>
            </div>
        </section>

        <section id="section-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="partie-1 radius-20 p-lg-5">
                        <h1 class="col-lg-6">A catchy title for
                            another video</h1>
                        <p class="col-lg-9">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit dolor semper at ac tempus enim.
                        </p>
                        <button class="btn radius-20 btn-white">Play Video <img
                                src="{{ asset('images/Arrow Right.png') }}"></button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="partie-2 radius-20 p-5">
                        <h1 class="col-lg-6">A catchy title for
                            another video</h1>
                        <p class="col-lg-9">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit dolor semper at ac tempus enim.
                        </p>
                        <button class="btn radius-20 btn-color ">Play Video <img
                                src="{{ asset('images/Arrow Right whit.png') }}"></button>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-6" class="pt-lg-5">
            <div class="head">
                <h1>
                    Popular Topics
                </h1>
                <p class="col-lg-5 pl-lg-0">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus
                    libero
                </p>
            </div>
            <div class="cards">
                <div class="row pt-lg-5">
                    <div class="col-lg-6 pl-lg-5">
                        <img src="{{ asset('images/Container (1).png') }}" class="card-imag">
                    </div>
                    <div class="col-lg-6 description pl-lg-5">
                        <h3>Catchy Title:<br>
                            The main point behind it</h3>
                        <p class="col-lg-8">Lorem ipsum dolor sit amet consectetur adipiscing elit dolor semper at ac
                            tempus enim.</p>
                        <button class="btn radius-20 btn-color col-lg-3">Read Full Article</button>
                    </div>
                </div>
                <div class="row pt-lg-5">
                    <div class="col-lg-6 pl-lg-5">
                        <img src="{{ asset('images/Container (1).png') }}" class="card-imag">
                    </div>
                    <div class="col-lg-6 description pl-lg-5">
                        <h3>Catchy Title:<br>
                            The main point behind it</h3>
                        <p class="col-lg-8">Lorem ipsum dolor sit amet consectetur adipiscing elit dolor semper at ac
                            tempus enim.</p>
                        <button class="btn radius-20 btn-color col-lg-3">Read Full Article</button>
                    </div>
                </div>
                <div class="row pt-lg-5">
                    <div class="col-lg-6 pl-lg-5">
                        <img src="{{ asset('images/Container (1).png') }}" class="card-imag">
                    </div>
                    <div class="col-lg-6 description pl-lg-5">
                        <h3>Catchy Title:<br>
                            The main point behind it</h3>
                        <p class="col-lg-8">Lorem ipsum dolor sit amet consectetur adipiscing elit dolor semper at ac
                            tempus enim.</p>
                        <button class="btn radius-20 btn-color col-lg-3">Read Full Article</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-7">
            <div class="pagination  mt-lg-5" id="pagination">
                <a  class="page">1</a>
                <a  class="page active">2</a>
                <a  class="page">3</a>
                <a  class="page">4</a>
                <a  class="page">5</a>
            </div>
        </section>

    </div>

</body>

</html>
<script>const pages = document.querySelectorAll(".page");

    pages.forEach(page => {
        page.addEventListener("click", () => {
            pages.forEach(p => p.classList.remove("active"));
            page.classList.add("active");
        });
    });
    </script>
