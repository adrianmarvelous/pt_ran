<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PT RAN</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: #F2D785;">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand fw-bold text-uppercase" href="#" style="color: #876235;">PT RAN</a>

            <!-- Toggler Button -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-semibold">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: #876235;" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #876235;" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #876235;" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Whole Ginger</a></li>
                            <li><a class="dropdown-item" href="#">Dried Ginger</a></li>
                            <li><a class="dropdown-item" href="#">Ginger Powder</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #876235;" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div style="background-image: url('{{ asset('assets/images/bg-image/pexels-karolina-grabowska-5202108.jpg') }}');
            background-size: cover;
            background-position: right;
            height: 100vh;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center min-vh-100 p-3">
                <div class="row">
                    <div class="col-lg-6 col-sm-12" style="color: #876235">
                        {{-- <div class=" card d-block d-lg-none">
                            <p class="fw-bold display-1">Premium Ginger for Export</p>
                            <h4 class="text-justify">
                                PT RAN specialize in the export of high-quality ginger, sourced directly from sustainable farms. 
                                Our commitment to quality ensures that you receive the finest spices for your business needs.
                            </h4>
                        </div> --}}
                        <div>
                            <!-- Mobile Card -->
                            <div class="card rounded d-block d-lg-none p-2" style="background-color: rgba(255, 255, 255, 0.8); border: none;">
                                <p class="fw-bold display-1">Premium Ginger for Export</p>
                                <h4 class="text-justify">
                                    PT RAN specialize in the export of high-quality ginger, sourced directly from sustainable farms. Our commitment to quality ensures that you receive the finest spices for your business needs.
                                </h4>
                            </div>

                            <!-- Desktop Card -->
                            <div class="d-none d-lg-block p-2">
                                <p class="fw-bold display-1">Premium Ginger for Export </p>
                                <h4 class="text-justify">
                                    PT RAN specialize in the export of high-quality ginger, sourced directly from sustainable farms. Our commitment to quality ensures that you receive the finest spices for your business needs.
                                </h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row p-5">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div>
                        <img class="w-100 rounded" src="{{ asset('assets/images/bg-image/pexels-pixabay-161556.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="d-flex flex-column justify-content-center h-100 text-end" style="color: #876235;">
                        <p class="fw-bold display-5">About PT RAN</p>
                        <h5 style="text-align: justify">PT Rempah Alam Nusantara (RAN) is a new spice export company dedicated to providing premium ginger to international markets. Our mission is to connect global buyers with the finest ginger quality, reliability and sustainability. We are committed to ethical sourcing and building long-term relationship with our client and farmers.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100" style="background: linear-gradient(135deg, #C9A257, #E0C068, #fae6a6);">
        <div class="container p-5">
            <p class="fw-bold display-5" style="color: #5e4425">Our Products</p>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12 col-sm-12 p-3">
                    <div class="card shadow rounded p-3 h-100">
                        <img class="w-100" src="{{ asset('assets/images/bg-image/pexels-joris-neyt-512471-1337585.jpg') }}" alt="">
                        <h4 class="mt-3">Premium Ginger</h4>
                        <p>Premium grade fresh ginger or pre-dried whole roots. Suitable for processing, re-exports, or retail.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 p-3">
                    <div class="card shadow rounded p-3 h-100">
                        <img class="w-100" src="{{ asset('assets/images/bg-image/ginger-1738098_1920.jpg') }}" alt="">
                        <h4 class="mt-3">Dried Ginger</h4>
                        <p>Thinly sliced and naturally dried ginger — ideal for teas, extracts and herbal applications.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 p-3">
                    <div class="card shadow rounded p-3 h-100">
                        <img class="w-100" src="{{ asset('assets/images/bg-image/spices-1191945_1920.jpg') }}" alt="">
                        <h4 class="mt-3">Ginger Powder</h4>
                        <p>Finely milled ginger powder (mesh 60–80), low moisture. Suitable for food, supplements and flavouring.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100">
        <div class="container p-5">
            <p class="fw-bold display-5 text-center">Insight & Articles</p>
            <h5 class="text-center">Useful guides and articles about ginger quality, processing and export.</h5>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
