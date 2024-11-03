<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Configuración básica de la página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Importación de TailwindCSS desde CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Importación de FontAwesome para íconos -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <!-- Enlaces a CSS adicionales para la página -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../public/css/landin.css">
    <link rel="stylesheet" href="../public/css/whats.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/whats2.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navegación -->
    <nav id="header" class="barra">
        <div class="w-full flex items-center justify-between px-6 py-4 backdrop-blur-lg">
            
            <!-- Ícono de menú para dispositivos móviles -->
            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle">

            <!-- Menú de navegación, oculto en móviles y visible en pantallas más grandes -->
            <div id="menu" class="hidden fixed top-0 left-0 h-full w-3/4 bg-purple-600 shadow-lg z-50 md:relative md:flex md:bg-transparent md:shadow-none md:w-auto md:h-auto md:order-1">
                <nav>
                    <ul class="flex flex-col md:flex-row md:items-center text-base text-white md:text-black pt-4 md:pt-0">
                        <!-- Enlaces de navegación -->
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="inicio">Inicio</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="QuieneSomos/quienessomos">Quiénes Somos</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="Catalogo/catalogo">Catalogo</a></li>

                        <!-- PHP para manejar la sesión del usuario -->
                        <?php
                            session_start(); // Iniciar sesión si aún no ha sido iniciada

                            include_once '../Models/RolesModel.php'; // Incluir modelo para manejo de roles

                            $role = null;
                            if (isset($_SESSION['role_id'])) { // Verificar si el rol está establecido en la sesión
                                $rolesModel = new RolesModel(); // Instanciar modelo de roles
                                $roleData = $rolesModel->getRoleById($_SESSION['role_id']); // Obtener datos del rol por ID
                                $role = $roleData['role_name']; // Asignar el nombre del rol a una variable
                            }
                        ?>

                        <!-- Mostrar enlaces adicionales dependiendo del rol del usuario -->
                        <?php if ($role === 'admin' ): ?>
                            <li><a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="Admin/admin">Admin Dashboard</a></li>
                        <?php elseif ($role === 'vendedor'): ?>
                            <li><a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="Vendedor/vendedordashboard">Vendedor Dashboard</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>

            <!-- Opciones de sesión y carrito de compras -->
            <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
                <div class="auth flex items-center w-full md:w-full">
                    <!-- Ícono de carrito de compras -->
                    <button><a style='font-size:24px;color:black' class='fas'>&#xf07a;</a></button>

                    <!-- PHP para mostrar mensaje de bienvenida o opciones de inicio de sesión/registro -->
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <span class="inline-block no-underline font-medium text-black text-lg px-4">Hola, <?php echo $_SESSION['username']; ?>!</span>
                        <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="Login/LogoutAction">Cerrar Sesión </a>
                    <?php else: ?>
                        <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="Login/inicio_sesion">Iniciar Sesión</a>
                        <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="Login/registro">Registrarse</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Script para mostrar/ocultar el menú en dispositivos móviles -->
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

    <!-- Video de fondo en la página principal -->
    <video id="video" class="" autoplay muted loop>
        <source src="../public/img/video/street.mp4" type="video/mp4">
        Tu navegador no soporta la etiqueta de video.
    </video>

    <div class="w-full bg-white py-2 overflow-hidden">
  <div class="animate-marquee flex space-x-20 whitespace-nowrap">
    <span class="flex items-center space-x-2">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l1.42 4.94m6.06 1.7L19.5 15m-.95 6.48l-5.62-2.07M4.5 15l5.62-2.07M12 22l-1.42-4.94m-6.06-1.7L4.5 9m.95-6.48l5.62 2.07M12 2l-5.62 2.07M2 12h20"></path>
      </svg>
      <span>PRENDAS HECHAS PARA LOS AMANTES DEL STREETWEAR</span>
    </span>
    <span class="flex items-center space-x-2">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 15l-7.5-5 7.5-5m-15 0h1.5v10H4.5M4 4l-2 1.5v13L4 20M15 5v10M12 3l-7 5v4"></path>
      </svg>
      <span>PARCHAO</span>
    </span>
    <span class="flex items-center space-x-2">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 14v6m-8-2v-6m-6-2v6m6 2v-6"></path>
      </svg>
      <span>PRENDAS DE ALTA CALIDAD HECHAS EN COLOMBIA</span>
    </span>
  </div>
