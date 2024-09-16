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
        <button type="button" class="btn btn-outline-success" data-bs-toggle="offcanvas" data-bs-target="#filter-search" aria-controls="filter-search">
            <i class="bi bi-filter"></i>
        </button>
        <input type="text" id="cari_ustadz" class="form-control mx-2 border-success" placeholder="Cari di sini...">
        <div class="btn-group ms-auto" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio" id="karosel" autocomplete="off" onclick="showContent('carouselUstadz')">
          <label class="btn btn-outline-success" for="karosel"><i class="fas fa-users fa-fw"></i></label>
          <input type="radio" class="btn-check" name="btnradio" id="list" autocomplete="off" checked onclick="showContent('list-view')">
          <label class="btn btn-outline-success" for="list"><i class="fas fa-list fa-fw"></i></label>
        </div>
    </div>
    <div id="carouselUstadz" class="carousel slide content">
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
                                    <button 
                                        data-bs-idUstadz="isi pake idnya ustadz atau apa perlunya"
                                        data-bs-namaUstadz="Ust. Abdul Somad Al-Riauwi"
                                        data-bs-fotoUstadz="gambar1.jpg"
                                        data-bs-tentangUstadz="Mempelajari Al-Qur'an dari dasar, mulai dari bacaan iqro atau tajwid"
                                        data-bs-tarifUstadz="50.000"
                                        data-bs-starUstadz="5"
                                        data-bs-jarakUstadz="2.5"
                                        data-bs-mapUstadz="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.8318173477423!2d106.05036417498869!3d-6.017814393967549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418de515555555%3A0xfb224d695183e7f2!2sMasjid%20Agung%20Nurul%20Ikhlas%20Cilegon!5e0!3m2!1sen!2sid!4v1725925559670!5m2!1sen!2sid"
                                        class="btn btn-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#detailUstadz">
                                        Lihat Detail
                                    </button>
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
                                    <button 
                                        data-bs-idUstadz="isi pake idnya ustadz atau apa perlunya"
                                        data-bs-namaUstadz="Ust. Adi Hidayat"
                                        data-bs-fotoUstadz="gambar2.jpg"
                                        data-bs-tentangUstadz="Mampu mengaji dengan tajwid dan Tartil. Bisa untuk setoran hafalan atau muroja'ah"
                                        data-bs-tarifUstadz="50.000"
                                        data-bs-starUstadz="4.5"
                                        data-bs-jarakUstadz="3"
                                        data-bs-mapUstadz="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.8318173477423!2d106.05036417498869!3d-6.017814393967549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418de515555555%3A0xfb224d695183e7f2!2sMasjid%20Agung%20Nurul%20Ikhlas%20Cilegon!5e0!3m2!1sen!2sid!4v1725925559670!5m2!1sen!2sid"
                                        class="btn btn-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#detailUstadz">
                                        Lihat Detail
                                    </button>
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
                                    <button 
                                        data-bs-idUstadz="isi pake idnya ustadz atau apa perlunya"
                                        data-bs-namaUstadz="Ust. Fikri Maulana"
                                        data-bs-fotoUstadz="gambar1.jpg"
                                        data-bs-tentangUstadz="Mengaji Al-Qur'an Dengan Metode Talaqqi. Bersanad Sampai ke Rasulullah SAW. Insya Allah bisa lancar mengaji"
                                        data-bs-tarifUstadz="50.000"
                                        data-bs-starUstadz="4.4"
                                        data-bs-jarakUstadz="4"
                                        data-bs-mapUstadz="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.8318173477423!2d106.05036417498869!3d-6.017814393967549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418de515555555%3A0xfb224d695183e7f2!2sMasjid%20Agung%20Nurul%20Ikhlas%20Cilegon!5e0!3m2!1sen!2sid!4v1725925559670!5m2!1sen!2sid"
                                        class="btn btn-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#detailUstadz">
                                        Lihat Detail
                                    </button>
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
    <div id="list-view" class="content container active">
        <!-- foreach ustad disini -->
        <a  data-bs-idUstadz="isi pake idnya ustadz atau apa perlunya"
            data-bs-namaUstadz="Ust. Abdul Somad Al-Riauwi"
            data-bs-fotoUstadz="gambar1.jpg"
            data-bs-tentangUstadz="Mempelajari Al-Qur'an dari dasar, mulai dari bacaan iqro atau tajwid"
            data-bs-tarifUstadz="50.000"
            data-bs-starUstadz="5"
            data-bs-jarakUstadz="2.5"
            data-bs-mapUstadz="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.8318173477423!2d106.05036417498869!3d-6.017814393967549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418de515555555%3A0xfb224d695183e7f2!2sMasjid%20Agung%20Nurul%20Ikhlas%20Cilegon!5e0!3m2!1sen!2sid!4v1725925559670!5m2!1sen!2sid"
            data-bs-toggle="modal"
            href="#detailUstadz"
            class="card shadow-sm rounded-3 mb-2 text-decoration-none border-success">
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
        <a  data-bs-idUstadz="isi pake idnya ustadz atau apa perlunya"
            data-bs-namaUstadz="Ust. Adi Hidayat"
            data-bs-fotoUstadz="gambar2.jpg"
            data-bs-tentangUstadz="Mampu mengaji dengan tajwid dan Tartil. Bisa untuk setoran hafalan atau muroja'ah"
            data-bs-tarifUstadz="50.000"
            data-bs-starUstadz="4.5"
            data-bs-jarakUstadz="3"
            data-bs-mapUstadz="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.8318173477423!2d106.05036417498869!3d-6.017814393967549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418de515555555%3A0xfb224d695183e7f2!2sMasjid%20Agung%20Nurul%20Ikhlas%20Cilegon!5e0!3m2!1sen!2sid!4v1725925559670!5m2!1sen!2sid"
            data-bs-toggle="modal"
            href="#detailUstadz"
            class="card shadow-sm rounded-3 mb-2 text-decoration-none border-success">
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
        <a  data-bs-idUstadz="isi pake idnya ustadz atau apa perlunya"
            data-bs-namaUstadz="Ust. Fikri Maulana"
            data-bs-fotoUstadz="gambar1.jpg"
            data-bs-tentangUstadz="Mengaji Al-Qur'an Dengan Metode Talaqqi. Bersanad Sampai ke Rasulullah SAW. Insya Allah bisa lancar mengaji"
            data-bs-tarifUstadz="50.000"
            data-bs-starUstadz="4.4"
            data-bs-jarakUstadz="4"
            data-bs-mapUstadz="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.8318173477423!2d106.05036417498869!3d-6.017814393967549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418de515555555%3A0xfb224d695183e7f2!2sMasjid%20Agung%20Nurul%20Ikhlas%20Cilegon!5e0!3m2!1sen!2sid!4v1725925559670!5m2!1sen!2sid"
            data-bs-toggle="modal"
            href="#detailUstadz"
            class="card shadow-sm rounded-3 mb-2 text-decoration-none border-success">
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
    <div class="offcanvas offcanvas-end bg-body-secondary" tabindex="-1" id="filter-search" aria-labelledby="filter-searchLabel" style="max-width:80%;">
      <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="filter-searchLabel">Filter Ustadz</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body position-relative">
        <div class="type-ustadz mb-2">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="Ustadz" value="1">
              <label class="form-check-label" for="Ustadz">Ustadz</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="Ustadzah" value="2">
              <label class="form-check-label" for="Ustadzah">Ustadzah</label>
            </div>
        </div>
        <div class="keahlian mb-2">
            <p class="mb-0">Keahlian</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="Al-Quran">
              <label class="form-check-label" for="Al-Quran">
                Al-Qur'an
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="Tafsir">
              <label class="form-check-label" for="Tafsir">
                Tafsir
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="Hafidz">
              <label class="form-check-label" for="Hafidz">
                Hafidz
              </label>
            </div>
        </div>
        <div class="keahlian mb-2">
            <p class="mb-0">Jenis Pembelajran</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="tatap_muka">
              <label class="form-check-label" for="tatap_muka">
                Tatap Muka
              </label>
            </div>
        </div>
        <div class="container px-3 apply-filter position-absolute bottom-0 start-50 translate-middle-x mb-3">
            <div class="row g-2">
                <div class="col">
                    <div class="d-grid">
                        <button type="button" class="btn btn-success">Terapkan</button>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="offcanvas">Batal</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="detailUstadz" tabindex="-1" aria-labelledby="detailUstadzLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <center>
                <input type="hidden" id="idUstadz">
                <div id="fotoUstadz"></div>
                <p id="tentangUstadz"></p>
                <p class="mb-0">
                    <strong>Tarif Per Jam</strong> : Rp <span id="tarifUstadz"></span>
                </p>
                <p>
                    <strong>Rating</strong> : <span id="starUstadz"></span>
                </p>
            </center>
            <div class="map-responsive" id="mapUstadz">
                <iframe width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="modal-footer" id="btnPilihUstadz"></div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        function showContent(tab){
            document.querySelector('.content.active').classList.remove('active');
            document.getElementById(tab).classList.add('active');
            if (tab=='carouselUstadz') {
                $('#cari_ustadz').removeClass('d-block')
                $('#cari_ustadz').addClass('d-none');
            }
            if (tab=='list-view') {
                $('#cari_ustadz').removeClass('d-none');
                $('#cari_ustadz').addClass('d-block');
            }
        }
        $('#cari_ustadz').keyup(function(){
            var value = $(this).val().toLowerCase();
            // $(".carousel-item").filter(function() {
            //     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            // });
            $("#list-view > a.card").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
        const detailUstadz = document.getElementById('detailUstadz')
        if (detailUstadz) {
          detailUstadz.addEventListener('show.bs.modal', event => {
            // Button that triggered the modal
            const button = event.relatedTarget
            // Extract info from data-bs-* attributes
            const idUstadz = button.getAttribute('data-bs-idUstadz')
            const namaUstadz = button.getAttribute('data-bs-namaUstadz')
            const fotoUstadz = button.getAttribute('data-bs-fotoUstadz')
            const tentangUstadz = button.getAttribute('data-bs-tentangUstadz')
            const tarifUstadz = button.getAttribute('data-bs-tarifUstadz')
            const starUstadz = button.getAttribute('data-bs-starUstadz')
            const jarakUstadz = button.getAttribute('data-bs-jarakUstadz')
            const mapUstadz = button.getAttribute('data-bs-mapUstadz')
            // If necessary, you could initiate an Ajax request here
            // and then do the updating in a callback.
            var rating = '';
            for (var i = 0; i < starUstadz; i++) {
                rating += '<i class="fas fa-star text-warning"></i>';
            }
            // Update the modal's content.
            const modalTitle = detailUstadz.querySelector('.modal-title')
            const id = detailUstadz.querySelector('.modal-body input#idUstadz')
            const tentang = detailUstadz.querySelector('.modal-body p#tentangUstadz')
            const tarif = detailUstadz.querySelector('.modal-body p span#tarifUstadz')
            const star = detailUstadz.querySelector('.modal-body p span#starUstadz')

            modalTitle.textContent = `Detail ${namaUstadz}`
            id.value = idUstadz
            tentang.textContent = tentangUstadz
            tarif.textContent = tarifUstadz
            $('#fotoUstadz').html('<img class="rounded-circle" id="fotoUstadz" src="<?= base_url();?>assets/images/'+fotoUstadz+'" alt="..." width="100px" height="100px">')
            $('#starUstadz').html('('+starUstadz+')'+rating)
            $('#mapUstadz').html('<iframe src="'+mapUstadz+'" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>')
            $('#btnPilihUstadz').html('<a href="<?= base_url();?>booking_ustadz?ustadz='+namaUstadz+'" class="btn btn-success">Pilih Ustadz</a>')
          })
        }
    </script>
</body>
</html>