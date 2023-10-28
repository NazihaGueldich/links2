<footer class="footer" style="display: flex;flex-direction: column;align-items: center;">
    <div class=" container">
        <div class="row my-5">
            <div class="col-lg-6 text-lg-end" style="border-right:1px solid #B3B3B3">
                <div class="col-lg-12">
                    <h3 class="justify-content-center justify-content-lg-end main-title">튀니지에 대해서</h3>
                    <ul>
                        <li><a href="#">역사</a> |</li>
                        <li><a href="#">음식</a> |</li>
                        <li><a href="#">문화</a> |</li>
                        <li><a href="#">목적지</a> |</li>
                        <li><a href="#">활동</a> |</li>
                        <li><a href="#">경제</a> |</li>
                        <li><a href="#">업적</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <h3 class="justify-content-center justify-content-lg-end main-title"> 여행 정보</h3>
                    <ul>
                        <li><a href="#">공항</a> |</li>
                        <li><a href="#">호텔</a> |</li>
                        <li><a href="#">통화</a> |</li>
                        <li><a href="#">계절</a></li>
                        <li><a href="#">최고의 제안</a> |</li>
                        <li><a href="#">우리가 도울 수 있는 방법</a> |</li>
                        <li><a href="#">비상</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="d-flex justify-content-evenly mb-4 gap-10">
                    <img src="{{ asset('images/Group (3).png') }}" style="width: 93px; height: 62px;">
                    <img src="{{ asset('images/Group (4).png') }}" style="width: 93px; height: 62px;">
                    <img src="{{ asset('images/Group 52.png') }}" style="width: 93px; height: 62px;">
                </div>
                <div class="d-flex justify-content-evenly mb-4 gap-10">
                    <img src="{{ asset('images/Group 62.png') }}" style="width: 93px; height: 62px;">
                    <img src="{{ asset('images/Group 63.png') }}" style="width: 93px; height: 62px;">
                    <img src="{{ asset('images/Group 39589.png') }}" style="width: 93px; height: 62px;">
                </div>
            </div>
        </div>

    </div>

    <div class="w-100 mt-3 pt-2 px-0 container" style="border-top:1px solid #B3B3B3">
        <div class="row">
            <div class="text-left col-lg-4 image-footer-1">
                <img src="{{ asset('images/Rectangle2.svg') }}">
                <img src="{{ asset('images/Untitled-1.png') }}" style="height: 24px;">
                <img src="{{ asset('images/Inspiring_tunisia.png') }}" style="height: 24px;">
            </div>
            <div class="col-lg-4 text-center image-footer-1">
                <span>All rights reserved ©</span>
            </div>
            <div class="col-lg-4 text-right image-footer-1">
                <img src="{{ asset('images/fb.svg') }}" style="height: 18px; max-width: 17px; margin-right: 4%;">
                <img src="{{ asset('images/ig.svg') }}" style="height: 18px; max-width: 17px; margin-right: 4%;">
                <img src="{{ asset('images/yt.svg') }}" style="height: 18px; max-width: 26px;">
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="modalemailsucc" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p>E-mail envoyer</p>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/slick.js') }}" type="text/javascript" charset="utf-8"></script>

<script src="{{asset('assets/js/custom.js')}}"></script>

{{--<script src="{{ asset('js/ScriptPage1.js') }}"></script>--}}
<script type="text/javascript">
    // Code JavaScript pour gérer l'affichage/cachage du menu
    const toggleButton = document.getElementById('toggleButton');
    const navbarNav = document.getElementById('navbarNav');

    toggleButton.addEventListener('click', function() {
        navbarNav.classList.toggle('show');
    });
</script>
<script>
    jQuery(document).ready(function() {
        jQuery("#toggleButton").click(function() {
            jQuery(".custom-navbar").toggleClass("toggled");
        });

        var success = document.getElementById('success').value;
        console.log(success);
        if (success == 1) {
            $('#modalemailsucc').modal("show");
            setTimeout(function() {
                $('#modalemailsucc').modal('hide');
            }, 2000);
        }
    });
</script>
<script>
    function toggleNavbarBackground() {
        var body = document.querySelector('body');
        body.classList.toggle('navbar-toggled');
    }
    $('#image-2, #image-3, #image-4, #image-5').on('click', function() {
        if ($(this).find('.parag-img').css('opacity', '0')) {
            $(this).find('.parag-img').css('opacity', '1')
            console.log("h1")
        } else {
            $(this).find('.parag-img').css('opacity', '0');
            console.log("h2")
        }
    })
</script>

</body>
