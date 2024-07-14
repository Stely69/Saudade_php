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
    <!--Titulo de la empresa-->
    <title>Saudade</title>

</head>

<body>

    <?php
        session_start();
    ?>

    <nav id="header" class="barra">
        <div class="w-full flex items-center justify-between  px-6 py-4 backdrop-blur-lg">
            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle">

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-black pt-4 md:pt-0">
                        <a class="inline-block no-underline hover:text-purple  font-medium text-lg py-2 px-4 lg:-ml-2"
                            href="#"></a>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2"
                                href="../Views/inicio.php">Inicio</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2"
                                href="../Views/quienessomos.php">Quiénes Somos</a></li>

                        <li><a class="inline-block no-underline hover:text-[#9333ea] font-medium text-lg py-2 px-4 lg:-ml-2"
                                href="../Views/catalogo.php">Catalogo</a></li>

                    </ul>
                </nav>
            </div>

            <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
                <div class="auth flex items-center w-full md:w-full">
                    <a href="logout_action.php" class="hover:text-purple" ><?php echo $_SESSION['username']; ?></a>
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
            <a href="{{ url_for('inciar_sesion') }}" class=" bg-black text-white hover:text-[#6F00FF] hover:bg-gray-300 px-4 py-2 rounded-lg text-center px-4 font-medium text-lg">Iniciar sesión</a>
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
                    <img id="modelo" src="../static/img/modelo1.jpeg" class="rounded-lg object-cover h-50 w-42" alt="">
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

                <div class="flex sgap-2  mt-10 ">
                    <div id="grande4" class="bg-[#050016] w-1/3 shadow rounded-lg overflow-hidden flex flex-col  items-center justify-center p-4">
                        <img id="camiseta2" src="../static/img/camiseta2.png" class="rounded-lg object-cover h-50 w-42"
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
                        <img id="camiseta1" src="../static/img/camiseta1.png" class="rounded-lg object-cover h-50 w-42"
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
                        <img id="camiseta3" src="../static/img/camiseta3.png" class="rounded-lg object-cover h-50 w-42"
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
                        <img id="camiseta3" src="../static/img/camiseta3.png" class="rounded-lg object-cover h-50 w-42"
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