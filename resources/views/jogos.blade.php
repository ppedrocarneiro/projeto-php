<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trendy-car</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="home.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.4.0/css/ionicons.min.css" />
  <link rel="stylesheet" href="responsive.css" />
  <link rel="stylesheet" href="filter.js" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet" />
  <style>
    * {
  font-family: "Roboto", sans-serif;
  margin: 0;
  color: white;
}

body {
  background-color: black;
}

.navbar navbar-expand-lg bg-body-tertiary {
  background-color: #1a1919;
  padding: 10px 0px 10px 0px;
  display: flex;
  justify-content: center;
  height: 50px;
  margin-bottom: 50px;
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 1;
}

.nav-list {
  margin: 0;
  padding: 0;
  list-style-type: none;
  overflow: hidden;
  color: white;
  display: flex;
  flex-direction: row;
}

.nav-list li h4 {
  display: block;
  text-decoration: none;
  color: rgba(255, 255, 255, 0.888);
  text-align: center;
  padding: 14px 11px;
  border-radius: 10px;
  cursor: pointer;
}

.nav-list li a {
  display: block;
  text-decoration: none;
  padding: 14px 11px;
  border-radius: 10px;
}

.nav-list li h4:hover {
  background-color: #111;
  transition: 0.8s;
}

.dropdown {
  overflow: hidden;
  float: left;
}

.dropdown-content {
  display: none;
  position: absolute;
}

.dropdown-content a {
  display: none;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
  background-color: #333;
  border-radius: 10px;
}

.carros {
  width: 100%;
  flex-wrap: wrap;
  margin-top: 100px;
}

.car-section {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  text-align: center;
  gap: 20px;
}

.car-card {
  max-width: 400px;
  margin-bottom: 30px;
  background-color: rgba(255, 255, 255, 0);
  border-radius: 20px;
  padding: 20px;
}

/* .car-card:hover {
  scale: 1.05;
} */

.car-card img {
  width: 320px;
  height: 350px;
  border-radius: 20px;
}

.car-info {
  margin-top: 10px;
}

.car-shop {
  margin-top: 10px;
  background-color: #f7d354;
  cursor: pointer;
  width: 100%;
  padding: 10px 0px 10px;
  border-radius: 14px;
  border: 100px;
  border-color: #111;
}

.car-shop:hover {
  background-color: rgba(42, 44, 45, 0.781);
}

.car-shop i.fa-shopping-cart {
  color: rgba(42, 44, 45, 0.781);
}

.car-shop:hover i.fa-shopping-cart {
  color: #f7d354;
}

.rodape {
  background-color: #1a1919;
  padding: 30px;
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  height: 325px;
}