</div>
<style>
@keyframes marquee {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(-100%);
  }
}
.animate-marquee {
  animation: marquee 15s linear infinite;
}
</style>

    <!-- Pop-up de bienvenida para el usuario no registrado -->
    <div id="popup" class="fixed z-50 bg-slate-100 opacity-95 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 shadow-lg font-comic-sans rounded-md p-24 text-center animate-popup drop-shadow-2xl" style="display: none; width: 500px; height: 550px;">
    <img id="popup-image" src="../public/img/LOGO_SAUDADE.png" alt="Descripción de la imagen" class="transform scale-110 animate-flip-horizontal mx-auto">
    <h2 class="text-xl font-bold py-2">¡Te Damos la Bienvenida a Saudade!</h2>
    <p class="py-2 text-lg font-normal">Obtén un descuento del 10% en tu primera compra iniciando sesión.</p>
    <div class="flex justify-center align-center space-x-4 py-4">
        <a href="Login/inicio_sesion" class="bg-black text-white hover:text-[#6F00FF] hover:bg-gray-300 px-4 py-2 rounded-lg text-center px-4 font-medium text-lg">Iniciar sesión</a>
        <button onclick="closePopup()" class="bg-gray-300 hover:bg-gray-400 text-black px-4 py-2 rounded-lg font-medium text-lg">Cerrar</button>
    </div>
</div>

<style>

@keyframes flip-horizontal {
    0% {
        transform: rotateY(0deg);
    }
    100% {
        transform: rotateY(360deg);
    }
}

.animate-flip-horizontal {
    animation: flip-horizontal 4s linear infinite; /* Ajuste de velocidad */
}

</style>


    <!-- Spotify Widget para agregar música -->
    <iframe class="luna" style="border-radius:12px" src="https://open.spotify.com/embed/track/7bywjHOc0wSjGGbj04XbVi?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

    <!-- Sección de productos destacados -->
    <div class="bg-white py-16">
        <div class="container mx-auto">
            <!-- Productos -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 shadow-lg">
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
                <!-- Más productos aquí... -->
            </div>
            
        </div>
    </div>
        
    </div><br><br>


  <!-- Slogan de la página -->
  <div style="text-align: center">
    <!-- Logo de la marca Saudade -->
    <img src="../public/Img/LOGO_SAUDADE.png" alt="Logo Saudade" class="sloganlogo transform animate-flip-horizontal" style="width: 300px; height: 250px;">
    <!-- Slogan principal -->
    <h1 class="slogan"> A VIDA É MUITO CURTA PARA CONTINUAR USANDO ROUPAS CHATAS </h1>
    <!-- Subtítulo adicional -->
    <p class="slogan2">Viste tu actitud con ropa urbana de SAUDADE</p>
    <!-- Botón de llamada a la acción -->
    <a href="#" class="sloganbtn">Compra Ahora</a>
</div>




<style>
  @keyframes flip-horizontal {
    0% {
        transform: rotateY(0deg);
    }
    100% {
        transform: rotateY(360deg);
    }
}

.animate-flip-horizontal {
    animation: flip-horizontal 3s linear infinite; /* Ajuste de velocidad */
}


</style>

<!-- Sección NEW MERCH -->
<div class="text-center mb-8">
    <!-- Título de la sección -->
    <h2 class="text-4xl font-bold">NEW MERCH</h2>
    <!-- Línea decorativa -->
    <div class="border-b-2 mb-8"></div>
</div>

