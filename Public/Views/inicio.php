<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- component -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../public/css/landin.css">
    <link rel="stylesheet" href="../public/css/whats.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/whats2.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!--Titulo de la empresa-->
    <title>Saudade</title>

</head>

<body>
    <?php
      session_start();
    ?>

    <nav id="header" class="barra">
        <div class="w-full flex items-center justify-between px-6 py-4 backdrop-blur-lg">
            <!-- Icono de menú para dispositivos móviles -->
            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle">

            <!-- Menú de navegación -->
            <div id="menu" class="hidden fixed top-0 left-0 h-full w-3/4 bg-purple-600 shadow-lg z-50 md:relative md:flex md:bg-transparent md:shadow-none md:w-auto md:h-auto md:order-1">
                <nav>
                    <ul class="flex flex-col md:flex-row md:items-center text-base text-white md:text-black pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="./">Inicio</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="QuieneSomos/quienessomos">Quiénes Somos</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="Catalogo/catalogo">Catalogo</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Contenido adicional del menú -->
            <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
                <div class="auth flex items-center w-full md:w-full">
                    <button><a style='font-size:24px;color:black' class='fas'>&#xf07a;</a></button>

                    <?php if (isset($_SESSION['username'])): ?>
                        <span class="inline-block no-underline font-medium text-black text-lg px-4">Hola, <?php echo $_SESSION['username']; ?>!</span>
                        <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="Login/LogoutAction">Cerrar sesión</a>
                    <?php else: ?>
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF] px-4" href="Login/inicio_sesion">Iniciar sesión</a>
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF]" href="Login/registro">Registrarse</a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </nav>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('menu');

        menuToggle.addEventListener('change', function() {
            if (this.checked) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    </script>

    <video id="video" class="" autoplay muted loop>
        <source src="../public/img/video/street.mp4" type="video/mp4">
        Tu navegador no soporta la etiqueta de video.
    </video>

    <!--Alerta ed inicio de session-->

    <div id="popup" class="fixed z-50 bg-slate-100 opacity-95 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2  shadow-lg font-comic-sans rounded-md p-24 text-center animate-popup drop-shadow-2xl "
        style="display: none; width: 500px; height: 550px;">
        <img id="popup-image" src="../public/img/LOGO_SAUDADE.png" alt="Descripción de la imagen">
        <h2 class="text-xl font-bold py-2">¡Te Damos la Bienvenida a Saudade!</h2>
        <p class="py-2 text-lg font-normal">Obtén un descuento del 10% en tu primera compra iniciando sesión.</p>
        <div class="flex justify-center align-center space-x-4 py-4">
            <a href="Login/inicio_sesion" class=" bg-black text-white hover:text-[#6F00FF] hover:bg-gray-300 px-4 py-2 rounded-lg text-center px-4 font-medium text-lg">Iniciar sesión</a>
            <button onclick="closePopup()" class="bg-gray-300 hover:bg-gray-400 text-black px-4 py-2 rounded-lg  font-medium text-lg">Cerrar</button>
        </div>
    </div>

    <!--Spotify-->

    <iframe class="luna" style="border-radius:12px"
        src="https://open.spotify.com/embed/track/7bywjHOc0wSjGGbj04XbVi?utm_source=generator&theme=0" width="100%"
        height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
    </iframe>

    <div class="bg-white py-16">
        <div class="container mx-auto">
            <!-- Sección Dynamo Ropa Urbana -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold mb-4">SAUDADE</h1>
                <p class="text-gray-600 mb-8">La vida es muy corta para seguir usando prendas aburridas. Viste tu actitud con saudade ropa urbana: Camisetas, jeans, gorras, accesorios y mucho más.</p>
                <div class="flex justify-center space-x-8">
                    <div class="text-center">
                        <p class="text-gray-800 font-medium">Envíos a toda Colombia</p>
                    </div>
                    <div class="text-center">
                    </div>
                    <div class="text-center">
                        <p class="text-gray-800 font-medium">Devoluciones hasta 30 días</p>
                    </div>
                </div>
            </div>

            <!-- Sección NEW MERCH -->
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold">NEW MERCH</h2>
                <div class="border-b-2 mb-8"></div>
            </div>

            <!-- Carousel Container -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 shadow-lg ">
                <div class="relative">
                    <img src="../public/img/camiseta.jpg" alt="Product 1" class="w-full">
                    <p class="text-center mt-4">Jeans Baggy Para Hombre Azul</p>
                    <p class="text-center font-bold">$160.000,00</p>
                </div>
                <div class="relative">
                    <img src="../public/img/basica.jpg" alt="Product 2" class="w-full">
                    <p class="text-center mt-4">Camisa Para Hombre Oversize Crudo Calavera</p>
                    <p class="text-center font-bold">$125.000,00</p>
                </div>
                <div class="relative">
                    <img src="../public/img/pantalon.jpg" alt="Product 3" class="w-full">
                    <p class="text-center mt-4">Jeans Baggy Para Hombre Negro</p>
                    <p class="text-center font-bold">$130.000,00</p>
                </div>
                <div class="relative">
                    <img src="../public/img/pant.jpg" alt="Product 4" class="w-full">
                    <p class="text-center mt-4">Jogger Para Hombre Cargo Negro - Bota Ajustable</p>
                    <p class="text-center font-bold">$155.000,00</p>
                </div>
            </div>
        </div>
    </div>
    <img id="estrella1" src="../static/img/estrella.png" alt="">
    <img id="estrella1" src="../static/img/estrella.png" alt="">
    <img id="estrella2" src="../static/img/estrella.png" alt="">
    <img id="estrella2" src="../static/img/estrella.png" alt="">
    <img id="estrella3" src="../static/img/estrella.png" alt="">
    <img id="estrella3" src="../static/img/estrella.png" alt="">
    <br><br><br><br>
    </div>
    <!-- Cierre del div con clase max-w-screen-lg -->
    <!-- Cierre del div con clase relative flex min-h-screen -->


    <div class="carousel-container ">
        <div class="carousel">
            <div class="video-container small">
                <video src="../public/img/video/video1.mp4" muted></video>
            </div>
            <div class="video-container small">
                <video src="../public/img/video/video5.mp4" muted></video>
            </div>
            <div class="video-container main">
                <video src="../public/img/video/video2.mp4" autoplay muted loop></video>
            </div>
            <div class="video-container small">
                <video src="../public/img/video/video3.mp4" muted></video>
            </div>
            <div class="video-container small">
                <video src="../public/img/video/video4.mp4" muted></video>
            </div>
        </div>
        <div class="navigation">
            <button class="arrow left-arrow"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 17l-5-5 5-5v10z" fill="black" />
                </svg></button>
            <button class="arrow right-arrow"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 17l5-5-5-5v10z" fill="black" />
                </svg></button>
        </div>
    </div>

    <style>
        .carousel-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;

        }

        .carousel {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .video-container {
            transition: transform 0.5s ease, width 0.5s ease, height 0.5s ease;
            overflow: hidden;
            border-radius: 10px;
        }

        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .small {
            width: 250px;
            height: 350px;
            margin: 0 10px;
        }

        .main {
            width: 350px;
            height: 500px;
            margin: 0 20px;
        }

        .navigation {
            margin-top: 20px;
        }

        .arrow {

            border: none;
            font-size: 24px;
            cursor: pointer;
            color: white;
            padding: 10px;
            margin: 0 10px;
            border-radius: 50%;
            outline: none;
        }
    </style>

    <script>
        let currentIndex = 2;

        const videos = document.querySelectorAll('.video-container');
        const totalVideos = videos.length;

        document.querySelector('.left-arrow').addEventListener('click', () => {
            rotateCarousel(-1);
        });

        document.querySelector('.right-arrow').addEventListener('click', () => {
            rotateCarousel(1);
        });

        function rotateCarousel(direction) {
            currentIndex = (currentIndex + direction + totalVideos) % totalVideos;

            videos.forEach((video, index) => {
                const videoElement = video.querySelector('video');
                video.classList.remove('main', 'small');
                video.classList.add(index === currentIndex ? 'main' : 'small');

                if (index === currentIndex) {
                    videoElement.play();
                } else {
                    videoElement.pause();
                    videoElement.currentTime = 0; // Reinicia el video para que comience desde el inicio cuando vuelva a ser el principal
                }
            });
        }
    </script>




    <br><br><br>















    <div class="nav-bottom">
        <img id="wasa" src="{{ url_for('static', filename='img/wasa.png') }}" width="50" alt="">
        <div class="popup-whatsapp fadeIn">

            <div class="content-whatsapp -top">
                <button type="button" class="closePopup">
                    <i class="material-icons icon-font-color">X</i>
                </button>

                <p> <img src="../public/img/LOGO_SAUDADE.png" width="50">
                    Hola, ¿En qué podemos ayudarle?
                </p>

            </div>
            <div class="content-whatsapp -bottom">
                <input class="whats-input" id="whats-in" type="text" Placeholder="Enviar mensaje..." />

                <button class="send-msPopup" id="send-btn" type="button">
                    <i class="material-icons icon-font-color--black">></i>
                </button>

            </div>
        </div>






        <button type="button" id="whats-openPopup" class="whatsapp-button">
            <div class="float">
                <i class="fa fa-whatsapp my-float"></i>
            </div>
        </button>
        <div class="circle-anime">

        </div>
    </div>

    <img class="nort" src="../public/img/nort.jpg" alt="">
    <style>
        .nort {
            width: 100%;
            height: auto;
            max-height: 64vh;
            object-fit: cover;
            opacity: 0.8;
            /* Cambia el valor para ajustar la transparencia */

        }
    </style>







    <div class="flex items-center justify-center my-8">
        <hr class="flex-grow border-t border-gray-300">
        <span class="mx-4 text-gray-700 text-xl font-semibold">lo mejor lo encuentras en saudade</span>
        <hr class="flex-grow border-t border-gray-300">
    </div>




    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <!-- Item 1 -->
            <a href="https://example.com/item1" class="relative zoom block overflow-hidden">
                <img src="../public/img/camiseta.jpg" alt="Camisetas" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">CAMISETAS</span>
                </div>
            </a>
            <!-- Item 2 -->
            <a href="../Static/img/basica.jpg" class="relative zoom block overflow-hidden">
                <img src="../public/img/basica.jpg" alt="Básicas" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">BÁSICAS</span>
                </div>
            </a>
            <!-- Item 3 -->
            <a href="https://example.com/item3" class="relative zoom block overflow-hidden">
                <img src="../public/img/hoddie.jpg" alt="Hoodies" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">HOODIES</span>
                </div>
            </a>
            <!-- Item 4 -->
            <a href="https://example.com/item4" class="relative zoom block overflow-hidden">
                <img src="../public/img/pant.jpg" alt="Item 4" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">BERMUDAS</span>
                </div>
            </a>
            <!-- Item 5 -->
            <a href="https://example.com/item5" class="relative zoom block overflow-hidden">
                <img src="../public/img/sombrero.jpg" alt="Item 5" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">GORROS</span>
                </div>
            </a>
            <!-- Item 6 -->
            <a href="https://example.com/item6" class="relative zoom block overflow-hidden">
                <img src="../public/img/pantalon.jpg" alt="Item 6" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">PANTALON</span>
                </div>
            </a>
        </div>
    </div>
    <br><br>

    <style>
        .zoom:hover img {
            transform: scale(1.1);
            transition: transform 0.5s ease;
        }
    </style>



</body>

<footer>

  <svg viewBox="0 0 120 28">
    <defs> 
      <mask id="mascara">
        <circle cx="7" cy="12" r="40" fill="#fff" />
      </mask>
      
      <filter id="efectoGoo">
        <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur" />
        <feColorMatrix in="blur" mode="matrix" values="
             1 0 0 0 0  
             0 1 0 0 0  
             0 0 1 0 0  
             0 0 0 13 -9" result="goo" />
        <feBlend in="SourceGraphic" in2="goo" />
      </filter>
      
      <path id="ola" d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
    </defs> 

    <use id="ola3" class="ola" xlink:href="#ola" x="0" y="-2"></use> 
    <use id="ola2" class="ola" xlink:href="#ola" x="0" y="0"></use>
  
    <g class="balonSuperior">
      <circle class="balon" cx="110" cy="8" r="4" stroke="none" stroke-width="0" fill="transparent" />
    </g>
    
    <g class="efectoGoo">
      <circle class="gota gota1" cx="20" cy="2" r="1.8" />
      <circle class="gota gota2" cx="25" cy="2.5" r="1.5" />
      <circle class="gota gota3" cx="16" cy="2.8" r="1.2" />
      <use id="ola1" class="ola" xlink:href="#ola" x="0" y="1" />
    </g>
  </svg>
  
  <div class="rain"></div>
  <div class="lightning"></div>

  <div class="footer-content">
    <div class="footer-section left">
      <h3>SHOP</h3>
      <ul>
        <li>SHOP Summer '24</li>
        <li>SHOP OUTERWEAR</li>
        <li>SHOP SHIRTS</li>
        <li>SHOP PANTS, SHORTS, OVERALLS</li>
        <li>SHOP WOMENS</li>
        <li>SHOP MYSTERY BOXES</li>
        <li>SHOP HEADWEAR</li>
        <li>PUMA x SAUDADE</li>
        <li>SHOP FOOTWEAR</li>
        <li>SHOP SOCKS</li>
        <li>SHOP ALL ACCESSORIES</li>
        <li>SHOP 420</li>
        <li>BUY WITH PRIME</li>
      </ul>
    </div>
    <div class="footer-section center">
      <h3>SUPPORT</h3>
      <ul>
        <li>CONTACTO</li>
        <li>LINEA whastsapp</li>
        <li>CORREO</li>
        <li>ASESOR</li>
        
      </ul>
    </div>
    <div class="footer-section right">
      <h3>TIENDAS OFICIALES</h3>
      <ul>
        <li>SAUDADE</li>
        <li>INSTAGRAM</li>
        <li>FACEBOOK</li>
        <li>whastsapp</li>
      </ul>
    </div>
    <div class="footer-section right">
      <h3>FOLLOW US</h3>
      <ul>
        <li>@SAUDADE</li>
        <li>@SAUDADE.CO</li>
        <li>@SAUDADE.IG</li>
        <li>@PARCHESE.</li>
        <li>@SAUDADE Snap</li>
        <li>@SAUDADE TikTok</li>
        <li>@SAUDADE Twitter <br><br><br></li>
      </ul>
    </div>
  </div>
</footer>

<style>
@import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");

.newsletter-section {
    background-color: #130048;
}

main {
  flex: 1; /* El contenido principal ocupa el espacio restante */
  background-color: #130048;
}

footer {
  width: 100%; /* El footer ocupa todo el ancho de la ventana */
  position: relative; /* Posiciona el footer al final del contenido */
  background-color: #fff;
  color: #fff; /* Texto blanco */
  overflow: hidden; /* Asegura que los elementos no sobresalgan del footer */
}

.footer-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  background-color: #130048;
}

.footer-section {
  flex: 1;
  text-align: center;
}

.footer-section.left {
  text-align: left;
}

.footer-section.right {
  text-align: right;
}

svg {
  width: 100%; /* El SVG ocupa todo el ancho del footer */
}

.balonSuperior {
  animation: movimientoBalon 1.5s ease-in-out infinite alternate; /* Animación del balón con movimiento de ida y vuelta */
  animation-delay: 0.3s;
  cursor:pointer; /* Cambia el cursor al pasar sobre el balón */
}

.ola {
  animation: movimientoOla 10s linear infinite; /* Extensión de la animación de la ola a 10s */
  fill: #130048; /* Color de la ola */
}

.gota {
  fill: transparent;
  animation: movimientoGota 7s ease infinite normal; /* Extensión de la animación de las gotas a 7s */
  stroke: #130048; /* Color del borde de las gotas */
  stroke-width:0.5;
  opacity:.6; 
  transform: translateY(80%);
}

.gota1 {
  transform-origin: 20px 3px; /* Punto de origen de la transformación para la primera gota */
}

.gota2 {
  animation-delay: 3s; /* Retraso en la animación para la segunda gota */
  animation-duration:5s; /* Duración de la animación para la segunda gota */
  transform-origin: 25px 3px;
}

.gota3 {
  animation-delay: -2s; /* Retraso negativo para sincronizar con otras gotas */
  animation-duration:5.4s; /* Duración de la animación para la tercera gota */
  transform-origin: 16px 3px;
}

.efectoGoo {
  	filter: url(#efectoGoo); /* Aplica el filtro Goo al grupo de gotas */
}

#ola2 {
  animation-duration:10s; /* Extensión de la animación de la segunda ola a 10s */
  animation-direction: reverse; /* Movimiento de la ola en dirección inversa */
  opacity: .6; /* Transparencia de la segunda ola */
}

#ola3 {
  animation-duration: 15s; /* Extensión de la animación de la tercera ola a 15s */
  opacity:.3; /* Transparencia de la tercera ola */
}

