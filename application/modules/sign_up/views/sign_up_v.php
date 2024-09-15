<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NgajiGeh - Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>

<body class="bg-success">
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center vh-100">
			<div class="col-md-4">
				<center>
					<img src="<?= base_url(); ?>assets/images/logo.png" alt="" height="50px">
					<p class="fw-bold text-white text-uppercase">Registrasi</p>
				</center>
				<div class="card shadow-lg" style="border-radius: 10px; overflow: hidden;">
					<div class="card-body" style="background-color: #e0f2f1;">
						<form id="signupForm">
							<div class="form-floating mb-2">
							  <select class="form-select" id="role" name="role" aria-label="role">
							    <option value="1">Ustadz/Ustadzah</option>
							    <option value="2">Santri</option>
							  </select>
							  <label for="role">Sebagai</label>
							</div>
							<div class="form-floating mb-2">
							  <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
							  <label for="nama_lengkap">Nama Lengkap</label>
							</div>
							<div class="form-floating mb-2">
							  <input type="email" class="form-control" id="email" name="email" placeholder="Email">
							  <label for="email">Email</label>
							</div>
							<div class="form-floating mb-2">
							  <input type="text" class="form-control" id="username" name="username" placeholder="Username">
							  <label for="username">Username</label>
							</div>
							<div class="form-floating mb-2">
							  <select class="form-select" id="role" name="role" aria-label="role">
							    <option value="">- Pilih -</option>
							    <option value="1">Sekolah Dasar</option>
							    <option value="2">Sekolah Menengah Pertama</option>
							    <option value="2">Sekolah Menengah Atas</option>
							    <option value="2">Diploma</option>
							    <option value="2">Sarjana</option>
							  </select>
							  <label for="role">Pendidikan</label>
							</div>
							<div class="form-floating mb-2">
							  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
							  <label for="password">Password</label>
							</div>
							<div class="form-floating mb-2">
							  <input type="password" class="form-control" id="k_password" name="k_password" placeholder="Konfirmasi Password">
							  <label for="k_password">Konfirmasi Password</label>
							</div>
							<div class="row g-2">
				                <div class="col">
				                    <div class="d-grid">
				                        <!-- <button type="button" class="btn btn-success">Submit</button> -->
				                        <a href="https://modest-monster-greatly.ngrok-free.app/ngaji_geh.up/register.html" type="button" class="btn btn-success">Submit</a>
				                    </div>
				                </div>
				                <div class="col">
				                    <div class="d-grid">
				                        <a href="<?= base_url('login');?>" class="btn btn-secondary">Batal</a>
				                    </div>
				                </div>
				            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<!-- Script untuk menangani login, alert sukses, dan redirect ke loading page -->
	<script>
		document.getElementById('loginForm').addEventListener('submit', function(event) {
			event.preventDefault(); // Mencegah form dikirim secara default

			// Ambil nilai dari input username dan password
			var username = document.getElementById('username').value;
			var password = document.getElementById('password').value;

			// Logika sederhana untuk validasi
			if (username === 'ngaji' && password === 'ngajigeh') {
				// Tampilkan alert sukses
				$('button[type="submit"]').attr("disabled", true);
				$('button[type="submit"]').html('<span class="spinner-border spinner-border-sm" aria-hidden="true"></span>' +
					'<span role="status"> Loading...</span>');
				// alert('Login berhasil! Anda akan diarahkan ke halaman utama.');

				// Redirect ke halaman loading setelah alert
				setTimeout(function() {
					window.location.href = 'home';
				}, 1000); // Delay 1 detik setelah alert sebelum ke loading
			} else if(username === 'abdul_hamid' && password === '123456') {
                // Tampilkan alert sukses
                $('button[type="submit"]').attr("disabled",true);
                $('button[type="submit"]').html('<span class="spinner-border spinner-border-sm" aria-hidden="true"></span>'+
                                                '<span role="status"> Loading...</span>');
                // alert('Login berhasil! Anda akan diarahkan ke halaman utama.');

                // Redirect ke halaman loading setelah alert
                setTimeout(function() {
                    window.location.href = 'home_ustadz';
                }, 1000);  // Delay 1 detik setelah alert sebelum ke loading
			} else {
				// Tampilkan alert jika login gagal
				Swal.fire({
					title: "Gagal!",
					text: "Username dan Password tidak sesuai",
					icon: "error"
				});
			}
		});
	</script>
</body>

</html>