<!-- Contenedor de productos en formato de cuadrícula -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-8 shadow-lg">
    <div class="relative">
        <!-- Producto 1: Jeans Baggy Para Hombre Azul -->
        <img src="../public/img/pant.jpg" alt="Product 1" class="w-full">
        <p class="text-center mt-4">Jeans Baggy Para Hombre Azul</p>
        <p class="text-center font-bold">$160.000,00</p>
    </div>
    <div class="relative">
        <!-- Producto 2: Camisa Para Hombre Oversize Crudo Calavera -->
        <img src="../public/img/basica.jpg" alt="Product 2" class="w-full">
        <p class="text-center mt-4">Camisa Para Hombre Oversize Crudo Calavera</p>
        <p class="text-center font-bold">$125.000,00</p>
    </div>
    <div class="relative">
        <!-- Producto 3: Jeans Baggy Para Hombre Negro -->
        <img src="../public/img/pantalon.jpg" alt="Product 3" class="w-full">
        <p class="text-center mt-4">Jeans Baggy Para Hombre Negro</p>
        <p class="text-center font-bold">$130.000,00</p>
    </div>
    <div class="relative">
        <!-- Producto 4: Jogger Para Hombre Cargo Negro -->
        <img src="../public/img/camiseta.jpg" alt="Product 4" class="w-full">
        <p class="text-center mt-4">Jogger Para Hombre Cargo Negro - Bota Ajustable</p>
        <p class="text-center font-bold">$155.000,00</p>
    </div>
</div>
</div>
</div><br>

<!-- Imagen adicional -->
<img src="../public/img/parchese.png" alt="" class="mx-auto max-w-full h-auto" style="position: relative; top: 40px;">

<!-- Estrellas decorativas -->
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

<!-- Contenedor del carrusel de videos -->
<div class="carousel-container ">
    <div class="carousel">
        <!-- Videos pequeños -->
        <div class="video-container small">
            <video src="../public/img/video/video1.mp4" muted></video>
        </div>
        <div class="video-container small">
            <video src="../public/img/video/video5.mp4" muted></video>
        </div>
        <!-- Video principal que se reproduce automáticamente -->
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
    <!-- Controles de navegación del carrusel -->
    <div class="navigation">
        <!-- Botón para desplazarse a la izquierda -->
        <button class="arrow left-arrow">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 17l-5-5 5-5v10z" fill="black" />
            </svg>
        </button>
        <!-- Botón para desplazarse a la derecha -->
        <button class="arrow right-arrow">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 17l5-5-5-5v10z" fill="black" />
            </svg>
        </button>
    </div>
</div>

<!-- Estilos CSS para dar formato a la página -->
<style>
    .sloganlogo {
        height: 100px; /* Ajusta el tamaño del logo */
        display: block;
        margin: 0 auto; /* Centra el logo horizontalmente */
    }
    .slogan {
        font-size: 2rem; /* Tamaño de fuente para el eslogan */
        font-weight: 700; /* Peso de fuente */
        margin: 15px 0; /* Margen superior e inferior */
        color: #111; /* Color del texto */
    }
    .slogan2 {
        font-size: 1.2rem; /* Tamaño de fuente para el subtítulo */
        color: #555; /* Color del subtítulo */
        margin-bottom: 40px; /* Margen inferior */
    }
    .sloganbtn {
        background-color: #111; /* Color de fondo del botón */
        color: #fff; /* Color del texto del botón */
        padding: 15px 30px; /* Relleno del botón */
        text-decoration: none; /* Sin subrayado en el texto */
        border-radius: 25px; /* Bordes redondeados */
        font-size: 1rem; /* Tamaño de fuente */
        text-transform: uppercase; /* Texto en mayúsculas */
        letter-spacing: 1px; /* Espaciado entre letras */
        display: inline-block; /* Permite márgenes */
        margin-bottom: 50px; /* Margen inferior */
        transition: background-color 0.3s ease; /* Transición para el cambio de color */
    }

    .sloganbtn:hover {
        background-color: #333; /* Cambia el color al pasar el ratón */
    }
    .carousel-container {
        display: flex;
        flex-direction: column;
        align-items: center; /* Centra el contenido */
        justify-content: center; /* Centra el contenido */
        position: relative;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra */
    }

    .carousel {
        display: flex; /* Usa flexbox para el carrusel */
        align-items: center; /* Centra verticalmente */
        justify-content: center; /* Centra horizontalmente */
        position: relative;
    }

    .video-container {
        transition: transform 0.5s ease, width 0.5s ease, height 0.5s ease; /* Animación suave al cambiar tamaño */
        overflow: hidden; /* Oculta el desbordamiento */
        border-radius: 10px; /* Bordes redondeados */
    }

    .video-container video {
        width: 100%; /* Ancho completo del contenedor */
        height: 100%; /* Alto completo del contenedor */
        object-fit: cover; /* Mantiene la relación de aspecto */
    }

    .small {
        width: 300px; /* Ancho para videos pequeños */
        height: 500px; /* Alto para videos pequeños */
        margin: 0 10px; /* Márgenes laterales */
    }

    .main {
        width: 400px; /* Ancho para el video principal */
        height: 700px; /* Alto para el video principal */
        margin: 0 20px; /* Márgenes laterales */
    }

    .navigation {
        margin-top: 20px; /* Margen superior para la navegación */
    }

    .arrow {
        border: none; /* Sin borde */
        font-size: 24px; /* Tamaño de fuente para el botón */
        cursor: pointer; /* Cambia el cursor al pasar el ratón */
        color: white; /* Color del ícono */
        padding: 10px; /* Relleno */
        margin: 0 10px; /* Márgenes laterales */
        border-radius: 50%; /* Bordes redondeados para los botones */
        outline: none; /* Sin contorno */
    }
