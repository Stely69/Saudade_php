<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio De Sesion</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Carga Tailwind CSS -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> <!-- Carga Font Awesome para íconos -->
    <link rel="stylesheet" href="../../Public/css/style.css"> <!-- Enlace a la hoja de estilos personalizada -->
</head>
<body>
    <?php
        session_start(); // Inicia la sesión para manejar autenticación de usuarios
    ?>
    
    <!-- Navegación principal -->
    <nav id="header" class="barra">
        <div class="w-full flex items-center justify-between px-6 py-4 backdrop-blur-lg">
            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle"> <!-- Checkbox para el menú móvil -->

            <!-- Menú de navegación -->
            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-black pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../../Public/inicio">Inicio</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../QuieneSomos/quienessomos">Quiénes Somos</a></li>
                        <li><a class="inline-block no-underline hover:text-[#9333ea] font-medium text-lg py-2 px-4 lg:-ml-2" href="../Catalogo/catalogo">Catalogo</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Contenido de navegación adicional -->
            <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
                <div class="auth flex items-center w-full md:w-full">
                    <button class=""><a style='font-size:24px;color:black' class='fas '>&#xf07a;</a></button> <!-- Icono de carrito -->

                    <?php if (isset($_SESSION['username'])): ?>
                        <!-- Mensaje de bienvenida si el usuario está autenticado -->
                        <span class="inline-block no-underline font-medium text-black text-lg px-4">Hola, <?php echo $_SESSION['username']; ?>!</span>
                        <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="LogoutAction">Cerrar sesión</a>
                    <?php else: ?>
                        <!-- Enlaces de autenticación si el usuario no está autenticado -->
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF] px-4" href="inicio_sesion">Iniciar sesión</a>
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF]" href="registro">Registrarse</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Imágenes decorativas -->
    <img src="../Img/ANGEL SIN FONDO.png" class="angel1 transform -scale-x-100 absolute"> <!-- Imagen del ángel 1 -->
    <img src="../Img/ANGEL SIN FONDO.png" class="angel2 transform -scale-x-200 absolute"> <!-- Imagen del ángel 2 -->

    <!-- Contenedor principal de la página de inicio de sesión -->
    <div class="container mx-auto max-w-lg p-10 rounded-lg drop-shadow-2xl my-20 bg-[#050016]">
        <div class="text-center py-5 mb-5">
            <h1 class="text-2xl text-white font-bold">Bienvenido a Saudade</h1> <!-- Título de bienvenida -->
        </div>
        
        <form action="LoginAction" method="post" class="flex flex-col" onsubmit="return validarFormulario()"> <!-- Formulario de inicio de sesión -->
            <div class="mb-3">
                <label for="email" class="block font-bold text-mg text-white">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Email" class="form-input w-full rounded-md border border-gray-300 focus:border-blue-500 py-1" required> <!-- Campo de entrada para correo electrónico -->
            </div>
        
            <div class="mb-3">
                <label for="password" class="block font-bold text-mg text-white">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña" class="form-input w-full rounded-md border border-gray-300 py-1 focus:border-blue-500" required> <!-- Campo de entrada para contraseña -->
            </div>

            <?php if(isset($_GET['error'])):?> <!-- Mostrar mensaje de error si existe -->
                <p class="text-red-500"><?php echo $_GET['error']; ?></p>
            <?php endif; ?>
        
            <div class="flex items-center justify-between mb-5">
                <a href="" class="text-sm text-blue-500 hover:underline">¿Olvidaste tu contraseña?</a> <!-- Enlace para recuperar contraseña -->
            </div>
        
            <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600">Inicio de sesión</button> <!-- Botón para enviar el formulario -->
        
            <div class="text-center text-white mt-5">
                <p>¿Aún no estás en Saudade? <a href="registro" class="text-blue-500 hover:underline">Regístrate</a></p> <!-- Enlace para registro -->
            </div>
        </form>

        <script>
            function validarFormulario() {
                var email = document.getElementById("email").value;
                var password = document.getElementById("password").value;
        
                // Validación adicional
                if (email === "" || password === "") {
                    alert("Por favor completa todos los campos."); // Alerta si los campos están vacíos
                    return false; // Evitar el envío del formulario
                }
        
                return true; // Permitir el envío del formulario
            }
        </script>

        <!-- Botón para continuar con Google -->
        <div class="flex items-center bg-white justify-center rounded-lg py-2 mt-5">  
            <a href="<?php // echo htmlspecialchars($client->createAuthUrl()); ?>" class="inline-block text-gray-500 hover:text-gray-700"> 
                <span class="ml-2">Continuar con Google</span>
            </a>
        </div>

        <!-- Mensaje de política de privacidad -->
        <div class="text-center text-sm opacity-40 text-white mt-2">
            <p>Si continúas, aceptas los Términos del servicio Abre una nueva pestaña de Saudade y confirmas que has leído nuestra política de privacidad Aviso de recopilación de datos</p>
        </div>
    </div>

    <script src="../Public/js/validacioninicio.js"></script> <!-- Archivo JavaScript adicional para validaciones -->

</body>
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
</html>