.contatos {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.contatos-list {
  margin: 0;
  padding: 0;
  list-style-type: none;
  overflow: hidden;
  color: white;
}

.contatos li {
  float: left;
}

.contatos li {
  float: left;
}

.contatos li a {
  display: block;
  text-decoration: none;
  color: white;
  text-align: center;
  padding: 10px 11px;
}

.contatos li a:hover {
  color: #f7d354;
}

.trendycar {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 20px;
  width: 84%;
}

::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-thumb {
  background-color: #f7d354;
  border-radius: 10px;
}

.gif-container {
  width: 1700px;
  /* Largura desejada para o retângulo */
  height: 400px;
  /* Altura desejada para o retângulo */
  position: relative;
  /* Permite posicionar elementos filhos em relação a este elemento */
  overflow: hidden;
  /* Oculta qualquer conteúdo que transborde do retângulo */
  margin: 0 auto;
  /* Centraliza o retângulo horizontalmente */

  border-radius: 10px;
}

.gif {
  width: 100%;
  /* Garante que o GIF ocupe todo o espaço do retângulo */
  height: 100%;
  /* Garante que o GIF ocupe todo o espaço do retângulo */
  object-fit: cover;
  /* Redimensiona o GIF para preencher o retângulo */
}

.secmain p {
  text-transform: uppercase;
  letter-spacing: .5em;
  display: inline-block;
  border: 4px double rgba(0, 0, 0, .25);
  border-width: 4px 0;
  padding: 1.5em 0em;
  color: black;
  text-align: center;
  position: absolute;
  width: 40em;
  top: 18%;
  left: 50%;
  margin: 0 0 0 -20em;
}

.secmain p .span {
  font: 700 4em "Oswald", sans-serif;
  letter-spacing: 0;
  padding: .25em 0 .325em;
  display: block;
  margin: 0 auto;
  text-shadow: 0 0 80px rgba(255, 255, 255, .5);

  background: url("animated-text-fill.png") repeat-y;
  -webkit-background-clip: text;
  background-clip: text;

  -webkit-text-fill-color: transparent;
  -webkit-animation: aitf 80s linear infinite;
  -webkit-transform: translate3d(0, 0, 0);
  -webkit-backface-visibility: hidden;
}

@-webkit-keyframes aitf {
  0% {
    background-position: 0% 50%;
  }

  100% {
    background-position: 100% 50%;
  }
}

.bmw{
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  text-align: center;
  gap: 20px;
}

.fiat{
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  text-align: center;
  gap: 20px;
}
.ford{
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  text-align: center;
  gap: 20px;
}

.jeep{
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  text-align: center;
  gap: 20px;
}

.toyota{
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  text-align: center;
  gap: 20px;
}

.volks{
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  text-align: center;
  gap: 20px;
}
.categoria1{
  padding:0px 0px 0px 50px;
}

.categoria2{
  padding:0px 0px 0px 50px;
}

@media (max-width: 600px) {
    img{
        max-width: 300px;
        max-height: 400px;
    }
    
    .cta{
        max-width: 400px;
        background-size: cover;
    }
    
    .text-cta {
        padding: 5rem 0 9rem 2rem;
    }
    
    .Meio{
        scale: .6;
        padding: 0px 0px 0px 0px;
        margin-right: 300px;
        line-height: 4rem;
        height: 100px;
    }
    .Meio p{
        display: none;
    }
    
    .Meio button {
        background-color: #c8815f;
        padding: 0.5rem 2rem 0.5rem 2rem;
        border: none;
        border-radius: 10px;
        color: #fff;
        font-size: 1.3rem;
        cursor: pointer;
        transition: 0.3s;
        margin-left: 0px;
    
    }
    
    header {
        display: flex;
        justify-content: space-around;
        flex-direction: column;
        padding-top: 1rem;
        align-items: center;
        text-align: center;
        width: 100%;
        top: 0;
        right: 0;
        z-index: 1000;
        position: fixed;
        background: transparent;
        transition: all .35s ease;
        background-color: white;
        padding: 14px;
    }
    
    .logo {
        font-weight: 500;
        font-size: 0.7rem;
        margin-bottom: 20px;
        
    }
    
    .cabeçalho-link {
        display: flex;
        gap: 2rem;
        margin-bottom: 10px;
        padding: 0 10px 0 0px ;
    }
    
    .background {
        margin-top: 140px;
        background-image: url(img/luck.png);
        background-size: contain;
        background-repeat: no-repeat;
        width: 100%;
        max-width: 100%;
        height: 100vh;
        margin-bottom: -90px;
    }
    
    .categorias{
        margin-left: 80px;
        margin-top: 20px;
    }
    .container-cad-2{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 1rem;
        padding-top: 1rem;
        border-radius: 10px;
        padding: 30px -30px 0 0;
        
    }

    .cards img {
        width: 350px;
        height: 350px;
        transition: 0.35s ease;
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.8) 0px 5px 15px;
    }

    .categorias{
        justify-content: center;
    }
    .seção{
        margin-left: 60px;
        margin-top: 20px;
    }
    
    .seção1{
        margin-left: 40px;
        margin-top: 20px;
    }
    
    .Marcas{
        margin-top: 50px;
    }
    
    .background{
        height:340px;
    }
    
    .cta{
        background: url(img/ffffc.png);
        background-position: center;
        background-size: cover;
        margin-left: 7px;
        height: 40vh;
        width: 100%;
        display: flex;
        align-items: center;
        margin-top: 2rem;
        
        box-shadow: rgba(0, 0, 0, 0.5) 0px 5px 15px;
        border-radius: 20px;
    
    }

    .text-cta h6{
        font-size: 3.rem;
        line-height: 1;
        letter-spacing: .6rem;
        margin-bottom: 1px;
    } 
    
    
    
    .text-cta{
        padding: 12rem 0 14rem 1rem;
        line-height: 4rem;
    }
    
    .estoque {
    
        text-align: center;
    }
    
    .container-roupas {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 2rem;
        align-items: center;
        text-align: center;
        margin-top: 2rem;
        height: 355px;
        box-shadow: #000;
    }
    
    .Marcas{
        margin-top: -40px;
        cursor: pointer;
        scale: .9;
        padding: 2700px 36px 36px 2px;
        margin-right: 0px;
        line-height: 3rem;
    }
    
    .contato {
        display: flex;
        gap: 5rem;
        justify-content: space-around;
        background-color:#000000 ;
        padding: 3rem;
        margin-top: -8rem;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, auto));
    }
    
}
    
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Trendy-ar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active"  id="Home" onclick="rolarParaCima()" href="#top">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"href="#sobre-nos" onclick="rolarParaBaixo()">Sobre Nós</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Marcas
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link  href="#contato" onclick="rolarParaBaixo()">Contato</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
  <div class="gif-container">
    <img src="https://i.pinimg.com/originals/94/0d/49/940d4937e086bbe9760744af379f888e.gif" alt="GIF" class="gif" />

    <section class="secmain">
      <p>
        A melhor loja de vendas de carros
        <span class=span>
          Trendy Car
        </span>
        &mdash; Aqui tem os melhores preços &mdash;
      </p>

    </section>
  </div>

  <div class="carros">
    <div class="BMW">
      <h2 class="categoria1">BMW</h2>
      <div class="car-section" id="bmw" data-href="#bmw">
        <div class="car-card">
          <img src="img/BMW/2019 BMW X5 SUV starts at $60,700.png" />
          <p class="car-info">
            BMW X5 SUV STARTS AT ANO 2019
            <br />R$ 60,700
          </p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/BMW/BMW G82 M4 ___.jpeg" />
          <p class="car-info">BMW G82 M4 <br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/BMW/Bmw I8.jpeg" />
          <p class="car-info">BMW I8 <br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/BMW/BMW X6 M Competition body kit LARTE Design.jpeg" />
          <p class="car-info">
            BMW X6 SUV STARTS AT ANO 2019
            <br />R$ 60,700
          </p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/BMW/🖼 BMW X6M 🦍.jpeg" />
          <p class="car-info">
            BMW X6M SUV STARTS AT ANO 2019
            <br />R$ 60,700
          </p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>
      </div>
      <div class="car-section" id="fiat" data-href="#fiat">
      </div>
      <!-- Carro da Fiat -->
      <div>
        <h2 class="categoria2">FIAT</h2>
      </div>
      <div class="fiat">
       
        <div class="car-card">
          <img src="img/Fiat/Fiat 500 volta ao Brasil em versão única por R$ 61_396.jpeg" />
          <p class="car-info">FIAT 500<br />R$ 61,396</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/Fiat/Fiat Argo (2020) Precio, Motor, Medidas y Equipamiento.png" />
          <p class="car-info">Fiat Argo (2020)<br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/Fiat/Fiat Pulse 2023_ Preço, Ficha Técnica, Consumo Fotos - Carros 2023.png" />
          <p class="car-info">Fiat Pulse 2023 <br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/Fiat/Fiat Strada-Neuauflage (2020)_ Pickup, auch mit Doppelkabine.jpeg" />
          <p class="car-info">Fiat Strada-Neuauflage (2020)<br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img
            src="img/Fiat/Fiat Uno Way 1_3 2021 a versão top de linha sem muitas novidades - Carros Antigos -.jpeg" />
          <p class="car-info">Fiat Uno Way 1.3 2021<br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>
      </div>

    </div>
    <div>
      <h2 class="categoria2">FORD</h2>
    </div>
    <div class="ford">
      <div class="car-section" id="ford">
        <div class="car-card">
          <img src="img/Ford/El nuevo Ford Ka FreeStyle 2019 en Argentina - Blog de Coches.jpeg" />
          <p class="car-info">Ford Ka FreeStyle 2019 <br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/Ford/Ford cria Mustang F-35 Lightning II - carros - Jornal do Carro.jpeg" />
          <p class="car-info">
            Mustang F-35 Lightning II
            <br />R$ 60,700
          </p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/Ford/Ford EcoSport® Retired _ Now What_ _ Ford_com.jpeg" />
          <p class="car-info">Ford EcoSport <br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/Ford/Ford Fiesta Zetec S Red 2014.jpeg" />
          <p class="car-info">Ford Fiesta Zetec S Red (2014)<br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/Ford/Ford raptor _ Ford raptor, Ford ranger raptor, Ford ranger.jpeg" />
          <p class="car-info">Ford raptor <br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>
      </div>
    </div>
   
    <div>
      <h2 class="categoria2">TOYOTA</h2>
    </div>
    <div class="toyota">
      <div class="car-section" id="toyota">
        <div class="car-card">
          <img src="img/Toyota/Here are the prices, variants, colors of the 2022 Toyota Veloz in PH.jpeg" />
          <p class="car-info">Toyota Veloz <br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/Toyota/Toyota Fortuner 2023 interior mid-size sports utility vehicle (SUV).jpeg" />
          <p class="car-info">Toyota Fortuner 2023 <br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/Toyota/Toyota Fortuner Legender interior & exterior detailed in 18 full-HD images.jpeg" />
          <p class="car-info">
            Toyota Fortuner 2023-Preta ANO 2019 <br />R$ 60,700
          </p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/Toyota/Toyota SW4 (2019) Precio, Medidas y Equipamiento.jpeg" />
          <p class="car-info">Toyota SW4 (2019) Precio<br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/Toyota/Toyota SW4 GR-S.jpeg" />
          <p class="car-info">Toyota SW4 GR-S<br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>
      </div>
    </div>
    <div>
      <h2 class="categoria2">VOLKS</h2>
    </div>
    <div class="volks">
      <div class="car-section" id="volks">
        <div class="car-card">
          <img src="img/Volks/2019 Volkswagen Arteon SEL R-Line Review.jpeg" />
          <p class="car-info">2019 Volkswagen Arteon <br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>
        <p></p>
        <div class="car-card">
          <img src="img/Volks/Volkswagen Atlas.jpeg" />
          <p class="car-info">Volkswagen Atlas<br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/Volks/Volkswagen Gol_.jpeg" />
          <p class="car-info">Volkswagen Gol<br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/Volks/Volkswagen T-cross.jpeg" />
          <p class="car-info">Volkswagen T-cross<br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>

        <div class="car-card">
          <img src="img/Volks/VW Gol, Saveiro e Voyage 2021.jpeg" />
          <p class="car-info">Gol Saveiro 2021<br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>
      </div>
    </div>
    <div>
      <h2 class="categoria2">JEEP</h2>
    </div>
    <div class="jeep">
      <div  id="jeep">
        <div class="car-card">
          <img src="img/Jeep/2022-Jeep-20th.jpg" />
          <p class="car-info">2022-Jeep-<br />R$ 60,700</p>
          <div class="car-shop">
            <p><i class="fas fa-shopping-cart"></i></p>
          </div>
        </div>
        <div>
          <div class="car-card">
            <img src="img/Jeep/2022-Jeep-Grand-Cherokee-.jpg" />
            <p class="car-info">Jeep-Grand-Cherokee<br />R$ 60,700</p>
            <div class="car-shop">
              <p><i class="fas fa-shopping-cart"></i></p>
            </div>
          </div>

          <div class="car-card">
            <img src="img/Jeep/2023 Jeep® Grand Cherokee - Most Awarded SUV Ever _ Jeep®.jpeg" />
            <p class="car-info">
              BMW X5 SUV STARTS AT ANO 2019
              <br />R$ 60,700
            </p>
            <div class="car-shop">
              <p><i class="fas fa-shopping-cart"></i></p>
            </div>
          </div>

          <div class="car-card">
            <img src="img/Jeep/Jeep Compass 2020.jpeg" />
            <p class="car-info">Jeep Compass 2020<br />R$ 60,700</p>
            <div class="car-shop">
              <p><i class="fas fa-shopping-cart"></i></p>
            </div>
          </div>

          <div class="car-card">
            <img src="img/Jeep/jeep renegade.jpeg" />
            <p class="car-info">Jeep renegade<br />R$ 60,700</p>
            <div class="car-shop">
              <p><i class="fas fa-shopping-cart"></i></p>
            </div>
          </div>
        </div>
    </div>
  </div>

  <div class="rodape">

    <div class="contatos" id="contato">
      <ul class="contatos-list">
        <li>
          <a href="https://www.instagram.com/pedro_pereirac/" target="_blank"><i class="fab fa-instagram"></i>
            Instagram</a>
        </li>
        <li>
          <a href="https://wa.me/558586183849" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a>
        </li>
      </ul>
    </div>

    <div class="trendycar" id="sobre-nos">
      <h2>Trendy Car: Inovação Automotiva de Fortaleza para o Mundo</h2>
      <p>
        Bem-vindo à TrendyCar, a líder em inovação automotiva sediada em
        Fortaleza, Ceará! Fundada com paixão e compromisso em 2005, a TrendyCar
        se estabeleceu como uma referência na indústria de veículos, trazendo um
        toque de elegância e modernidade para a estrada. Com uma visão voltada
        para o futuro, temos o prazer de ser a sua escolha número um quando se
        trata de carros de alta qualidade e serviços excepcionais. <br />
        Nossa História Nossa jornada começou nas pitorescas ruas de Fortaleza,
        uma cidade que celebra a diversidade cultural e o espírito empreendedor.
        A TrendyCar nasceu do desejo de transformar o setor automobilístico,
        proporcionando aos nossos clientes uma experiência de condução
        incomparável. Começamos como uma pequena oficina e evoluímos para uma
        empresa de renome internacional, com uma ampla variedade de veículos de
        alta classe que atendem a todas as necessidades. <br />
        Nossa Gama de Carros Na TrendyCar, acreditamos que a escolha de um carro
        deve ser uma experiência emocionante e personalizada. Oferecemos uma
        ampla gama de veículos, desde carros esportivos de última geração até
        veículos familiares confiáveis. Cada um de nossos carros é
        cuidadosamente selecionado e mantido para atender aos mais altos padrões
        de qualidade e desempenho. Nossa frota inclui modelos das marcas mais
        conceituadas do mundo automobilístico, garantindo que você encontre o
        veículo perfeito para suas necessidades.
      </p>
    </div>
  </div>

  <div class="scroll-to-top">
    <a href="#top"><i class="fas fa-arrow-up"></i></a>
  </div>
  <script src="scripts.js"></script>
</body>

</html>