</style>

<!-- Script para manejar el carrusel -->
<script>
    let currentIndex = 2; // Índice del video actualmente visible

    const videos = document.querySelectorAll('.video-container'); // Selecciona todos los contenedores de video
    const totalVideos = videos.length; // Total de videos en el carrusel

    // Evento para el botón de flecha izquierda
    document.querySelector('.left-arrow').addEventListener('click', () => {
        rotateCarousel(-1); // Rota hacia la izquierda
    });

    // Evento para el botón de flecha derecha
    document.querySelector('.right-arrow').addEventListener('click', () => {
        rotateCarousel(1); // Rota hacia la derecha
    });

    // Función para rotar el carrusel
    function rotateCarousel(direction) {
        currentIndex = (currentIndex + direction + totalVideos) % totalVideos; // Calcula el nuevo índice

        videos.forEach((video, index) => {
            const videoElement = video.querySelector('video'); // Selecciona el elemento de video
            video.classList.remove('main', 'small'); // Elimina las clases anteriores
            video.classList.add(index === currentIndex ? 'main' : 'small'); // Añade la clase según el índice

            // Maneja la reproducción de los videos
            if (index === currentIndex) {
                videoElement.play(); // Reproduce el video actual
            } else {
                videoElement.pause(); // Pausa otros videos
                videoElement.currentTime = 0; // Reinicia el video para que comience desde el inicio cuando vuelva a ser el principal
            }
        });
    }
</script>

<br><br><br>











<!-- Sección inferior de navegación -->
<div class="nav-bottom">
    <!-- Logo de Wasa -->
    <img id="wasa" src="{{ url_for('static', filename='img/wasa.png') }}" width="50" alt="">

    <!-- Popup de WhatsApp -->
    <div class="popup-whatsapp fadeIn">
        <div class="content-whatsapp -top">
            <!-- Botón de cerrar el popup -->
            <button type="button" class="closePopup">
                <i class="material-icons icon-font-color">X</i>
            </button>

            <!-- Mensaje de bienvenida en el popup -->
            <p>
                <img src="../public/img/LOGO_SAUDADE.png" width="50" alt="Logo de Saudade">
                Hola, ¿En qué podemos ayudarle?
            </p>
        </div>
        <div class="content-whatsapp -bottom">
            <!-- Campo de entrada de texto para enviar mensajes -->
            <input class="whats-input" id="whats-in" type="text" placeholder="Enviar mensaje..." />
            <!-- Botón de enviar -->
            <button class="send-msPopup" id="send-btn" type="button">
                <i class="material-icons icon-font-color--black">></i>
            </button>
        </div>
    </div>

    <!-- Botón para abrir el popup de WhatsApp -->
    <button type="button" id="whats-openPopup" class="whatsapp-button">
        <div class="float">
            <i class="fa fa-whatsapp my-float"></i>
        </div>
    </button>

    <!-- Animación circular (puede estar vacía para efectos de diseño) -->
    <div class="circle-anime"></div>
