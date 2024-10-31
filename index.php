<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tebak Angka</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="container">
        <h1>Tebak Angka</h1>
        <p>Masukkan angka antara 1 dan 100:</p>
        <input type="number" id="guess" min="1" max="100">
        <button onclick="checkGuess()">Tebak</button>
        <p id="result"></p>
        <p id="attempts"></p>
        <button id="restart" class="hidden" onclick="restartGame()">Mulai Lagi</button>
</div>     
    <script src="script.js"></script>
</body>
</html>