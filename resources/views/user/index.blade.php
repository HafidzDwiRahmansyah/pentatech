@extends('template.interface2')

@section('title','Landing Page')

@section('content')
<section class="background-image">
    <div class="backdrop">
        <div class="jarak"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4 class="text-center fw-200 text-white">Company Profile</h4>
                    <h2 class="text-center fw-600 text-white">Penta Technology</h2>
                    <button class="btn btn-primary rounded-pill mx-auto d-block px-5 py-2 fw-600 fs-14"
                        onclick="show()">Read
                        More</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content1 my-5">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-6">
                <img src="/img/about.jpg" alt="" width="100%" height="auto">
            </div>
            <div class="col-lg-6">
                <div class="about py-5">
                    <h3 class="fw-500">ABOUT US</h3>
                    <p class="fw-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. In eum facilis unde qui
                        repellendus
                        blanditiis ex asperiores tempora quas temporibus. Sapiente eligendi voluptates harum?</p>
                    <p class="fw-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. In eum facilis unde qui
                        repellendus
                        blanditiis ex asperiores tempora quas temporibus. Sapiente eligendi voluptates harum?</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content2 my-5">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-10">
                <h3 class="py-3 text-center fw-400">PROJECT</h3>
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <div class="card border-0 rounded-3 shadow">
                            <div class="card-body">
                                <img src="" alt="">
                                <p class="fw-400">INSTALATION & MAINTENANCE</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 rounded-3 shadow">
                            <div class="card-body">
                                <img src="" alt="">
                                <p class="fw-400">NETWORK MONITORING SYSTEM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 rounded-3 shadow">
                            <div class="card-body">
                                <img src="" alt="">
                                <p class="fw-400">FULLSTACK WEBSITE DEVELOPER</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 rounded-3 shadow">
                            <div class="card-body">
                                <img src="" alt="">
                                <p class="fw-400">MONITORING DATA CENTER</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content3">
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-center py-3 fw-400">KERJASAMA KAMI</h3>
            <div class="col-lg-2">
                <img class="mx-auto d-block" src="/img/logo_wova.png" alt="" width="80%" height="auto">
                <h5 class="fw-300 text-center">WOVA FREELANCE</h5>
            </div>
        </div>
    </div>
</section>
<section class="background-image2 my-5">
    <div class="row g-0 justify-content-center">
        <div class="col-lg-6"></div>
        <div class="col-lg-6 bg-dark-custom">
            <div class="container-jarak">
                <h3 class="fw-500 text-white"><b>LOREM IPSUM</b></h3>
                <p class="fw-400 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos nobis
                    provident dicta nemo minima necessitatibus. Inventore at dolor iure voluptatum!</p>
            </div>
        </div>
    </div>
</section>
<section class="content3 my-5">
    <div class="container">
        <div class="row justify-content-arround">
            <h3 class=" py-3 text-center fw-400">KONTAK KAMI</h3>
            <div class="col-lg-5">
                <div class="jarak-maps">
                    <form action="" method="post">
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email"><br>
                        <input class="form-control" type="whatsapp" name="whatsapp" id="whatsapp"
                            placeholder="Nomer Whatsapp"><br>
                        <button class="btn btn-primary-dark w-50 fw-400">Kirim</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7">
                <img src="/img/maps.jpg" alt="" width="100%" height="auto">
            </div>
        </div>
    </div>
</section>
@endsection