</div>

<!-- Imagen de fondo -->
<img class="nort" src="../public/img/nort.jpg" alt="">

<!-- Estilo para la imagen de fondo -->
<style>
    .nort {
        width: 100%; /* Ocupa el 100% del ancho del contenedor */
        height: auto; /* Mantiene la proporción de la imagen */
        max-height: 64vh; /* Limita la altura máxima */
        object-fit: cover; /* Asegura que la imagen cubra el área sin distorsión */
        opacity: 0.8; /* Transparencia */
    }
</style>

<!-- Separador con texto en el medio -->
<div class="flex items-center justify-center my-8">
    <hr class="flex-grow border-t border-gray-300"> <!-- Línea horizontal -->
    <span class="mx-4 text-gray-700 text-xl font-semibold">LO MEJOR LO ENCUENTRAS EN SAUDADE</span> <!-- Texto central -->
    <hr class="flex-grow border-t border-gray-300"> <!-- Línea horizontal -->
</div>

<!-- Contenedor de productos -->
<div class="container mx-auto p-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <!-- Item 1: Camisetas -->
        <a href="https://example.com/item1" class="relative zoom block overflow-hidden">
            <img src="../public/img/camiseta.jpg" alt="Camisetas" class="w-full h-auto max-h-[70vh] object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <span class="text-white text-xl font-bold">CAMISETAS</span>
            </div>
        </a>
        <!-- Item 2: Básicas -->
        <a href="../Static/img/basica.jpg" class="relative zoom block overflow-hidden">
            <img src="../public/img/basica.jpg" alt="Básicas" class="w-full h-auto max-h-[70vh] object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <span class="text-white text-xl font-bold">BÁSICAS</span>
            </div>
        </a>
        <!-- Item 3: Hoodies -->
        <a href="https://example.com/item3" class="relative zoom block overflow-hidden">
            <img src="../public/img/hoddie.jpg" alt="Hoodies" class="w-full h-auto max-h-[70vh] object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <span class="text-white text-xl font-bold">HOODIES</span>
            </div>
        </a>
        <!-- Item 4: Bermudas -->
        <a href="https://example.com/item4" class="relative zoom block overflow-hidden">
            <img src="../public/img/pant.jpg" alt="Bermudas" class="w-full h-auto max-h-[70vh] object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <span class="text-white text-xl font-bold">BERMUDAS</span>
            </div>
        </a>
        <!-- Item 5: Gorros -->
        <a href="https://example.com/item5" class="relative zoom block overflow-hidden">
            <img src="../public/img/sombrero.jpg" alt="Gorros" class="w-full h-auto max-h-[70vh] object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <span class="text-white text-xl font-bold">GORROS</span>
            </div>
        </a>
        <!-- Item 6: Pantalones -->
        <a href="https://example.com/item6" class="relative zoom block overflow-hidden">
            <img src="../public/img/pantalon.jpg" alt="Pantalones" class="w-full h-auto max-h-[70vh] object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <span class="text-white text-xl font-bold">PANTALON</span>
            </div>
        </a>
    </div>
</div>

<!-- Efecto de zoom al pasar el mouse -->
<style>
    .zoom:hover img {
        transform: scale(1.1); /* Aumenta el tamaño de la imagen */
        transition: transform 0.5s ease; /* Animación suave */
    }
</style>
<div class="bg-black text-white py-4 flex justify-center items-center">
    <p class="text-center">Envios gratis a partir de compras por mas de 100k</p>
</div>


<section class="relative h-screen w-full flex">
    <!-- Imagen ocupando el 50% de la pantalla -->
    <div class="w-1/2 h-full">
        <img src="../public/img/zavat.jpg" alt="New Arrivals" class="h-full w-full object-cover object-center">
    </div>
    
    <!-- Sección de texto en el lado derecho -->
    <div class="w-1/2 h-full bg-gray-100 flex flex-col justify-center items-start p-16">
        <h2 class="text-black text-lg uppercase mb-2">NEW ARRIVALS</h2>
        <p class="text-black text-xl mb-4">drop:2 SS24</p>
        <p class="text-black text-sm mb-8">FOR ALL MOMENTS</p>
        
        <!-- Botón de compra -->
        <button class="bg-black text-white py-2 px-6 uppercase tracking-wider">Comprar</button>
    </div>
