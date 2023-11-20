<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Links</title>


    <!-- Style CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900&family=Noto+Sans+KR:wght@200;300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Inclure Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/linksblade.css') }}">

</head>

<body id="linksblade">
    <nav class="navbar navbar-expand-lg  fixed-top" style="padding: 0 !important;height: 60px;">
        <div class="container justify-content-between">
            <div id="myTopnav">
                <img src="{{ asset('images/links.png') }}" alt='Links'>
            </div>
            <div id="myTopnav">
                <img src="{{ asset('images/logoo.png') }}" alt=''>
            </div>
        </div>
    </nav>

    <div class="container ">
        <section class="secc-cont">
        <h1>Welcome to LINKS STATION</h1>
        <p id='def'>We're crafting a new digital experience to propel your business forward.
            In the meantime, please feel free to contact us to learn more about our services.
            We would be happy to help you get started on your digital journey.</p>
        <h5>Stay connected with us, join our mailing list</h5>
        <div class="input-wrapper w-75">
            <input type="text" id="bladeInput" class="form-control">
            <button type="button" class="btn">Send</button>
        </div>
        <div class="socmed">
            <img src="{{ asset('images/instagramme.png') }}" alt='Instagrame'>
            <img src="{{ asset('images/facebook.png') }}" alt='Facebook'>
            <img src="{{ asset('images/linkedin.png') }}" alt='Linkedin'>
            <img src="{{ asset('images/youtyoub.png') }}" alt='Youtub'>
        </div>
        <p>contact@linksprod.com</p>
        </section>
    </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
