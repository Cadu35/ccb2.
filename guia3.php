<!-- Guia 3: Madeiras -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Guia Madeiras</title>
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
    const instruments = ["flauta", "oboe", "oboe_damore", "corne_ingles", "fagote", "clarinete", "clarinete_alto", "clarinete_baixo", "sax_soprano", "sax_alto", "sax_tenor", "sax_baritono"];
    let table = "<table id='result'><tr><th>Instrumento</th><th>Quantidade</th></tr>";
    instruments.forEach(instrument => {
        const count = document.getElementById(`${instrument}-count`).textContent;
        table += `<tr><td>${instrument.replace(/_/g, ' ').charAt(0).toUpperCase() + instrument.replace(/_/g, ' ').slice(1)}</td><td>${count}</td></tr>`;
    });
    table += "</table>";
    document.getElementById("output").innerHTML = table;
}
</script>
</head>
<body>
<h1>Instrumentos de Madeiras</h1>
<div class="instrument">
    <img src="flauta.jpg" alt="Flauta">
    <span>Flauta</span>
    <button onclick="updateCounter('flauta', false)">-</button>
    <span id="flauta-count">0</span>
    <button onclick="updateCounter('flauta', true)">+</button>
</div>
<div class="instrument">
    <img src="oboe.jpg" alt="Oboé">
    <span>Oboé</span>
    <button onclick="updateCounter('oboe', false)">-</button>
    <span id="oboe-count">0</span>
    <button onclick="updateCounter('oboe', true)">+</button>
</div>
<div class="instrument">
    <img src="oboe_damore.jpg" alt="Oboé d'Amore">
    <span>Oboé d'Amore</span>
    <button onclick="updateCounter('oboe_damore', false)">-</button>
    <span id="oboe_damore-count">0</span>
    <button onclick="updateCounter('oboe_damore', true)">+</button>
</div>
<div class="instrument">
    <img src="corne_ingles.jpg" alt="Corne Inglês">
    <span>Corne Inglês</span>
    <button onclick="updateCounter('corne_ingles', false)">-</button>
    <span id="corne_ingles-count">0</span>
    <button onclick="updateCounter('corne_ingles', true)">+</button>
</div>
<div class="instrument">
    <img src="fagote.jpg" alt="Fagote">
    <span>Fagote</span>
    <button onclick="updateCounter('fagote', false)">-</button>
    <span id="fagote-count">0</span>
    <button onclick="updateCounter('fagote', true)">+</button>
</div>
<div class="instrument">
    <img src="clarinete.jpg" alt="Clarinete">
    <span>Clarinete</span>
    <button onclick="updateCounter('clarinete', false)">-</button>
    <span id="clarinete-count">0</span>
    <button onclick="updateCounter('clarinete', true)">+</button>
</div>
<div class="instrument">
    <img src="clarinete_alto.jpg" alt="Clarinete Alto">
    <span>Clarinete Alto</span>
    <button onclick="updateCounter('clarinete_alto', false)">-</button>
    <span id="clarinete_alto-count">0</span>
    <button onclick="updateCounter('clarinete_alto', true)">+</button>
</div>
<div class="instrument">
    <img src="clarinete_baixo.jpg" alt="Clarinete Baixo">
    <span>Clarinete Baixo</span>
    <button onclick="updateCounter('clarinete_baixo', false)">-</button>
    <span id="clarinete_baixo-count">0</span>
    <button onclick="updateCounter('clarinete_baixo', true)">+</button>
</div>
<div class="instrument">
    <img src="sax_soprano.jpg" alt="Sax Soprano">
    <span>Sax Soprano</span>
    <button onclick="updateCounter('sax_soprano', false)">-</button>
    <span id="sax_soprano-count">0</span>
    <button onclick="updateCounter('sax_soprano', true)">+</button>
</div>
<div class="instrument">
    <img src="sax_alto.jpg" alt="Sax Alto">
    <span>Sax Alto</span>
    <button onclick="updateCounter('sax_alto', false)">-</button>
    <span id="sax_alto-count">0</span>
    <button onclick="updateCounter('sax_alto', true)">+</button>
</div>
<div class="instrument">
    <img src="sax_tenor.jpg" alt="Sax Tenor">
    <span>Sax Tenor</span>
    <button onclick="updateCounter('sax_tenor', false)">-</button>
    <span id="sax_tenor-count">0</span>
    <button onclick="updateCounter('sax_tenor', true)">+</button>
</div>
<div class="instrument">
    <img src="sax_baritono.jpg" alt="Sax Barítono">
    <span>Sax Barítono</span>
    <button onclick="updateCounter('sax_baritono', false)">-</button>
    <span id="sax_baritono-count">0</span>
    <button onclick="updateCounter('sax_baritono', true)">+</button>
</div>
<button onclick="saveCounts()">Salvar</button>
<div id="output"></div>
</body>
</html>
