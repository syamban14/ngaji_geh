<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sesi Ngaji</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style>
		body {
			background-color: #e8f5e9;
			/* Background light green */
		}

		.session-container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background: white;
			border-radius: 10px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		}

		.session-header {
			padding: 15px;
			border-bottom: 2px solid #09ad74;
			background-color: #09ad74;
			color: white;
			text-align: center;
			border-radius: 10px 10px 0 0;
		}

		.session-content {
			padding: 20px;
			color: black;
			line-height: 1.6;
		}

		.timer {
			font-size: 36px;
			font-weight: bold;
			color: #09ad74;
			text-align: center;
			margin: 20px 0;
		}

		.end-session {
			text-align: center;
			padding: 20px;
		}

		.end-session button {
			background-color: #d32f2f;
			color: white;
			border: none;
			border-radius: 5px;
			padding: 12px 20px;
			cursor: pointer;
			font-size: 16px;
			transition: background-color 0.3s;
		}

		.end-session button:hover {
			background-color: #b71c1c;
		}

		/* Modal button styles */
		.modal-footer button {
			font-size: 16px;
			font-weight: 600;
			border-radius: 5px;
			padding: 10px 20px;
		}

		.modal-footer .btn-secondary {
			background-color: #9e9e9e;
			border-color: #9e9e9e;
			color: white;
			transition: background-color 0.3s, border-color 0.3s;
		}

		.modal-footer .btn-secondary:hover {
			background-color: #757575;
			border-color: #757575;
		}

		.modal-footer .btn-danger {
			background-color: #d32f2f;
			border-color: #d32f2f;
			color: white;
			transition: background-color 0.3s, border-color 0.3s;
		}

		.modal-footer .btn-danger:hover {
			background-color: #b71c1c;
			border-color: #b71c1c;
		}

		/* Rating styles */
		.rating {
			display: flex;
			justify-content: center;
			margin: 10px 0;
		}

		.rating input {
			display: none;
		}

		.rating label {
			font-size: 24px;
			color: #ccc;
			cursor: pointer;
		}

		.rating input:checked~label {
			color: #f5c518;
		}

		.rating label:hover,
		.rating label:hover~label {
			color: #f5c518;
		}

		.payment-info {
			margin: 10px 0;
			text-align: center;
		}

		button {
			padding: 10px 20px;
			font-size: 16px;
			margin: 25px;
		}
	</style>
</head>

