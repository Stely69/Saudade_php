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
            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle">

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-black pt-4 md:pt-0">
                        <a class="inline-block no-underline hover:text-purple font-medium text-lg py-2 px-4 lg:-ml-2" href="#"></a>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../Views/inicio.php">Inicio</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../Views/quienessomos.php">Quiénes Somos</a></li>
                        <li><a class="inline-block no-underline hover:text-[#9333ea] font-medium text-lg py-2 px-4 lg:-ml-2" href="../Views/catalogo.php">Catalogo</a></li>
                    </ul>
                </nav>
            </div>

            <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
                <div class="auth flex items-center w-full md:w-full">
                    <button class=""><a style='font-size:24px;color:black' class='fas '>&#xf07a;</a></button>

                    <?php if (isset($_SESSION['username'])): ?>
                        <span class="inline-block no-underline font-medium text-black text-lg px-4">Hola, <?php echo $_SESSION['username']; ?>!</span>
                        <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="../public/logout_action.php">Cerrar sesión</a>
                    <?php else: ?>
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF] px-4" href="../Views/inicio_sesion.php">Iniciar sesión</a>
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF]" href="../Views/registro.php">Registrarse</a>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </nav>

    <video id="video" class="" autoplay muted loop>
        <source src="../Static/video/street.mp4" type="video/mp4">
        Tu navegador no soporta la etiqueta de video.
    </video>

    <!--Alerta ed inicio de session-->

    <div id="popup" class="fixed z-50 bg-slate-100 opacity-95 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2  shadow-lg font-comic-sans rounded-md p-24 text-center animate-popup drop-shadow-2xl "
        style="display: none; width: 500px; height: 550px;">
        <img id="popup-image" src="../static/img/LOGO_SAUDADE.png" alt="Descripción de la imagen">
        <h2 class="text-xl font-bold py-2">¡Te Damos la Bienvenida a Saudade!</h2>
        <p class="py-2 text-lg font-normal">Obtén un descuento del 10% en tu primera compra iniciando sesión.</p>
       <div class="flex justify-center align-center space-x-4 py-4">
            <a href="../Views/inicio_sesion.php" class=" bg-black text-white hover:text-[#6F00FF] hover:bg-gray-300 px-4 py-2 rounded-lg text-center px-4 font-medium text-lg">Iniciar sesión</a>
            <button onclick="closePopup()" class="bg-gray-300 hover:bg-gray-400 text-black px-4 py-2 rounded-lg  font-medium text-lg">Cerrar</button>
       </div>
    </div>

    <!--Spotify-->

    <iframe class="luna" style="border-radius:12px"
        src="https://open.spotify.com/embed/track/7bywjHOc0wSjGGbj04XbVi?utm_source=generator&theme=0" width="100%"
        height="352" frameBorder="0" allowfullscreen=""allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
    </iframe>
    
    <!--Acerca de Saudade-->

    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-slate-100   sm:py-0">
        <div class=" ">
            <div class="max-w-screen-lg my-40 mx-auto py-4">
                <h2
                    class="flex font-bold text-center text-3xl text-black font-display border-b-4 border-[#130048] w-28">
                    Inicio
                </h2>
                <div class="border-b-4 border-[#130048] drop-shadow-sm blur-sm w-28 ">
                </div>
                <p class="text-center mt-4 font-medium text-black"></p>

                <div id="contenedor1"
                    class="bg-[#050016] w-1/3 shadow rounded-lg overflow-hidden flex flex-col  items-center justify-center p-4">
                    <img id="modelo" src="../static/img/hoddie.jpg" class="rounded-lg object-cover h-50 w-42" alt="">
                    <div class="p-6 flex flex-col flex-1">
                        <span class="block text-slate-400 font-semibold text-sm"></span>
                        <h2 class="text-xs text-slate-400 mb-3"></h2>
                        <div class="flex gap-4 items-center mt-auto pt-4 border-t border-slate-300">

                        </div>
                    </div>
                </div>

                <img id="estrella1" src="../static/img/estrella.png" alt="">
                <img id="estrella1" src="../static/img/estrella.png" alt="">
                <img id="estrella2" src="../static/img/estrella.png" alt="">
                <img id="estrella2" src="../static/img/estrella.png" alt="">
                <img id="estrella3" src="../static/img/estrella.png" alt="">
                <img id="estrella3" src="../static/img/estrella.png" alt="">

                <div class="">
                    <div class="absolute z-20  top-1/2  right-20 text-black -translate-y-1/2">
                        <img src="../static/img/camiseta1.png" class="absolute z-10 " alt="">
                    </div>
                    <div class="relative  p-10 h-full w-1/2">
                        <h2 class="text-black text-3xl font-medium">Saudade</h2>
                        <p class="text-mg text-black mt-4">
                            Desde elegantes conjuntos para el trabajo hasta outfits relajados para el fin de semana,
                            nuestra colección te invita a explorar y experimentar con tu estilo propio. Cada prenda ha
                            sido seleccionada con esmero para garantizar la máxima calidad, comodidad y estilo.
                        </p>
                        <div class="flex gap-4 items-center pt-4 border-t border-[#130048] text-slate-300 mt-6">
                            <span class="flex gap-1 items-center text-sm text-black">
                                <a href="">Instagram</a>
                            </span>
                            <span class="flex gap-1 items-center text-sm text-black">
                                <a href="">Facebook</a>
                            </span>
                        </div>
                    </div>
                </div class="">
                    <img id="angel" src="../static/img/ANGEL SIN FONDO.png" alt="">
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <h2
                        class="flex font-bold text-center text-2xl text-black font-display  border-b-4 border-[#130048] w-48">
                        Camisetas
                    </h2>
                    <div class="border-b-4 border-[#130048] drop-shadow-sm  blur-sm w-48 ">
                </div>

                <!--Catalogo de las camisas -->

                <div class="flex gap-6 mt-10 ">
                    <div id="grande4" class="bg-[#050016] w-1/3 shadow rounded-lg overflow-hidden flex flex-col  items-center justify-center p-4">
                        <img id="camiseta2" src="../Static/img/hoddie.jpg" class="rounded-lg object-cover h-50 w-42"
                            alt="">
                        <div class="p-6 flex flex-col flex-1">
                            <h3 class="mt-3 mb-2 font-bold text-lg text-white ">
                                Camiseta Personalizada
                            </h3>

                            <h2 class="text-xs text-slate-400 mb-3"></h2>
                            <div
                                class="flex gap-4 items-center justify-self-center mt-auto pt-4 border-t border-slate-300 ">
                                <a href="../Views/compra.php"> <button class="text-white">Ver mas</button></a>
                            </div>
                        </div>
                    </div>

                    <div id="grande2"
                        class="bg-[#050016] w-1/3 shadow rounded-lg overflow-hidden flex flex-col  items-center justify-center p-4">
                        <img id="camiseta1" src="../Static/img/basica.jpg" class="rounded-lg object-cover h-50 w-42"
                            alt="">
                        <div class="p-6 flex flex-col flex-1">
                            <span class="block text-slate-400 font-semibold text-sm"></span>
                            <h3 class="mt-3 mb-2 font-bold text-lg text-white">
                                Camiseta Personalizada
                            </h3>
                            <h2 class="text-xs text-slate-400 mb-3"></h2>
                            <div class="flex gap-4 items-center mt-auto pt-4 border-t border-slate-300">
                                <a href="../Views/compra.php"> <button class="text-white">Ver mas</button></a>
                            </div>
                        </div>
                    </div>

                    <div id="grande1"
                        class="bg-[#050016] w-1/3 shadow rounded-lg overflow-hidden flex flex-col items-center justify-center p-4">
                        <img id="camiseta3" src="../Static/img/sombrero.jpg" class="rounded-lg object-cover h-50 w-42"
                            alt="">
                        <div class="p-6 flex flex-col flex-1">
                            <span class="block text-white font-semibold text-sm"></span>
                            <h3 class="mt-3 mb-2 font-bold text-lg text-white">
                                Camiseta Personalizada
                            </h3>
                            <h2 class="text-xs text-slate-400 mb-3"></h2>
                            <div class="flex gap-4 items-center mt-auto pt-4 border-t border-slate-300">
                                <a href="../Views/compra.php"> <button class="text-white">Ver mas</button></a>
                            </div>
                        </div>
                    </div>


                    <div id="grande1"
                        class="bg-[#050016] w-1/3 shadow rounded-lg overflow-hidden flex flex-col items-center justify-center p-4">
                        <img id="camiseta3" src="../Static/img/camiseta.jpg" class="rounded-lg object-cover h-50 w-42"
                            alt="">
                        <div class="p-6 flex flex-col flex-1">
                            <span class="block text-white font-semibold text-sm"></span>
                            <h3 class="mt-3 mb-2 font-bold text-lg text-white">
                                Camiseta Personalizada
                            </h3>
                            <h2 class="text-xs text-slate-400 mb-3"></h2>
                            <div class="flex gap-4 items-center mt-auto pt-4 border-t border-slate-300">
                                <a href="../Views/compra.php"> <button class="text-white">Ver mas</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <img id="angel2" src="../static/img/ANGEL SIN FONDO.png" alt="">

            <div class="nav-bottom">
                <img id="wasa" src="{{ url_for('static', filename='img/wasa.png') }}" width="50" alt="">
                <div class="popup-whatsapp fadeIn">

                    <div class="content-whatsapp -top">
                        <button type="button" class="closePopup">
                            <i class="material-icons icon-font-color">X</i>
                        </button>

                        <p> <img src="../static/img/LOGO_SAUDADE.png" width="50"> 
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

        <img class="nort" src="../Static/img/nort.jpg" alt="">
        <style>
        .nort {
            width: 100%;
            height: auto;
            max-height: 64vh;
            object-fit: cover;
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
                <img src="../Static/img/camiseta.jpg" alt="Camisetas" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">CAMISETAS</span>
                </div>
            </a>
            <!-- Item 2 -->
            <a href="../Static/img/basica.jpg" class="relative zoom block overflow-hidden">
                <img src="../Static/img/basica.jpg" alt="Básicas" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">BÁSICAS</span>
                </div>
            </a>
            <!-- Item 3 -->
            <a href="https://example.com/item3" class="relative zoom block overflow-hidden">
                <img src="../Static/img/hoddie.jpg" alt="Hoodies" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">HOODIES</span>
                </div>
            </a>
            <!-- Item 4 -->
            <a href="https://example.com/item4" class="relative zoom block overflow-hidden">
                <img src="../Static/img/pant.jpg" alt="Item 4" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">BERMUDAS</span>
                </div>
            </a>
            <!-- Item 5 -->
            <a href="https://example.com/item5" class="relative zoom block overflow-hidden">
                <img src="../Static/img/sombrero.jpg" alt="Item 5" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">GORROS</span>
                </div>
            </a>
            <!-- Item 6 -->
            <a href="https://example.com/item6" class="relative zoom block overflow-hidden">
                <img src="../Static/img/pantalon.jpg" alt="Item 6" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
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



</body><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<footer>
  <svg viewBox="0 0 120 28">
    <defs> 
      <!-- Máscara para crear una forma circular que oculta parte del contenido -->
      <mask id="mascara">
        <circle cx="7" cy="12" r="40" fill="#fff" />
      </mask>
      
      <!-- Filtro Goo para dar un efecto de fluidez a los elementos -->
      <filter id="efectoGoo">
        <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur" />
        <feColorMatrix in="blur" mode="matrix" values="
             1 0 0 0 0  
             0 1 0 0 0  
             0 0 1 0 0  
             0 0 0 13 -9" result="goo" />
        <feBlend in="SourceGraphic" in2="goo" />
      </filter>
      
      <!-- Definición de la forma de la ola -->
      <path id="ola" d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
    </defs> 

    <!-- Uso del camino de la ola con variaciones en posición y transparencia -->
    <use id="ola3" class="ola" xlink:href="#ola" x="0" y="-2"></use> 
    <use id="ola2" class="ola" xlink:href="#ola" x="0" y="0"></use>
  
    <!-- Círculo animado que simula un balón en la parte superior -->
    <g class="balonSuperior">
      <circle class="balon" cx="110" cy="8" r="4" stroke="none" stroke-width="0" fill="transparent" />
    </g>
    
    <!-- Grupo de gotas que caen con efecto Goo -->
    <g class="efectoGoo">
      <circle class="gota gota1" cx="20" cy="2" r="1.8" />
      <circle class="gota gota2" cx="25" cy="2.5" r="1.5" />
      <circle class="gota gota3" cx="16" cy="2.8" r="1.2" />
      <use id="ola1" class="ola" xlink:href="#ola" x="0" y="1" />
    </g>
  </svg>
  

  <div>Saudade Corpoorations <br><br><br><br><br><br><br><br></div>
</footer>

<style>
@import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");

footer {
  width:100vw; /* El footer ocupa todo el ancho de la ventana */
  position:absolute; /* Posiciona el footer en la parte inferior de la página */
  bottom:0;
  left:0;
}

footer div {
  background-color:#130048; /* Fondo azul oscuro */
  margin: -5px 0px 0px 0px;
  padding:0px;
  color: #fff; /* Texto blanco */
  text-align:center; /* Centra el texto en el div */
}

svg {
  width:100%; /* El SVG ocupa todo el ancho del footer */
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



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="../Public/js/alerta.js"></script>
<script src="../Public/js/carrucel.js"></script>
<script src="../Public/js/whastsapp.js"></script>
</html>