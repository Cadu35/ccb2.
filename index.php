<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
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

        .images {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .images a img {
            width: 150px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .images a img:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <h1>Escolha uma classe</h1>
    <div class="images">
        <a href="guia1.html"><img src="cordas.jpg" alt="Cordas"></a>
        <a href="guia2.html"><img src="metais.jpg" alt="Metais"></a>
        <a href="guia3.html"><img src="madeiras.jpg" alt="Madeiras"></a>
    </div>
</body>
</html>