<body>
	<div class="session-container">
		<div class="session-header">
			<h2>Mulai Mengaji</h2>
		</div>
		<!-- <script src="app.js"></script> -->

		<div class="session-content">
			<p>Sesi pembelajaran ngaji dengan Ustadz telah dimulai. Anda dapat mulai belajar sesuai dengan topik yang telah disepakati.</p>
			<center>
				<button id="startRecord" class="btn btn-success" onclick="startTimer()">Mulai</button>
				<button id="stopRecord" class="btn btn-warning" onclick="stopTimer()" disabled>Berhenti</button>
			</center>
			<audio id="audioPlayback" controls></audio>
			<!-- Timer -->
			<div class="timer" id="timer">00:00:00</div>
		</div>
		<div class="end-session">
			<button onclick="confirmEndSession()">Akhiri Sesi</button>
		</div>
	</div>

	<!-- Notifikasi Konfirmasi -->
	<div class="modal fade" id="endSessionModal" tabindex="-1" role="dialog" aria-labelledby="endSessionModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="endSessionModalLabel">Konfirmasi Akhiri Sesi</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Apakah Anda yakin ingin mengakhiri sesi? Silahkan berikan rating terhadap sesi ini.</p>
					<!-- Rating Bintang -->
					<div class="rating">
						<input type="radio" name="rating" id="rating-1" value="1"><label for="rating-1">&#9733;</label>
						<input type="radio" name="rating" id="rating-2" value="2"><label for="rating-2">&#9733;</label>
						<input type="radio" name="rating" id="rating-3" value="3"><label for="rating-3">&#9733;</label>
						<input type="radio" name="rating" id="rating-4" value="4"><label for="rating-4">&#9733;</label>
						<input type="radio" name="rating" id="rating-5" value="5"><label for="rating-5">&#9733;</label>
					</div>
					<div class="payment-info">
						<div class="container qr-code-container">
							<p class="text-center">Silahkan scan kode QR di bawah untuk infaq: <span id="sessionCode" class="d-none"></span></p>
							<!-- Container for QR Code -->
							<div id="qrcode" class="qr-code" align="center"></div>
						</div><br>
						<p>Infaq akan diberikan kepada Ustadz, sesuai dengan aqad (kesepakatan).</p>
						<button type="button" class="btn btn-danger" onclick="confirmPayment()">Konfirmasi</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
	<!-- QRCode.js Library -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

	<script>
		// Function to generate unique session code
		function generateSessionCode(sessionNumber) {
			const prefix = "ngaji_geh";
			const today = new Date();
			const year = today.getFullYear();
			const month = String(today.getMonth() + 1).padStart(2, '0');
			const day = String(today.getDate()).padStart(2, '0');
			const sessionCode = `${prefix}${year}${month}${day}${String(sessionNumber).padStart(3, '0')}`;
			return sessionCode;
		}

		// Simulate the session number (should be fetched from server or database)
		const sessionNumber = 1; // Example: 001 for the first session

		// Generate the session code
		const sessionCode = generateSessionCode(sessionNumber);

		// Display session code
		document.getElementById('sessionCode').textContent = sessionCode;

		// Generate QR code using session code
		new QRCode(document.getElementById("qrcode"), {
			text: sessionCode,
			width: 150,
			height: 150,
			colorDark: "#004d40",
			colorLight: "#ffffff",
			correctLevel: QRCode.CorrectLevel.H
		});
	</script>
	<script>
		// Timer variables
		let timer;
		let seconds = 0;
		let minutes = 0;
		let hours = 0;

		function startTimer() {
			seconds = 0;
			timer = setInterval(updateTimer, 1000);
		}

		function stopTimer() {
			clearInterval(timer); // Menghentikan timer
		}

		function updateTimer() {
			seconds++;
			if (seconds >= 60) {
				seconds = 0;
				minutes++;
				if (minutes >= 60) {
					minutes = 0;
					hours++;
				}
			}
			document.getElementById('timer').textContent =
				(hours < 10 ? '0' : '') + hours + ':' +
				(minutes < 10 ? '0' : '') + minutes + ':' +
				(seconds < 10 ? '0' : '') + seconds;
		}

		function confirmEndSession() {
			$('#endSessionModal').modal('show');
		}

		function confirmPayment() {
			alert('Infaq telah dikonfirmasi!');
			// Redirect to loading page
			window.location.href = 'home';
		}

		function endSession() {
			clearInterval(timer); // Stop the timer
			// Redirect to loading page
			window.location.href = 'loading.html';
		}

		// Start the timer when the page loads
		// window.onload = startTimer;
	</script>

	<!-- Script untuk merekam audio -->
	<script>
		let mediaRecorder;
		let audioChunks = [];

		const startRecordButton = document.getElementById('startRecord');
		const stopRecordButton = document.getElementById('stopRecord');
		const audioPlayback = document.getElementById('audioPlayback');

		navigator.mediaDevices.getUserMedia({
				audio: true
			})
			.then(stream => {
				mediaRecorder = new MediaRecorder(stream);

				mediaRecorder.ondataavailable = function(event) {
					audioChunks.push(event.data);
				};

				mediaRecorder.onstop = function() {
					const audioBlob = new Blob(audioChunks, {
						type: 'audio/wav'
					});
					const audioUrl = URL.createObjectURL(audioBlob);
					audioPlayback.src = audioUrl;
					audioChunks = [];

					// Mengirimkan data ke server PHP
					const formData = new FormData();
					formData.append('audio', audioBlob, 'rekaman.wav');

					fetch('save.php', {
							method: 'POST',
							body: formData
						})
						.then(response => response.text())
						.then(data => {
							console.log(data);
						})
						.catch(error => {
							console.error('Error:', error);
						});
				};

				startRecordButton.addEventListener('click', () => {
					mediaRecorder.start();
					startRecordButton.disabled = true;
					stopRecordButton.disabled = false;
				});

				stopRecordButton.addEventListener('click', () => {
					mediaRecorder.stop();
					startRecordButton.disabled = false;
					stopRecordButton.disabled = true;
				});
			})
			.catch(error => console.error('getUserMedia error:', error));
	</script>

</body>

</html>