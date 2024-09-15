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
					<p class="fw-bold text-white text-uppercase mb-0">Ngaji Geh</p>
					<img src="<?= base_url(); ?>assets/images/ustadz.png" alt="" height="150px">
				</center>
				<div class="card shadow-lg" style="border-radius: 10px; overflow: hidden;">
					<div class="card-body" style="background-color: #e0f2f1;">

						<!-- Form Login Modern -->
						<form id="loginForm">
							<div class="form-group mb-3 position-relative">
								<label for="username" class="sr-only">Username</label>
								<input type="text" class="form-control form-control-lg ps-5" id="username" placeholder="Username" style="border-radius: 10px;" required>
								<i class="fas fa-user position-absolute" style="top: 50%; left: 15px; transform: translateY(-50%); color: #00796b;"></i>
							</div>

							<div class="form-group mb-3 position-relative">
								<label for="password" class="sr-only">Password</label>
								<input type="password" class="form-control form-control-lg ps-5" id="password" placeholder="Password" style="border-radius: 10px;" required>
								<i class="fas fa-lock position-absolute" style="top: 50%; left: 15px; transform: translateY(-50%); color: #00796b;"></i>
							</div>

							<div class="d-grid gap-2 mb-3">
								<button type="submit" class="btn btn-success btn-lg" style="background-color: #09AD74; border-radius: 10px;">Login</button>
							</div>
						</form>

						<p class="text-center mb-3" style="color: #004d40;">Atau login dengan</p>

						<div class="d-grid gap-2 mb-3">
							<a href="#" class="btn btn-danger btn-lg btn-block" style="border-radius: 10px;">
								<i class="fab fa-google mr-2"></i> Google
							</a>
						</div>

						<hr>

						<div class="text-center">
							<p class="text-muted mb-0" style="color: #004d40;">Belum punya akun? <a href="<?= base_url('sign_up');?>" style="color: #00796b;">Daftar di sini</a></p>
						</div>
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
