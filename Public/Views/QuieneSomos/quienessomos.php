<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quienes Somos</title>
    <link rel="stylesheet" href="../../Public/css/index.css"> 
    <link rel="stylesheet" href="../../Public/css/landin.css">
    <script src="https://cdn.tailwindcss.com"></script>   
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
                    <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href=" ../inicio">Inicio</a></li>
                    <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="">Quiénes Somos</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../Catalogo/catalogo">Catalogo</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Contenido adicional del menú -->
            <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
                <div class="auth flex items-center w-full md:w-full">
                    <button><a style='font-size:24px;color:black' class='fas'>&#xf07a;</a></button>

                    <?php if (isset($_SESSION['username'])): ?>
                        <span class="inline-block no-underline font-medium text-black text-lg px-4">Hola, <?php echo $_SESSION['username']; ?>!</span>
                        <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="../Login/LogoutAction">Cerrar sesión</a>
                        <?php else: ?>
                            <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF] px-4" href="../Login/inicio_sesion">Iniciar sesión</a>
                            <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF]" href="../Login/registro">Registrarse</a>
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

    <div class="relative w-full h-screen overflow-hidden">
        <video id="video" class="absolute inset-0 w-full h-full object-cover blur-lg" autoplay muted loop>
            <source src="../Static/video/street.mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
        <div class="absolute inset-0 opacity-60 bg-black"></div>
        <!-- Contenido superpuesto -->
        <div class="absolute inset-0 flex items-center justify-center text-white">
            <div class="relative z-20 p-10 max-w-3xl mx-auto text-center">
                <h2 class="font-bold text-4xl text-white mb-4">Quiénes Somos</h2>
                <div class="border-b-4 border-[#130048] w-80 mx-auto"></div>
                <p class="text-lg text-white mt-4">
                    Saudade nace en el 2024 como una propuesta a la moda moderna,tratando de mostrar algo mas que algo solo estetico, un mensaje, saudade viene del protugues, Se refiere a un sentimiento profundo de nostalgia o añoranza por algo o alguien que se ha perdido, ya sea temporalmente o para siempre. Saudade es más que solo extrañar; es una mezcla de melancolía, amor, y una apreciación por lo que fue. Es una conexión emocional con lo que se añora, algo que trae tanto tristeza como una especie de belleza y consuelo en los recuerdos, Saudade nos recuerda que hemos experimentado momentos tan bellos y significativos que dejaron una huella profunda en nuestras almas. Aunque la nostalgia puede doler, también es una señal de que hemos vivido plenamente, que hemos amado con intensidad y que hemos tenido la suerte de tener algo que añorar. Así que, cuando sientas saudade, en lugar de enfocarte en la ausencia, celebra la riqueza de esos recuerdos y la posibilidad de crear nuevos momentos que, algún día, también traerán esa dulce melancolía, ese es el mensaje de nuestra marca, parchese.
                </p>
                
            </div>
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

</html>