</section><br><br>










<!-- Título para la sección de suscripción -->
<div class="text-center mb-8">
    <h2 class="text-4xl font-bold">MANTENTE AL TANTO DE SAUDADE</h2>
    <div class="border-b-2 mb-8"></div> <!-- Línea de separación -->
</div>

<!-- Contenedor del formulario de suscripción -->
<div class="flex justify-center items-center py-8">
    <div class="bg-white shadow-lg rounded-lg max-w-3xl w-full p-4 flex">
        <!-- Imagen del anuncio -->
        <div class="w-1/2">
            <img src="../public/img/grupo.jpg" alt="Imagen del anuncio" class="w-full h-auto rounded-lg">
        </div>

        <!-- Contenido del anuncio -->
        <div class="w-1/2 pl-4">
            <!-- Botón de cerrar -->
            <button id="close-button" class="absolute top-2 right-2 text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            
            <!-- Título del anuncio -->
            <h2 class="text-xl font-bold mb-2">PARCHESE CON SAUDADE</h2>
            <p class="text-xs mb-2">Te mantendremos al tanto de próximos drops!</p>

            <!-- Formulario de suscripción -->
            <form id="subscription-form" class="space-y-2">
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-2 py-1 border border-red-500 rounded-md focus:outline-none focus:border-black" placeholder="Email" required>
                    <span id="error-message" class="text-red-500 text-xs"></span>
                </div>

                <!-- Botón para enviar la suscripción -->
                <button type="submit" class="w-full bg-black text-white py-1 rounded-md hover:bg-gray-800 transition">
                    DE UNA
                </button>
            </form>

            <!-- Mensaje de éxito o error -->
            <p id="status-message" class="text-xs mt-2"></p>
        </div>
    </div>
</div>

<!-- Script para manejar el envío del formulario -->
<script>
    // Escucha el evento de envío del formulario
    document.getElementById('subscription-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Previene el comportamiento predeterminado de envío

        const email = document.getElementById('email').value; // Captura el valor del campo de email
        const errorMessage = document.getElementById('error-message'); // Captura el elemento de mensaje de error
        const statusMessage = document.getElementById('status-message'); // Captura el elemento de estado

        // Limpia mensajes anteriores
        errorMessage.textContent = '';
        statusMessage.textContent = '';

        // Valida el email ingresado
        if (!email) {
            errorMessage.textContent = 'El email es requerido';
            return;
        }

        if (!validateEmail(email)) {
            errorMessage.textContent = 'El email ingresado no es válido';
            return;
        }

        // Envía el email usando fetch
        fetch('../Controller/procces.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded', // Define el tipo de contenido
            },
            body: new URLSearchParams({
                'email': email, // Envía el email
            }),
        })
        .then(response => response.json()) // Procesa la respuesta como JSON
        .then(data => {
            // Verifica el estado de la respuesta
            if (data.status === 'success') {
                statusMessage.textContent = '¡Gracias por suscribirte!'; // Mensaje de éxito
                statusMessage.classList.add('text-green-500'); // Clase para texto verde
            } else {
                statusMessage.textContent = 'Hubo un error al enviar el correo. Inténtalo de nuevo.'; // Mensaje de error
                statusMessage.classList.add('text-red-500'); // Clase para texto rojo
            }
        })
        .catch(error => {
            // Manejo de errores
            statusMessage.textContent = 'Hubo un error al enviar el correo. Inténtalo de nuevo.';
            statusMessage.classList.add('text-red-500');
        });
    });

    // Función para validar el formato del email
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Expresión regular para validar email
        return re.test(email); // Devuelve true o false
    }
</script>


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
<script src="../Public/js/alerta.js"></script>
<script src="../Public/js/carrucel.js"></script>
<script src="../Public/js/whastsapp.js"></script>

</html>