@include('blogs.header')

<body>
    <div class="container">
        <section id="section-1" class="section-1">
            <div class="main-img radius-20">
                <div class="text-in-img">
                    <h1>Hear from the Korean Amassador in Tunisia</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit
                        nullam neque ultrices.</p>
                    <div>
                        <button class="btn radius-20 btn-white mr-3">Play Video <img
                                src="{{ asset('images/Arrow Right.png') }}"></button>
                        <button class="btn radius-20 btn-transparant">See more like this</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-2" class="pt-5 pb-5">
            <div class="items">
                <span class="item-actv">Popular</span>
                <span class="item-inactv">News</span>
                <span class="item-inactv">Travel Tips</span>
                <span class="item-inactv">Food</span>
                <span class="item-inactv">Life Style</span>
                <span class="item-inactv">Art</span>
                <span class="item-inactv">Knowledge</span>
            </div>
        </section>
        <section id="section-3">
            <div class="row pt-5 pb-3">
                <div class="col-lg-6 pl-lg-5">
                    <span>
                        Want to stay up to date with our content? <strong>Subscribe Now!</strong>
                    </span>
                </div>
                <div class="col-lg-6 form-group pb-3 pr-lg-5 section-3-pat2">
                    <div class="row pb-3">
                        <input class="col-lg-9" type="email" class="form-control" aria-describedby="emailHelp"
                            placeholder="Enter your email">

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
            <div class="d-flex justify-content-between pt-5">
                <div class=" patie-1">
                    <h1>Videos from Creators</h1>
                    <p class="col-10">Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum
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
                    <div class="partie-1 radius-20 p-5">
                        <h1>A catchy title for
                            another video</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit dolor semper at ac tempus enim.
                        </p>
                        <div class="partie-1-btn">
                            <button class="btn radius-20 btn-white">Play Video <img
                                    src="{{ asset('images/Arrow Right.png') }}"></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="partie-2 radius-20 p-5">
                        <h1>A catchy title for
                            another video</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit dolor semper at ac tempus enim.
                        </p>
                        <div class="partie-1-btn">
                            <button class="btn radius-20 btn-color ">Play Video <img
                                    src="{{ asset('images/Arrow Right whit.png') }}"></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
