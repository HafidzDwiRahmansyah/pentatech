<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Pentatech.id</title>
    <link rel="shortcut icon" href="/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand fw-500" href="#"><b>
                    PENTATECH.ID
                </b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link fw-400" href="#">Home</a>
                    <a class="nav-link fw-400" href="#">Features</a>
                    <a class="nav-link fw-400" href="#">Pricing</a>
                    <a class="nav-link fw-400" href="#">Disabled</a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="shadow-lg">
        <div class="container">
            <div class="row justify-content-arround">
                <div class="col-lg-5">
                    <img class="img-fluid rounded-circle py-5" src="/img/logo.jpg" alt="" width="60px" height="auto">
                </div>
                <div class="col-lg-3">
                    <ul class="navbar-nav py-5">
                        <li class="nav-link">Home</li>
                        <li class="nav-link">About</li>
                        <li class="nav-link">Bidang</li>
                        <li class="nav-link">Project</li>
                        <li class="nav-link">Kerjasama</li>
                        <li class="nav-link">Kontak</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="mt-5 justify-content-end">
                        <a class="btn btn-primary-dark-border" href=""><i class="bi bi-instagram fs-4"></i></a>
                        <a class="btn btn-primary-dark-border" href=""><i class="bi bi-linkedin fs-4"></i></a>
                        <a class="btn btn-primary-dark-border" href=""><i class="bi bi-facebook fs-4"></i></a>
                        <a class="btn btn-primary-dark-border" href=""><i class="bi bi-whatsapp fs-4"></i></a>
                    </div>
                    {{-- <p class="py-5">
                        Email : pentatech.id@pentatech.com <br>
                        LinkedIn : pentatech.id@linkedin.com <br>
                        Instagram : pentatech.id@instagram.com <br>
                        Facebook : pentatech.id@facebook.com <br>
                        Fax : 1352
                    </p> --}}
                </div>
            </div>
        </div>
        </div>
        </div>
    </footer>
    <script>
        document.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 20) { // Adjust this value as needed
        navbar.classList.remove('transparent');
        navbar.classList.add('solid');
    } else {
        navbar.classList.remove('solid');
        navbar.classList.add('transparent');
    }
});

    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        function show(){
    Swal.fire({
  title: "Informasi !",
  text: "Sedang tahap pengembangan !",
  icon: "info"
});
}
    </script>
</body>

</html>