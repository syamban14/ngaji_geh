<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NgajiGeh - Cari Ustadz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
    <style type="text/css">
        .content {
            display: none;
        }

        .content.active {
            display: block;
        }
    </style>
</head>
<body class="bg-light">
    <div class="backtohome mb-3">
        <a href="<?= base_url('home');?>">
            <i class="fas fa-arrow-left"></i>
        </a>
        <span class="ms-auto">Cari Ustadz</span>
    </div>
    <div class="container filter-search mb-3 d-flex align-items-center">
        <!-- <span class="me-auto">Layout</span> -->
        <input type="text" id="cari_ustadz" class="form-control me-2 border-success" placeholder="Cari di sini...">
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio" id="karosel" autocomplete="off" checked onclick="showContent('carouselUstadz')">
          <label class="btn btn-outline-success" for="karosel"><i class="fas fa-users fa-fw"></i></label>
          <input type="radio" class="btn-check" name="btnradio" id="list" autocomplete="off" onclick="showContent('list-view')">
          <label class="btn btn-outline-success" for="list"><i class="fas fa-list fa-fw"></i></label>
        </div>
    </div>
    <div id="carouselUstadz" class="carousel slide content active">
        <div class="carousel-indicators">
            <!-- ini foreach buat indikatornya ya -->
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <!-- ini penutupnya -->
        </div>
        <div class="carousel-inner">
            <!-- foreach ustad disini -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card shadow rounded-4 border-success">
                                <div class="card-body text-center">
                                    <p class="fw-bold text-success mb-2">Ust. Abdul Somad Al-Riauwi</p>
                                    <p class="mb-2"><em>"Mempelajari Al-Qur'an dari dasar, mulai dari bacaan iqro atau tajwid"</em></p>
                                    <div class="quick-info mb-3 d-flex align-items-center justify-content-center">
                                        <span><span class="fw-bold">Rp</span> 50.000</span>
                                        <span class="mx-3"><i class="fas fa-star text-warning"></i> 5</span>
                                        <span><i class="fas fa-map-marker-alt text-primary"></i> 2.5km</span>
                                    </div>
                                    <button class="btn btn-success">Lihat Detail</button>
                                </div>
                            </div>
                            <img src="<?= base_url();?>assets/images/gambar1.jpg" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <!-- sampe sini ya penutupnya ya -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card shadow rounded-4 border-success">
                                <div class="card-body text-center">
                                    <p class="fw-bold text-success mb-2">Ust. Adi Hidayat</p>
                                    <p class="mb-2"><em>"Mampu mengaji dengan tajwid dan Tartil. Bisa untuk setoran hafalan atau muroja'ah"</em></p>
                                    <div class="quick-info mb-3 d-flex align-items-center justify-content-center">
                                        <span><span class="fw-bold">Rp</span> 50.000</span>
                                        <span class="mx-3"><i class="fas fa-star text-warning"></i> 4.5</span>
                                        <span><i class="fas fa-map-marker-alt text-primary"></i> 3km</span>
                                    </div>
                                    <button class="btn btn-success">Lihat Detail</button>
                                </div>
                            </div>
                            <img src="<?= base_url();?>assets/images/gambar2.jpg" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card shadow rounded-4 border-success">
                                <div class="card-body text-center">
                                    <p class="fw-bold text-success mb-2">Ust. Fikri Maulana</p>
                                    <p class="mb-2"><em>"Mengaji Al-Qur'an Dengan Metode Talaqqi. Bersanad Sampai ke Rasulullah SAW. Insya Allah bisa lancar mengaji"</em></p>
                                    <div class="quick-info mb-3 d-flex align-items-center justify-content-center">
                                        <span><span class="fw-bold">Rp</span> 50.000</span>
                                        <span class="mx-3"><i class="fas fa-star text-warning"></i> 4.4</span>
                                        <span><i class="fas fa-map-marker-alt text-primary"></i> 4km</span>
                                    </div>
                                    <button class="btn btn-success">Lihat Detail</button>
                                </div>
                            </div>
                            <img src="<?= base_url();?>assets/images/gambar1.jpg" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselUstadz" data-bs-slide="prev">
            <i class="fas fa-chevron-left text-success fs-4"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselUstadz" data-bs-slide="next">
            <i class="fas fa-chevron-right text-success fs-4"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div id="list-view" class="content container">
        <!-- foreach ustad disini -->
        <a href="#" class="card shadow-sm rounded-3 mb-2 text-decoration-none border-success">
            <div class="card-body d-flex align-items-center p-2">
                <img class="me-2 rounded-circle" src="<?= base_url();?>assets/images/gambar1.jpg" height="50px" width="50px" alt="...">
                <div class="legend">
                    <p class="fw-bold mb-0 text-success">Ust. Abdul Somad Al-Riauwi</p>
                    <p class="mb-0">
                        <span><span class="fw-bold">Rp</span> 50.000</span>
                        <span class="mx-3"><i class="fas fa-star text-warning"></i> 5</span>
                        <span><i class="fas fa-map-marker-alt text-primary"></i> 2.5km</span>
                    </p>
                </div>
            </div>
        </a>
        <!-- sampe sini ya penutupnya ya -->
        <a href="#" class="card shadow-sm rounded-3 mb-2 text-decoration-none border-success">
            <div class="card-body d-flex align-items-center p-2">
                <img class="me-2 rounded-circle" src="<?= base_url();?>assets/images/gambar2.jpg" height="50px" width="50px" alt="...">
                <div class="legend">
                    <p class="fw-bold mb-0 text-success">Ust. Adi Hidayat</p>
                    <p class="mb-0">
                        <span><span class="fw-bold">Rp</span> 50.000</span>
                        <span class="mx-3"><i class="fas fa-star text-warning"></i> 4.5</span>
                        <span><i class="fas fa-map-marker-alt text-primary"></i> 3km</span>
                    </p>
                </div>
            </div>
        </a>
        <a href="#" class="card shadow-sm rounded-3 mb-2 text-decoration-none border-success">
            <div class="card-body d-flex align-items-center p-2">
                <img class="me-2 rounded-circle" src="<?= base_url();?>assets/images/gambar1.jpg" height="50px" width="50px" alt="...">
                <div class="legend">
                    <p class="fw-bold mb-0 text-success">Ust. Fikri Maulana</p>
                    <p class="mb-0">
                        <span><span class="fw-bold">Rp</span> 50.000</span>
                        <span class="mx-3"><i class="fas fa-star text-warning"></i> 4.4</span>
                        <span><i class="fas fa-map-marker-alt text-primary"></i> 4km</span>
                    </p>
                </div>
            </div>
        </a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        function showContent(tab){
            document.querySelector('.content.active').classList.remove('active');
            document.getElementById(tab).classList.add('active');
        }
    </script>
</body>
</html>