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
        <a href="<?= base_url('home_ustadz');?>">
            <i class="fas fa-arrow-left"></i>
        </a>
        <span class="ms-auto">Daftar Santri</span>
    </div>
    <!-- Pencarian -->
    <div class="container mt-4">
        <input type="text" class="form-control" id="searchInput" placeholder="Cari Santri..." onkeyup="searchSantri()">
    </div>

    <!-- Daftar Santri -->
    <div class="container mt-3" id="santri-list">
        <!-- Contoh Data Santri -->
        <div class="card santri-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6 mt-2">
                        <div class="field-label">Nama:</div>
                        <div class="field-value">Ali bin Abi Talib</div>
                    </div>
                    <div class="col-6 mt-2">
                        <div class="field-label">Usia:</div>
                        <div class="field-value">10 tahun</div>
                    </div>
                    <div class="col-6 mt-2">
                        <div class="field-label">Lokasi:</div>
                        <div class="field-value">Cilegon</div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="field-label">Progres Mengaji:</div>
                        <div class="field-value">Surah Al-Fatihah, Ayat 1-5 (Sedang Belajar)</div>
                    </div>
                    <div class="col-6 mt-2">
                        <div class="field-label">Nama Orangtua:</div>
                        <div class="field-value">Abu Talib</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tambahkan 9 data santri lainnya dengan progres mengaji yang berbeda -->

        <!-- Data contoh tambahan untuk simulasi pagination -->
        <div class="card santri-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6 mt-2">
                        <div class="field-label">Nama:</div>
                        <div class="field-value">Fatimah Az-Zahra</div>
                    </div>
                    <div class="col-6 mt-2">
                        <div class="field-label">Usia:</div>
                        <div class="field-value">9 tahun</div>
                    </div>
                    <div class="col-6 mt-2">
                        <div class="field-label">Lokasi:</div>
                        <div class="field-value">Serang</div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="field-label">Progres Mengaji:</div>
                        <div class="field-value">Surah Al-Baqarah, Ayat 1-10 (Belum Mulai)</div>
                    </div>
                    <div class="col-6 mt-2">
                        <div class="field-label">Nama Orangtua:</div>
                        <div class="field-value">Ali bin Abi Talib</div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="nav-bottom-wrapper shadow-lg">
        <div class="container-fluid px-0">
            <div class="row g-0 text-center p-1 menu">
                <a href="home_ustadz" id="beranda-tab" class="col menu-item active" onclick="showContent('beranda')"><i class="bi bi-house fs-4"></i><br>Beranda</a>
                <a href="#" id="Artikel-tab" class="col menu-item" onclick="showContent('Artikel')"><i class="bi bi-calendar-event fs-4"></i><br>Artikel</a>
                <a href="#" id="riwayat-tab" class="col menu-item" onclick="showContent('riwayat')"><i class="bi bi-clock-history fs-4"></i><br>Riwayat</a>
                <a href="#" id="profile-tab" class="col menu-item" onclick="showContent('profile')"><i class="bi bi-person fs-4"></i><br>Profil</a>
            </div>
        </div>
    </div>
    <!-- Paginasi -->
    <div class="container mt-4">
        <nav>
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
    <script>
        function searchSantri() {
            // Ambil input pencarian
            const input = document.getElementById('searchInput').value.toLowerCase();
            const santriCards = document.querySelectorAll('.santri-card');

            // Filter data santri berdasarkan input pencarian
            santriCards.forEach(card => {
                const nama = card.querySelector('.field-value').textContent.toLowerCase();
                if (nama.includes(input)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>