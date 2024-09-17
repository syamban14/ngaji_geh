<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NgajiGeh - Live Chat Ustadz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .chat-container {
            display: flex;
            flex-direction: column;
            height: 100vh;
            max-width: 600px;
            margin: 0 auto;
        }
        .profile-header {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            background-color: #09ad74;
            color: white;
        }
        .profile-header img {
            border-radius: 50%;
            height: 60px;
            width: 60px;
            margin-right: 15px;
        }
        .profile-header h3 {
            margin: 0;
        }
        .chat-box {
            flex: 1;
            overflow-y: auto;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .message {
            margin-bottom: 10px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .message.user {
            align-items: flex-end;
        }
        .message .sender {
            font-weight: bold;
        }
        .message .content {
            border-radius: 10px;
            padding: 10px;
            max-width: 80%;
            line-height: 1.5;
            word-wrap: break-word;
        }
        .message.ustadz .content {
            background-color: #e1f5fe;
            color: #000;
        }
        .message.user .content {
            background-color: #09ad74;
            color: #fff;
        }
        .message-buttons {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
        }
        .message-buttons button {
            background-color: #09ad74;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            margin-bottom: 5px;
        }
        .message-buttons button:hover {
            background-color: #00332d;
        }
        .message-input {
            display: flex;
            align-items: center;
            border-top: 1px solid #ddd;
            padding: 10px;
            background-color: #fff;
        }
        .message-input input {
            flex: 1;
            border: none;
            border-radius: 5px;
            padding: 10px;
        }
        .message-input button {
            background-color: #09ad74;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }
        .end-chat {
            text-align: center;
            padding: 10px;
        }
        .end-chat button {
            background-color: #d32f2f;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <!-- Profil Ustadz -->
        <div class="profile-header">
            <img src="<?= base_url();?>assets/images/logo.png" alt="Profil Ustadz" id="ustadzProfileImage">
            <div>
                <h3 id="ustadzNameFull"></h3>
                <p id="ustadzSpecialization" class="mb-0"></p>
            </div>
        </div>
        
        <div class="chat-box" id="chatBox">
            <!-- Pesan akan ditampilkan di sini -->
        </div>
        <div class="message-input">
            <input type="text" id="messageInput" placeholder="Tulis pesan...">
            <button onclick="sendMessage()">Kirim</button>
        </div>
        <!-- Tombol Akhiri Percakapan -->
        <div class="end-chat">
            <button onclick="endChat()">Batal Memilih</button>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        const chatBox = document.getElementById('chatBox');
        const messageInput = document.getElementById('messageInput');
        const ustadzProfileImage = document.getElementById('ustadzProfileImage');
        const ustadzNameFull = document.getElementById('ustadzNameFull');
        const ustadzSpecialization = document.getElementById('ustadzSpecialization');

        function appendMessage(sender, message, withButtons = false) {
            const messageDiv = document.createElement('div');
            messageDiv.classList.add('message');
            if (sender === 'Anda') {
                messageDiv.classList.add('user');
            } else {
                messageDiv.classList.add('ustadz');
            }
            messageDiv.innerHTML = `<div class="sender">${sender}:</div> <div class="content">${message}</div>`;
            
            if (withButtons) {
                const buttonDiv = document.createElement('div');
                buttonDiv.classList.add('message-buttons');
                buttonDiv.innerHTML = `
                    <button onclick="handleOption('Perkenalan')">Perkenalan</button>
                    <button onclick="handleOption('Aqad')">Aqad Infaq per sesi</button>
                    <button onclick="handleOption('Mulai Sesi')">Mulai Sesi</button>
                `;
                messageDiv.appendChild(buttonDiv);
            }
            
            chatBox.appendChild(messageDiv);
            chatBox.scrollTop = chatBox.scrollHeight; // Scroll ke pesan terbaru
        }

        function sendMessage() {
            const message = messageInput.value.trim();
            if (message) {
                appendMessage('Anda', message); // Pesan dari pengguna
                messageInput.value = '';

                // Simulasikan balasan dari ustadz
                setTimeout(() => {
                    appendMessage('Ustadz', 'Waalaikumsalam, Silakan pilih salah satu opsi berikut:', true);
                }, 1000);
            }
        }

        function handleOption(option) {
            let responseMessage = '';
            if (option === 'Perkenalan') {
                responseMessage = 'Assalamu`alaikuum, saya '+ustadz+' dan saya memiliki 30 santri dalam kelas Ngaji Geh ini.';
            } else if (option === 'Aqad') {
                responseMessage = 'Silahkan kita sepakati aqad untuk infaq, diakhir sesi yaa.';
            } else if (option === 'Mulai Sesi') {
                responseMessage = 'Mari kita mulai sesi pembelajaran.';
                // Arahkan pengguna ke halaman sesi
                window.location.href = 'mengaji';
            }
            appendMessage('Ustadz', responseMessage);
        }

        function endChat() {
            window.location.href = 'cari_ustadz'; // Mengarahkan kembali ke halaman home
        }

        // Mengambil parameter URL
        const params = new URLSearchParams(window.location.search);
        const ustadz = params.get('ustadz');
        if (ustadz) {
            ustadzNameFull.innerText = ustadz.charAt(0).toUpperCase() + ustadz.slice(1);
            ustadzSpecialization.innerText = 'Spesialisasi: Ahli Fiqih dan Tafsir.'; // Ganti dengan spesialisasi aktual
            ustadzProfileImage.src = '<?= base_url();?>assets/images/logo.png'; // Ganti dengan gambar profil aktual
        }
    </script>
</body>
</html>
