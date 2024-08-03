<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio De Sesion </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="../Public/css/style.css">
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

    <img src="../Static/img/ANGEL SIN FONDO.png" class="angel1">
    <!-- Imagen angel 2 --> 
    <img src="../Static/img/ANGEL SIN FONDO.png" class="angel2">

    <div class="container mx-auto max-w-lg p-10 rounded-lg drop-shadow-2xl  my-20 bg-[#050016]">
        <div class="text-center py-5 mb-5">
            <h1 class="text-2xl text-white font-bold">Bienvenido a Saudade</h1>
        </div>

        <form action="../Public/login_action.php" method="post" class="flex flex-col" onsubmit="return validarFormulario()">
            <div class="mb-3">
                <label for="email" class="block font-bold text-mg text-white">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Email" class="form-input w-full rounded-md border border-gray-300 focus:border-blue-500 py-1" required>
            </div>
        
            <div class="mb-3">
                <label for="password" class="block font-bold text-mg text-white">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña" class="form-input w-full rounded-md border border-gray-300 py-1 focus:border-blue-500" required>
            </div>
        
            <div class="flex items-center justify-between mb-5">
                <a href="../Views/forgot_password.php" class="text-sm text-blue-500 hover:underline">¿Olvidaste tu contraseña?</a>
            </div>
        
            <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600">Inicio de sesión</button>
        
            <div class="text-center text-white mt-5">
                <p>¿Aún no estás en Saudade? <a href="{{ url_for('registro') }}" class="text-blue-500 hover:underline">Regístrate</a></p>
            </div>
        </form>

        
        <script>
            function validarFormulario() {
                var email = document.getElementById("email").value;
                var password = document.getElementById("password").value;
        
                // Validación adicional
                if (email === "" || password === "") {
                    alert("Por favor completa todos los campos.");
                    return false;
                }
        
                return true;
            }
        </script>

        
        



        <div class="flex items-center bg-white justify-center rounded-lg py-2 mt-5">  
            <a <?php require('../Controller/callback.php')?>
             href="<?php echo htmlspecialchars($client->createAuthUrl()); ?>" class="inline-block text-gray-500 hover:text-gray-700">
                <span class="ml-2">Continuar con Google</span>
                
              
            </a>
        </div>

        <div class="text-center text-sm opacity-40 text-white  mt-2">
            <p>Si continúas, aceptas los Términos del servicio Abre una nueva pestaña de Saudade y confirmas que has leído nuestra política de privacidad Aviso de recopilación de datos </p>
        </div>
    </div>

    <script src="../Public/js/validacioninicio.js"></script>
    
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