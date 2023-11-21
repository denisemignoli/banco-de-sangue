<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onde Doar - Hemocentros em São Paulo</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="./css/onde_doar.css">
    <style>
        #map {
            height: 400px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="requisitos.php">Requisitos de doação</a></li>
            <li><a href="#">Processo de doação</a></li>
            <li><a href="hemocentros.php">Onde doar?</a></li>
        </ul>
    </div>

    <h2 style="text-align:center;">Hemocentros na Região Metropolitana de São Paulo</h2>
    <div id="map"></div>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Coordenadas do centro de São Paulo
        var saoPaulo = [-23.5505, -46.6333];

        // Criação do mapa
        var map = L.map('map').setView(saoPaulo, 12);

        // Título de mapa OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Marcadores dos hemocentros
        var hemocentros = [{
                nome: 'Posto Clínicas',
                lat: -23.5578,
                lng: -46.6689,
                endereco: 'Av. Dr. Enéas Carvalho de Aguiar, 155 - 1º andar'
            },
            {
                nome: 'Posto Dante Pazzanese',
                lat: -23.5853,
                lng: -46.6511,
                endereco: 'Av. Doutor Dante Pazzanese, 500'
            },
            {
                nome: 'Posto Mandaqui',
                lat: -23.4845,
                lng: -46.6303,
                endereco: 'Rua Voluntários da Pátria, 4.227'
            },
            {
                nome: 'Posto Regional de Osasco',
                lat: -23.5247,
                lng: -46.7717,
                endereco: 'Rua Ari Barroso, 355'
            },
            {
                nome: 'Posto Barueri',
                lat: -23.4964,
                lng: -46.8722,
                endereco: 'Rua Angela Mirella, 354, térreo'
            },
            {
                nome: 'Posto Stella Maris',
                lat: -23.4786,
                lng: -46.5514,
                endereco: 'Rua Maria Cândida Pereira, 568'
            }
        ];

        hemocentros.forEach(function(hemocentro) {
            L.marker([hemocentro.lat, hemocentro.lng]).addTo(map)
                .bindPopup('<b>' + hemocentro.nome + '</b><br>' + hemocentro.endereco);
        });
    </script>

    <!-- Div de cadastro/login -->
    <hr>
    <div class="div-container">
        <div class="div1">
            <h2>Cadastro de Doador</h2>
            <p>Novo por aqui? Faça o seu cadastro.</p>
            <a href="cadastro.php" class="button">Cadastrar</a>
        </div>
        <div class="div2">
            <h2>Login de Doador</h2>
            <p>Já é um doador? Faça o login.</p>
            <a href="login.php" class="button">Login</a>
        </div>
    </div>
    <br>
    <hr>

    <!-- Footer -->
    <div>
        <footer>
            <img src="./assets/facebook.png" alt="facebook icon" width="30">
            <img src="./assets/twitter.png" alt="twitter icon" width="30">
            <img src="./assets/youtube.png" alt="youtube icon" width="30">
            <img src="./assets/instagram.png" alt="instagram icon" width="30">
        </footer>
    </div>

</body>

</html>