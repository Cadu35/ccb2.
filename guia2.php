<!-- Guia 2: Metais -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Guia Metais</title>
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
    const instruments = ["trompete", "cornet", "flugelhorn", "trompa", "trombone", "trombonito", "baritono", "eufonio", "tuba"];
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
<h1>Instrumentos de Metais</h1>
<div class="instrument">
    <img src="trompete.jpg" alt="Trompete">
    <span>Trompete</span>
    <button onclick="updateCounter('trompete', false)">-</button>
    <span id="trompete-count">0</span>
    <button onclick="updateCounter('trompete', true)">+</button>
</div>
<div class="instrument">
    <img src="cornet.jpg" alt="Cornet">
    <span>Cornet</span>
    <button onclick="updateCounter('cornet', false)">-</button>
    <span id="cornet-count">0</span>
    <button onclick="updateCounter('cornet', true)">+</button>
</div>
<div class="instrument">
    <img src="flugelhorn.jpg" alt="Flugelhorn">
    <span>Flugelhorn</span>
    <button onclick="updateCounter('flugelhorn', false)">-</button>
    <span id="flugelhorn-count">0</span>
    <button onclick="updateCounter('flugelhorn', true)">+</button>
</div>
<div class="instrument">
    <img src="trompa.jpg" alt="Trompa">
    <span>Trompa</span>
    <button onclick="updateCounter('trompa', false)">-</button>
    <span id="trompa-count">0</span>
    <button onclick="updateCounter('trompa', true)">+</button>
</div>
<div class="instrument">
    <img src="trombone.jpg" alt="Trombone">
    <span>Trombone</span>
    <button onclick="updateCounter('trombone', false)">-</button>
    <span id="trombone-count">0</span>
    <button onclick="updateCounter('trombone', true)">+</button>
</div>
<div class="instrument">
    <img src="trombinito.jpg" alt="Trombonito">
    <span>Trombonito</span>
    <button onclick="updateCounter('trombonito', false)">-</button>
    <span id="trombonito-count">0</span>
    <button onclick="updateCounter('trombonito', true)">+</button>
</div>
<div class="instrument">
    <img src="baritono.jpg" alt="Barítono">
    <span>Barítono</span>
    <button onclick="updateCounter('baritono', false)">-</button>
    <span id="baritono-count">0</span>
    <button onclick="updateCounter('baritono', true)">+</button>
</div>
<div class="instrument">
    <img src="eufonio.jpg" alt="Eufônio">
    <span>Eufônio</span>
    <button onclick="updateCounter('eufonio', false)">-</button>
    <span id="eufonio-count">0</span>
    <button onclick="updateCounter('eufonio', true)">+</button>
</div>
<div class="instrument">
    <img src="tuba.jpg" alt="Tuba">
    <span>Tuba</span>
    <button onclick="updateCounter('tuba', false)">-</button>
    <span id="tuba-count">0</span>
    <button onclick="updateCounter('tuba', true)">+</button>
</div>
<button onclick="saveCounts()">Salvar</button>
<div id="output"></div>
</body>
</html>

