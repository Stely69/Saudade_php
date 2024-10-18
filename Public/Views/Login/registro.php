<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudage Registro</title>
    <link rel="stylesheet" href="../../Public/css/style.css"> <!-- Estilo CSS personalizado -->
    <script src="https://cdn.tailwindcss.com"></script> <!-- Importa Tailwind CSS -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> <!-- Font Awesome para íconos -->
</head>
<body>
    <?php
        session_start(); // Inicia la sesión para acceder a las variables de sesión
    ?>
    
    <nav id="header" class="barra">
        <div class="w-full flex items-center justify-between px-6 py-4 backdrop-blur-lg">
            <!-- Botón para menú móvil -->
            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle"> <!-- Checkbox para controlar el menú móvil -->

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-black pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../../Public/inicio">Inicio</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../QuieneSomos/quienessomos">Quiénes Somos</a></li>
                        <li><a class="inline-block no-underline hover:text-[#9333ea] font-medium text-lg py-2 px-4 lg:-ml-2" href="../Catalogo/catalogo">Catalogo</a></li>
                    </ul>
                </nav>
            </div>

            <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
                <div class="auth flex items-center w-full md:w-full">
                    <button class=""><a style='font-size:24px;color:black' class='fas '>&#xf07a;</a></button>

                    <?php if (isset($_SESSION['username'])): ?>
                        <!-- Mensaje de bienvenida si el usuario está autenticado -->
                        <span class="inline-block no-underline font-medium text-black text-lg px-4">Hola, <?php echo $_SESSION['username']; ?>!</span>
                        <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="LogoutAction">Cerrar sesión</a>
                    <?php else: ?>
                        <!-- Enlaces para iniciar sesión o registrarse si no está autenticado -->
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF] px-4" href="inicio_sesion">Iniciar sesión</a>
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF]" href="registro">Registrarse</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Imágenes de fondo (ángeles) -->
    <img src="../Img/ANGEL SIN FONDO.png" class="angel1 transform -scale-x-100 absolute"> <!-- Imagen 1 -->
    <img src="../Img/ANGEL SIN FONDO.png" class="angel2 transform -scale-x-200 absolute"> <!-- Imagen 2 -->

    <!-- Sección de registro -->
    <div class="container mx-auto max-w-lg p-10 rounded-lg drop-shadow-2xl my-20 bg-[#050016]">
        <div class="text-center font-bold text-mg py-2 text-white mb-5">
            <h1 class="text-2xl font-bold">Bienvenido a Saudade</h1> <!-- Título principal -->
        </div>

        <!-- Formulario de registro -->
        <form action="RegisterAction" method="post" class="flex flex-col" onsubmit="return validarFormulario()">
            <div class="mb-3">
                <label for="nombre" class="block font-bold text-mg py-1 text-white">Nombre Completo</label>
                <input type="text" id="nombre" name="username" class="form-input w-full rounded-md border py-1 border-gray-300 focus:border-blue-500" required>
            </div>
    
            <div class="mb-3">
                <label for="email" class="block font-bold text-mg py-1 text-white">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-input w-full rounded-md border py-1 border-gray-300 focus:border-blue-500" required>
            </div>

            <?php if(isset($_GET['error'])): ?>
                <!-- Muestra un mensaje de error si existe -->
                <p class="text-red-500 font-bold"> <?php echo $_GET['error']; ?></p>
            <?php endif; ?>
    
            <div class="mb-3">
                <label for="password" class="block font-bold text-mg py-1 text-white">Contraseña</label>
                <input type="password" id="password" name="password" class="form-input w-full rounded-md py-1 border border-gray-300 focus:border-blue-500" required minlength="8">
            </div>
    
            <div class="mb-3">
                <label for="repetirPassword" class="block font-bold text-mg py-1 text-white">Repetir Contraseña</label>
                <input type="password" id="repetirPassword" name="repetirPassword" class="form-input w-full py-1 rounded-md border border-gray-300 focus:border-blue-500" required minlength="8">
            </div>

            <div class="flex items-center py-1 justify-between mb-5">
                <!-- Enlace para iniciar sesión si ya tienen cuenta -->
                <a href="inicio_sesion" class="text-sm text-blue-500 hover:underline">¿Ya tienes una cuenta? Inicia sesión</a>
            </div>
    
            <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600">Registrarse</button>
            <!-- Botón de envío para registrar -->
        </form>
    </div>
    
    <script src="../Public/js/validacionregistro.js"></script> <!-- Script para validaciones -->

<!-- Pie de página -->
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
  <div class="container mx-auto px-4">
        <div class="flex flex-wrap text-left lg:text-left">
            <div class="w-full lg:w-6/12 px-4">
                <h4 class="text-3xl fonat-semibold text-white">Saudade</h4>
                <h5 class="text-lg mt-0 mb-2 text-white">
                    Tienda Virtual
                </h5>
                <div class="mt-6 lg:mb-0 mb-6">
                    <button
                        class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <i class="fab fa-twitter"></i></button><button
                        class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <i class="fab fa-facebook-square"></i></button><button
                        class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <i class="fab fa-dribbble"></i></button><button
                        class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex flex-wrap items-top mb-6">
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                        <span class="block uppercase text-white text-sm font-semibold mb-2">Acerca de Nosotros</span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-white hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                    href="#">Contacto</a>
                            </li>
                            <li>
                                <a class="text-white hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                    href="#">Blog</a>
                            </li>
                            <li>
                                <a class="text-white hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                    href="#">Villeta Cundinamarca </a>
                            </li>
                            <li>
                                <a class="text-white hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                    href="#">Free
                                    Products</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <span class="block uppercase text-white text-sm font-semibold mb-2">Enlaces Rapidos</span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-white hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                    href="#">Mi cuenta License</a>
                            </li>
                            <li>
                                <a class="text-white hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                    href="#">Home</a>
                            </li>
                            <li>
                                <a class="text-white hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                    href="#">Terminos y condiciones</a>
                            </li>
                            <li>
                                <a class="text-white hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                    href="#">Politicas de privacidad </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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
</body>
</html>
