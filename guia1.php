<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Guia Cordas</title>
<style>
body {
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    margin: 0;
    text-align: center;
    background-color: #f9f9f9;
}
h1 {
    margin-bottom: 20px;
}
.instrument {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 300px;
    margin: 10px 0;
}
.instrument img {
    width: 80px;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
button {
    padding: 5px 10px;
    font-size: 16px;
    cursor: pointer;
}
#result {
    margin-top: 20px;
    width: 80%;
    border-collapse: collapse;
}
#result th, #result td {
    border: 1px solid #ccc;
    padding: 8px;
}
</style>
<script>
function updateCounter(instrument, increment) {
    const countElement = document.getElementById(`${instrument}-count`);
    let currentCount = parseInt(countElement.textContent);
    currentCount = increment ? currentCount + 1 : Math.max(0, currentCount - 1);
    countElement.textContent = currentCount;
}

function saveCounts() {
    const instruments = ["violino", "viola", "violoncelo"];
    let table = "<table id='result'><tr><th>Instrumento</th><th>Quantidade</th></tr>";
    instruments.forEach(instrument => {
        const count = document.getElementById(`${instrument}-count`).textContent;
        table += `<tr><td>${instrument.charAt(0).toUpperCase() + instrument.slice(1)}</td><td>${count}</td></tr>`;
    });
    table += "</table>";
    document.getElementById("output").innerHTML = table;
}
</script>
</head>
<body>
<h1>Instrumentos de Cordas</h1>
<div class="instrument">
    <img src="violino.jpg" alt="Violino">
    <span>Violino</span>
    <button onclick="updateCounter('violino', false)">-</button>
    <span id="violino-count">0</span>
    <button onclick="updateCounter('violino', true)">+</button>
</div>
<div class="instrument">
    <img src="viola.jpg" alt="Viola">
    <span>Viola</span>
    <button onclick="updateCounter('viola', false)">-</button>
    <span id="viola-count">0</span>
    <button onclick="updateCounter('viola', true)">+</button>
</div>
<div class="instrument">
    <img src="violoncelo.jpg" alt="Violoncelo">
    <span>Violoncelo</span>
    <button onclick="updateCounter('violoncelo', false)">-</button>
    <span id="violoncelo-count">0</span>
    <button onclick="updateCounter('violoncelo', true)">+</button>
</div>
<button onclick="saveCounts()">Salvar</button>
<div id="output"></div>
</body>
</html>
