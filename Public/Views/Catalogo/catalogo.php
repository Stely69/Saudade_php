<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> <!-- Establece la codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Hace que el diseño sea responsivo -->
    <title>Catálogo de Camisas</title> <!-- Título de la página -->
    <script src="https://cdn.tailwindcss.com"></script> <!-- Carga Tailwind CSS -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> <!-- Carga Font Awesome para iconos -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> <!-- Carga un CSS de Font Awesome -->
    <link rel="stylesheet" href="../../public/css/catalogo.css"> <!-- Carga CSS personalizado para el catálogo -->
    <link rel="stylesheet" href="../../Public/css/style.css"> <!-- Carga otro archivo de CSS personalizado -->

    <!-- Importando Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .sticky-sidebar {
            position: sticky; /* Mantiene la barra lateral en su lugar al hacer scroll */
            top: 0; 
            height: 100vh; /* Hace que ocupe toda la altura de la ventana */
        }
    </style>
</head>

<body>
    <?php
    session_start(); // Inicia la sesión para acceder a las variables de sesión
    ?>
    
    <!-- Barra de navegación -->
    <nav id="header" class="barra">
        <div class="w-full flex items-center justify-between px-6 py-4 backdrop-blur-lg">
            <!-- Icono de menú para dispositivos móviles -->
            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle"> <!-- Checkbox para manejar el menú en móvil -->

            <!-- Menú de navegación -->
            <div id="menu" class="hidden fixed top-0 left-0 h-full w-3/4 bg-purple-600 shadow-lg z-50 md:relative md:flex md:bg-transparent md:shadow-none md:w-auto md:h-auto md:order-1">
                <nav>
                    <ul class="flex flex-col md:flex-row md:items-center text-base text-white md:text-black pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../../Public/inicio">Inicio</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../QuieneSomos/quienessomos">Quiénes Somos</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../Catalogo/catalogo">Catálogo</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Contenido adicional del menú -->
            <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
                <div class="auth flex items-center w-full md:w-full">
                    <button><a style='font-size:24px;color:black' class='fas'>&#xf07a;</a></button> <!-- Icono de carrito -->

                    <?php if (isset($_SESSION['username'])): ?> <!-- Verifica si el usuario está logueado -->
                        <span class="inline-block no-underline font-medium text-black text-lg px-4">Hola, <?php echo $_SESSION['username']; ?>!</span> <!-- Saludo al usuario -->
                        <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="../Login/LogoutAction">Cerrar sesión</a> <!-- Enlace para cerrar sesión -->
                    <?php else: ?>
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF] px-4" href="../Login/inicio_sesion">Iniciar sesión</a> <!-- Enlace para iniciar sesión -->
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF]" href="../Login/registro.php">Registrarse</a> <!-- Enlace para registrarse -->
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </nav>

    <script>
        const menuToggle = document.getElementById('menu-toggle'); // Obtiene el elemento del menú
        const menu = document.getElementById('menu'); // Obtiene el menú

        // Manejador de eventos para mostrar/ocultar el menú en móvil
        menuToggle.addEventListener('change', function() {
            if (this.checked) {
                menu.classList.remove('hidden'); // Muestra el menú
            } else {
                menu.classList.add('hidden'); // Oculta el menú
            }
        });
    </script>

    <div class="flex">
        
        <!-- Contenedor de la barra de filtrado -->
        <div id="filterSidebar" class="lg:w-1/5 lg:p-4 lg:bg-white lg:shadow-lg lg:relative lg:top-0 lg:block hidden">
            <!-- Contenido de la barra de filtrado -->
            <div class="mb-6">
                <h2 class="font-bold text-lg mb-2">Categorías</h2>
                <ul>
                    <li class="mb-1"><a href="#" class="hover:underline">🌴 Summer Club</a></li>
                    <li class="mb-1"><a href="#" class="hover:underline">🔥 New Merch</a></li>
                    <li class="mb-1"><a href="#" class="hover:underline">Camisetas</a></li>
                    <li class="mb-1"><a href="#" class="hover:underline">Camisas y Polos</a></li>
                    <li class="mb-1"><a href="#" class="hover:underline">Inferiores 🩳</a></li>
                    <li class="mb-1"><a href="#" class="hover:underline">Básicos</a></li>
                    <li class="mb-1"><a href="#" class="hover:underline">Gorras</a></li>
                    <li class="mb-1"><a href="#" class="hover:underline">Sacos y Chaquetas</a></li>
                    <li class="mb-1"><a href="#" class="hover:underline">🎁 Gift Card</a></li>
                </ul>
            </div>
            <div class="mb-6">
                <h2 class="font-bold text-lg mb-2">Precio</h2>
                <div class="flex items-center mb-2">
                    <input type="range" min="0" max="180000" class="w-full"> <!-- Control deslizante para seleccionar rango de precio -->
                </div>
                <div class="flex justify-between">
                    <input type="number" min="0" max="180000" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="$ 0"> <!-- Campo para precio mínimo -->
                    <input type="number" min="0" max="180000" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="$ 180000"> <!-- Campo para precio máximo -->
                </div>
                <button class="mt-4 w-full bg-black text-white py-2 rounded">Aplicar</button> <!-- Botón para aplicar filtro de precio -->
            </div>
            <div class="mb-6">
                <h2 class="font-bold text-lg mb-2">Talla</h2>
                <ul>
                    <li><label><input type="checkbox" class="mr-2">S (29)</label></li> <!-- Checkbox para talla S -->
                    <li><label><input type="checkbox" class="mr-2">M (26)</label></li> <!-- Checkbox para talla M -->
                    <li><label><input type="checkbox" class="mr-2">L (23)</label></li> <!-- Checkbox para talla L -->
                    <li><label><input type="checkbox" class="mr-2">XL (27)</label></li> <!-- Checkbox para talla XL -->
                    <li><label><input type="checkbox" class="mr-2">L / 34 (10)</label></li> <!-- Checkbox para talla L/34 -->
                    <li><label><input type="checkbox" class="mr-2">M / 32 (5)</label></li> <!-- Checkbox para talla M/32 -->
                    <li><label><input type="checkbox" class="mr-2">M / 30 (8)</label></li> <!-- Checkbox para talla M/30 -->
                </ul>
            </div>
            <div class="mb-6">
                <h2 class="font-bold text-lg mb-2">Color</h2>
                <div class="flex flex-wrap">
                    <div class="w-6 h-6 bg-gray-200 border border-gray-300 rounded-full mr-2 mb-2"></div> <!-- Color gris claro -->
                    <div class="w-6 h-6 bg-gray-400 border border-gray-300 rounded-full mr-2 mb-2"></div> <!-- Color gris medio -->
                    <div class="w-6 h-6 bg-gray-600 border border-gray-300 rounded-full mr-2 mb-2"></div> <!-- Color gris oscuro -->
                    <div class="w-6 h-6 bg-gray-800 border border-gray-300 rounded-full mr-2 mb-2"></div> <!-- Color gris antracita -->
                    <div class="w-6 h-6 bg-black border border-gray-300 rounded-full mr-2 mb-2"></div> <!-- Color negro -->
                    <div class="w-6 h-6 bg-red-600 border border-gray-300 rounded-full mr-2 mb-2"></div> <!-- Color rojo -->
                    <div class="w-6 h-6 bg-blue-600 border border-gray-300 rounded-full mr-2 mb-2"></div> <!-- Color azul -->
                </div>
            </div>
        </div>

        <!-- Contenedor de productos -->
        <div id="productos" class="grid grid-cols-1 md:grid-cols-4 gap-5 bg-white">
    

        </div>

        
        <script src="../js/apicatalogo.js"></script>
    
</body>

</html>