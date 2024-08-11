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
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF]" href="../Views/editor.php">Agregar productos</a>

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
                        <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="../public/logout_action.php">Cerrar sesión</a>

                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF] px-4" href="">Hola, vendedor</a>
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF]" href="../Views/registro.php"></a>
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
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <div class="relative">
        <img src="../Static/img/pantalon.jpg" alt="Product 1" class="w-full">
        <p class="text-center mt-4">Jeans Baggy Para Hombre Azul</p>
        <p class="text-center font-bold">$160.000,00</p>
      </div>
      <div class="relative">
        <img src="../Static/img/basica.jpg" alt="Product 2" class="w-full">
        <p class="text-center mt-4">Camisa Para Hombre Oversize Crudo Calavera</p>
        <p class="text-center font-bold">$125.000,00</p>
      </div>
      <div class="relative">
        <img src="../Static/img/pantalon.jpg" alt="Product 3" class="w-full">
        <p class="text-center mt-4">Jeans Baggy Para Hombre Negro</p>
        <p class="text-center font-bold">$130.000,00</p>
      </div>
      <div class="relative">
        <img src="../Static/img/pant.jpg" alt="Product 4" class="w-full">
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


  <div class="carousel-container">
    <div class="carousel">
        <div class="video-container small">
            <video src="../Static/video/video1.mp4" muted></video>
        </div>
        <div class="video-container small">
            <video src="../Static/video/video5.mp4" muted></video>
        </div>
        <div class="video-container main">
            <video src="../Static/video/video4.mp4" autoplay muted loop></video>
        </div>
        <div class="video-container small">
            <video src="../Static/video/video3.mp4" muted></video>
        </div>
        <div class="video-container small">
            <video src="../Static/video/video2.mp4" muted></video>
        </div>
    </div>
    <div class="navigation">
        <button class="arrow left-arrow"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M14 17l-5-5 5-5v10z" fill="black"/>
</svg></button>
        <button class="arrow right-arrow"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M10 17l5-5-5-5v10z" fill="black"/>
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
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">CAMISETAS</span>
                </div>
            </a>
            <!-- Item 2 -->
            <a href="../Static/img/basica.jpg" class="relative zoom block overflow-hidden">
                <img src="../Static/img/basica.jpg" alt="Básicas" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">BÁSICAS</span>
                </div>
            </a>
            <!-- Item 3 -->
            <a href="https://example.com/item3" class="relative zoom block overflow-hidden">
                <img src="../Static/img/hoddie.jpg" alt="Hoodies" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">HOODIES</span>
                </div>
            </a>
            <!-- Item 4 -->
            <a href="https://example.com/item4" class="relative zoom block overflow-hidden">
                <img src="../Static/img/pant.jpg" alt="Item 4" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">BERMUDAS</span>
                </div>
            </a>
            <!-- Item 5 -->
            <a href="https://example.com/item5" class="relative zoom block overflow-hidden">
                <img src="../Static/img/sombrero.jpg" alt="Item 5" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">GORROS</span>
                </div>
            </a>
            <!-- Item 6 -->
            <a href="https://example.com/item6" class="relative zoom block overflow-hidden">
                <img src="../Static/img/pantalon.jpg" alt="Item 6" class="w-full h-auto max-h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
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

<footer class="relative bg-[#0E0047] pt-8 pb-6">
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

        <hr class="my-6 border-blueGray-300">
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-white font-semibold py-1">
                    Copyright © <span id="get-current-year">2021</span><a href="#"
                        class="text-white hover:text-gray-500" target="_blank"> Saudade
                        <a href="https://www.creative-tim.com?ref=njs-profile"
                            class="text-blueGray-500 hover:text-blueGray-800"></a>.
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="../Public/js/alerta.js"></script>
<script src="../Public/js/carrucel.js"></script>
<script src="../Public/js/whastsapp.js"></script>
</html>