.rain {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 1;
}

.rain .drop {
  position: absolute;
  bottom: 100%;
  width: 2px;
  height: 20px;
  background: rgba(255, 255, 255, 0.2);
  animation: fall 1s linear infinite;
}

.lightning {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.9);
  opacity: 0;
  z-index: 2; /* Coloca los rayos por encima de la lluvia */
  pointer-events: none;
}

@keyframes fall {
  to {
    transform: translateY(100vh);
    opacity: 0;
  }
}

@keyframes lightning {
  0%, 90% {
    opacity: 0;
  }
  95% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@keyframes movimientoGota {
  0% {
    transform: translateY(80%); 
    opacity:.6; 
  }
  80% {
    transform: translateY(80%); 
    opacity:.6; 
  }
  90% { 
    transform: translateY(10%) ; 
    opacity:.6; 
  }
  100% { 
    transform: translateY(0%) scale(1.5);  
    stroke-width:0.2;
    opacity:0; 
  }
}

@keyframes movimientoOla {
  to {transform: translateX(-100%);} /* Movimiento de la ola hacia la izquierda */
}

@keyframes movimientoBalon {
  to {transform: translateY(20%);} /* Movimiento del balón hacia abajo */
}
</style>

<script>
    function createRain() {
        const rainContainer = document.querySelector('.rain');
        for (let i = 0; i < 100; i++) {
            const drop = document.createElement('div');
            drop.classList.add('drop');
            drop.style.left = Math.random() * 100 + 'vw';
            drop.style.animationDuration = 0.5 + Math.random() * 0.5 + 's';
            drop.style.animationDelay = Math.random() * 2 + 's';
            rainContainer.appendChild(drop);
        }
    }
    createRain();
</script>
<script src="../Public/js/alerta.js"></script>
<script src="../Public/js/carrucel.js"></script>
<script src="../Public/js/whastsapp.js"></script>

</html>