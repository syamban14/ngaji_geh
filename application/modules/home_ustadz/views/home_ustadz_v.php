<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NgajiGeh - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style type="text/css">
        .content {
            display: none;
            padding: 15px;
        }

        .content.active {
            display: block;
        }
        .card-header {
            background-color: #09AD74;
            color: white;
        }

        .header {
            background-color: #09AD74;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .schedule-time {
            font-size: 1rem;
            color: #343a40;
        }
        .student-name {
            font-size: 1.1rem;
            font-weight: bold;
            color: #495057;
        }
        .schedule-date {
            font-size: 0.9rem;
            color: #6c757d;
        }
        /* Style untuk preloader */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #09AD74;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            font-family: Arial, sans-serif;
            color: white;
        }

        /* Style untuk konten utama */
        #content-wrapper, #nav-bottom-wrapper {
            display: none;
        }
        .article-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .article {
            display: flex;
            flex-direction: column;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .article img {
            width: 100%;
            height: auto;
        }

        .article-content {
            padding: 15px;
        }

        .article-title {
            font-size: 18px;
            font-weight: bold;
            margin: 0 0 10px;
        }

        .article-author {
            font-size: 14px;
            color: gray;
            margin-bottom: 10px;
        }

        .article-link {
            text-decoration: none;
            color: #3498db;
        }

		.modal-body .student-name,
		.modal-body .schedule-date,
		.modal-body .schedule-time {
			color: #09AD74;
		}

		.modal-body .card {
			border: 1px solid #09AD74;
		}
        /* Mobile responsive */
        @media(min-width: 768px) {
            .article {
                flex-direction: row;
                max-width: 600px;
                margin: auto;
            }

            .article img {
                width: 150px;
                height: 150px;
                object-fit: cover;
            }

            .article-content {
                padding: 15px;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .article-title {
                font-size: 20px;
            }

            .article-author {
                font-size: 16px;
            }
        }
    </style>
</head>
<body class="bg-light">
    <div id="preloader">
        <div class="text-center">
            <img class="animate__animated animate__bounceIn" src="<?= base_url();?>assets/images/robinsar-fajar.png" alt="" height="300px">
            <p class="mb-0">
                <div class="spinner-border spinner-border-sm text-light" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
                Memuat...
            </p>
        </div>
    </div>
    <div class="content-wrapper" id="content-wrapper">
        <div class="contents">
            <div class="hero bg-success p-3 overflow-hidden">
                <a class="notify" href="#">
                    <i class="bi bi-bell-fill fs-4"></i>
                    <!-- kalo ada notif fetch datanya dari sini ya, bukan dari dalem elemen span nya -->
                    <span class="notify-number" id="notify-number">9+</span>
                    <!-- sampe sini -->
                </a>
                <center>
                    <img src="<?= base_url();?>assets/images/logo.png" alt="" height="50px">
                    <p class="fw-bold text-white text-uppercase">Ngaji Geh</p>
                </center>
                <div class="d-flex align-items-center animate__animated animate__fadeInUp animate__faster">
                    <div class="flex-shrink-0">
                        <img class="rounded-circle shadow" src="<?= base_url();?>assets/images/gambar1.jpg" width="100px" height="100px">
                    </div>
                    <div class="flex-grow-1 ms-2 p-2 bg-white rounded-4 shadow text-success">
                        <center><strong>Fikri Maulana</strong></center>
                        <span><i class="fas fa-id-badge fa-fw"></i> Ustadz</span><br>
                        <span><i class="fas fa-mosque fa-fw"></i> Mesjid Jombang Kali</span><br>
                        <span><i class="fas fa-bookmark fa-fw"></i> Alquran/Tafsir/Hafidz</span><br>
                        <span><i class="fas fa-street-view fa-fw"></i> Santri Saat ini : 30</span>
                    </div>
                </div>
            </div>
            <div class="position-relative">
                <div id="beranda" class="content active animate__animated animate__fadeInUp animate__faster">
                    <div class="card shadow bg-white rounded-4 border-success">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-4 text-center">
                                    <a href="#insentif" data-bs-toggle="modal" class="feature-menu">
                                        <div class="icon-wrapper mx-auto">
                                            <i class="fas fa-solid fa-star"></i>
                                        </div>
                                        Insentif
                                    </a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="daftar_santri" class="feature-menu">
                                        <div class="icon-wrapper mx-auto">
                                            <i class="fas fa-street-view"></i>
                                        </div>
                                        Santri
                                    </a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#" class="feature-menu">
                                        <div class="icon-wrapper mx-auto">
                                            <i class="bi bi-book"></i>
                                        </div>
                                        Mengaji
                                    </a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#jadwal" data-bs-toggle="modal" class="feature-menu">
                                        <div class="icon-wrapper mx-auto">
                                            <i class="bi bi-calendar-week"></i>
                                        </div>
                                        Jadwal
                                    </a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#" class="feature-menu">
                                        <div class="icon-wrapper mx-auto">
                                            <i class="bi bi-list"></i>
                                        </div>
                                        Lainnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Artikel" class="content animate__animated animate__fadeInUp animate__faster">
                    <h1>Artikel</h1>
                    <div class="article-list">
                        <?php
                            // URL API
                            $apiUrl = 'https://artikel-islam.netlify.app/.netlify/functions/api/fir';

                            // Mendapatkan data dari API
                            $apiResponse = file_get_contents($apiUrl);

                            // Mengubah JSON menjadi array PHP
                            $data = json_decode($apiResponse, true);
                            // echo $data;
                            $data2=substr($apiResponse, 113);
                            $lastchar = substr($data2,0, -2);
                            $result = json_decode($lastchar, true);
                                                        
                            foreach ($result as $e) {	
                        ?>
                            <div class="article">
                                <img src="<?php echo $e['thumbnail']; ?>" alt="Article Thumbnail">
                                <div class="article-content">
                                    <a href="<?php echo $e['url']; ?>" class="article-link" target="_blank">
                                        <h2 class="article-title"><?php echo $e['title']; ?></h2>
                                    </a>
                                    <p class="article-author">Author: <?php echo $e['author']; ?> - <i><?php echo $e['date']; ?></i></p>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div id="riwayat" class="content animate__animated animate__fadeInUp animate__faster">
                    <h2 class="text-center mb-4">Riwayat Hari Ini</h2>
                    <!-- Riwayat Mengajar 1 -->
                    <div class="card shadow mb-2">
                        <div class="card-header">
                            Nama Santri: Muhammad Bani Husni
                        </div>
                        <div class="card-body">
                            <p class="card-text mb-0">Surat: Al-Fatihah</p>
                            <p class="card-text mb-0">Ayat: 1-7</p>
                            <p class="card-text mb-0">Jam Mengaji: 08:00 - 08:30</p>
                            <p class="card-text mb-0">Tanggal Mengaji: 13 September 2024</p>
                        </div>
                    </div>

                    <!-- Riwayat Mengajar 2 -->
                    <div class="card shadow mb-2">
                        <div class="card-header">
                            Nama Santri: Fatimah Zahra
                        </div>
                        <div class="card-body">
                            <p class="card-text mb-0">Surat: Al-Baqarah</p>
                            <p class="card-text mb-0">Ayat: 1-5</p>
                            <p class="card-text mb-0">Jam Mengaji: 09:00 - 09:30</p>
                            <p class="card-text mb-0">Tanggal Mengaji: 13 September 2024</p>
                        </div>
                    </div>

                    <!-- Riwayat Mengajar 3 -->
                    <div class="card shadow mb-2">
                        <div class="card-header">
                        Nama Santri:  Hasan bin Ali
                        </div>
                        <div class="card-body">
                            <p class="card-text mb-0">Surat: An-Nas</p>
                            <p class="card-text mb-0">Ayat: 1-6</p>
                            <p class="card-text mb-0">Jam Mengaji: 10:00 - 10:30</p>
                            <p class="card-text mb-0">Tanggal Mengaji: 13 September 2024</p>
                        </div>
                    </div>

                    <!-- Riwayat Mengajar 4 -->
                    <div class="card shadow mb-2">
                        <div class="card-header">
                            Nama Santri:  Furqon
                        </div>
                        <div class="card-body">
                            <p class="card-text mb-0">Surat: Al-Ikhlas</p>
                            <p class="card-text mb-0">Ayat: 1-4</p>
                            <p class="card-text mb-0">Jam Mengaji: 11:00 - 11:30</p>
                            <p class="card-text mb-0">Tanggal Mengaji: 13 September 2024</p>
                        </div>
                    </div>

                    <!-- Riwayat Mengajar 5 -->
                    <div class="card shadow mb-2">
                        <div class="card-header">
                         Nama Santri:  Della
                        </div>
                        <div class="card-body">
                            <p class="card-text mb-0">Surat: Al-Kawthar</p>
                            <p class="card-text mb-0">Ayat: 1-3</p>
                            <p class="card-text mb-0">Jam Mengaji: 12:00 - 12:30</p>
                            <p class="card-text mb-0">Tanggal Mengaji: 13 September 2024</p>
                        </div>
                    </div>
                </div>
                <div id="profile" class="content animate__animated animate__fadeInUp animate__faster">
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control shadow border-success" id="nama_lengkap" value="Fikri Maulana" placeholder="Nama Lengkap" readonly>
                        <label for="nama_lengkap">Nama Lengkap</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control shadow border-success" id="tgl" value="20 Juli 1987" placeholder="Tanggal Lahir" readonly>
                        <label for="tgl">Tanggal Lahir</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control shadow border-success" id="jk" value="Laki-laki" placeholder="Jenis Kelamin" readonly>
                        <label for="jk">Jenis Kelamin</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control shadow border-success" id="pendidikan" value="S1" placeholder="Pendidikan" readonly>
                        <label for="tgl">Pendidikan</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control shadow border-success" id="no_hp" value="087775587778" placeholder="Nomor HP" readonly>
                        <label for="no_hp">Nomor HP</label>
                    </div>
                    <div class="form-floating mb-2">
                        <textarea class="form-control shadow border-success" placeholder="Alamat" id="alamat" readonly style="height: 100px">
BCS Logistics Center
Jl. Raya Merak KM. 115, Cilegon
Banten, Indonesia - 42436
                        </textarea>
                        <label for="alamat">Alamat</label>
                    </div>
                    <div class="form-floating mb-2 position-relative">
                        <input type="file" class="form-control shadow border-success" id="sertifikat" placeholder="Sertifikat Guru Alquran">
                        <label for="sertifikat">Sertifikat Guru Alquran</label>
                        
                        <!-- Tampilan file yang diunggah (hanya tampilan, bukan value sebenarnya) -->
                        <div class="uploaded-file bg-light p-2 border border-success rounded mt-2">
                            <i class="fas fa-file-pdf"></i> sertifikat_guru_mengaji_UMMI.pdf
                        </div>
                    </div>
                    <div class="d-grid mb-2">
                        <button 
                            type="button"
                            class="btn btn-outline-success"
                            data-bs-toggle="modal"
                            data-bs-target="#modalProfil">Edit</button>
                    </div>
                    <div class="d-grid">
                        <button type="button" class="btn btn-outline-danger" id="btn-logout">Logout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-bottom-wrapper shadow-lg" id="nav-bottom-wrapper">
        <div class="container-fluid px-0">
            <div class="row g-0 text-center p-1 menu animate__animated animate__slideInUp animate__faster">
                <a href="#" id="beranda-tab" class="col menu-item active" onclick="showContent('beranda')"><i class="bi bi-house fs-4"></i><br>Beranda</a>
                <a href="#" id="Artikel-tab" class="col menu-item" onclick="showContent('Artikel')"><i class="bi bi-calendar-event fs-4"></i><br>Artikel</a>
                <a href="#" id="riwayat-tab" class="col menu-item" onclick="showContent('riwayat')"><i class="bi bi-clock-history fs-4"></i><br>Riwayat</a>
                <a href="#" id="profile-tab" class="col menu-item" onclick="showContent('profile')"><i class="bi bi-person fs-4"></i><br>Profil</a>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalProfil" tabindex="-1" aria-labelledby="modalProfilLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalProfilLabel">Edit Profil</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post">
              <div class="modal-body">
                <div class="form-floating mb-2">
                    <input type="text" class="form-control shadow border-success" id="nama_lengkap_edit" value="Fikri Maulana" placeholder="Nama Lengkap" readonly>
                    <label for="nama_lengkap_edit">Nama Lengkap</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control shadow border-success" id="tgl_edit" value="20 Juli 1987" placeholder="Tanggal Lahir" readonly>
                    <label for="tgl_edit">Tanggal Lahir</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control shadow border-success" id="jk_edit" value="Laki-laki" placeholder="Jenis Kelamin" readonly>
                    <label for="jk_edit">Jenis Kelamin</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control shadow border-success" id="pendidikan_edit" value="S1" placeholder="Pendidikan" readonly>
                    <label for="pendidikan_edit">Pendidikan</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control shadow border-success" id="no_hp_edit" value="087775587778" placeholder="Nomor HP" readonly>
                    <label for="no_hp_edit">Nomor HP</label>
                </div>
                <div class="form-floating mb-2">
                    <textarea class="form-control shadow border-success" placeholder="Alamat" id="alamat_edit" readonly style="height: 100px">
BCS Logistics Center
Jl. Raya Merak KM. 115, Cilegon
Banten, Indonesia - 42436
                    </textarea>
                    <label for="alamat_edit">Alamat</label>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save changes</button>
              </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="insentif" tabindex="-1" aria-labelledby="insentifLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="insentifLabel">Insentif</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
                <div class="info-label">Nama Ustadz:</div>
                <div class="info-value"><strong>Fikri Maulana</strong></div>
            </div>
            <div class="mb-3">
                <div class="info-label">Jumlah Santri di Bulan Ini:</div>
                <div class="info-value"><strong>30 Santri</strong></div>
            </div>
            <div class="mb-3">
                <div class="info-label">Saldo Insentif:</div>
                <div class="info-value"><strong>Rp 1,300,000</strong></div>
            </div>
            <button class="btn btn-success w-100">Cairkan Insentif</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="jadwal" tabindex="-1" aria-labelledby="jadwalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="jadwalLabel">Jadwal Mengajar</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Jadwal 1 -->
            <div class="card mb-2">
                <div class="card-body p-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="student-name">Ali bin Abi Talib</div>
                            <div class="schedule-date"><i class="far fa-calendar-check"></i> <?php echo date('d');?> September 2024</div>
                        </div>
                        <div class="schedule-time"><i class="far fa-clock"></i> 08:00 - 08:30</div>
                    </div>
                </div>
            </div>

            <!-- Jadwal 2 -->
            <div class="card mb-2">
                <div class="card-body p-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="student-name">Fatimah Az-Zahra</div>
                            <div class="schedule-date"><i class="far fa-calendar-check"></i> <?php echo date('d');?> September 2024</div>
                        </div>
                        <div class="schedule-time"><i class="far fa-clock"></i> 09:00 - 09:30</div>
                    </div>
                </div>
            </div>

            <!-- Jadwal 3 -->
            <div class="card mb-2">
                <div class="card-body p-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="student-name">Hasan bin Ali</div>
                            <div class="schedule-date"><i class="far fa-calendar-check"></i> <?php echo date('d');?> September 2024</div>
                        </div>
                        <div class="schedule-time"><i class="far fa-clock"></i> 10:00 - 10:30</div>
                    </div>
                </div>
            </div>

            <!-- Jadwal 4 -->
            <div class="card mb-2">
                <div class="card-body p-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="student-name">Husain bin Ali</div>
                            <div class="schedule-date"><i class="far fa-calendar-check"></i> <?php echo date('d');?> September 2024</div>
                        </div>
                        <div class="schedule-time"><i class="far fa-clock"></i> 11:00 - 11:30</div>
                    </div>
                </div>
            </div>

            <!-- Jadwal 5 -->
            <div class="card">
                <div class="card-body p-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="student-name">Zainab binti Ali</div>
                            <div class="schedule-date"><i class="far fa-calendar-check"></i> <?php echo date('d');?> September 2024</div>
                        </div>
                        <div class="schedule-time"><i class="far fa-clock"></i> 16:30 - 17:00</div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('sertifikat').addEventListener('change', function() {
            var fileName = this.files[0].name;
            document.querySelector('.uploaded-file').textContent = fileName;
        });
        window.addEventListener('load', function() {
            setTimeout(function() {
                $('#preloader').fadeOut('fast');
                document.getElementById('content-wrapper').style.display = 'block';
                document.getElementById('nav-bottom-wrapper').style.display = 'block';
            }, 1500);
        });
        if ($('#notify-number').text()!=='') {
            $('a.notify > i').addClass('animate__animated animate__tada animate__infinite');
        }
        function showContent(tab){
            document.querySelector('.content.active').classList.remove('active');
            document.getElementById(tab).classList.add('active');
            document.querySelector('.nav-bottom-wrapper .menu a.active').classList.remove('active');
            document.getElementById(tab + '-tab').classList.add('active');
        }
        $('#btn-logout').click(function(event) {
            Swal.fire({
                title: "Logout?",
                text: "Kamu yakin ingin keluar?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Ya",
                confirmButtonColor: "#09AD74",
                cancelButtonText: "Tidak"
            }).then((result) => {
                if (result.isConfirmed) {
                    // session destroy disini ya
                    // pake if ajax aja, if result nya bener maka lakukan swal di bawah
                    Swal.fire({
                        title: "See you!",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 1500,
                        timerProgressBar: true
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            window.location.href = 'login';
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>