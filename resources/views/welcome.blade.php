<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Store</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm">
        <a class="navbar-brand" href="#">Car Shop</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('mobil') }}">Mobil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('transaksi') }}">Transaksi</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner bg-primary" style="height: 500px" role="listbox">
            <div class="carousel-item active">
                <img src="{{ asset('img/jumbotron.jpg') }}" style="object-fit: cover; opacity: .6;" class="w-100" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/jumbotron1.jpg') }}" style="object-fit: cover; opacity: .6;" class="w-100" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container py-3">
        <div class="row">
            <div class="col-md-6 py-4">
                <h2>Car Store</h2>
                <div class="col-6 px-0">
                    <hr>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, dolor illo. Consectetur, sint molestias reiciendis beatae, voluptatibus, fugiat sit ad libero consequuntur provident fugit quia.</p>
                <button class="btn btn-primary shadow-sm rounded-pill px-5">Lihat Toko</button>
            </div>
            <div class="col-md-6 text-center pt-5">
                <img src="{{ asset('img/car.png') }}" class="w-75" alt="">
            </div>
        </div>
    </div>
</body>
</html>
