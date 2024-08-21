<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Camisas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/catalogo.css">
    <link rel="stylesheet" href="../Public/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .sticky-sidebar {
            position: sticky;
            top: 0;
            height: 100vh;
        }
    </style>
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
                    <button class="" id="cart-icon"><a style='font-size:24px;color:black' class='fas '>&#xf07a;</a></button>

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

    <div class="flex">
        <div class="w-0/4 p-4 bg-white shadow-lg sticky-sidebar">
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
                    <input type="range" min="0" max="180000" class="w-full">
                </div>
                <div class="flex justify-between">
                    <input type="number" min="0" max="180000" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="$ 0">
                    <input type="number" min="0" max="180000" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="$ 180000">
                </div>
                <button class="mt-4 w-full bg-black text-white py-2 rounded">Aplicar</button>
            </div>
            <div class="mb-6">
                <h2 class="font-bold text-lg mb-2">Talla</h2>
                <ul>
                    <li><label><input type="checkbox" class="mr-2">S (29)</label></li>
                    <li><label><input type="checkbox" class="mr-2">M (26)</label></li>
                    <li><label><input type="checkbox" class="mr-2">L (23)</label></li>
                    <li><label><input type="checkbox" class="mr-2">XL (27)</label></li>
                    <li><label><input type="checkbox" class="mr-2">L / 34 (10)</label></li>
                    <li><label><input type="checkbox" class="mr-2">M / 32 (10)</label></li>
                </ul>
            </div>
            <div>
                <h2 class="font-bold text-lg mb-2">Color</h2>
                <div class="flex flex-wrap">
                    <div class="w-6 h-6 bg-white border border-gray-300 rounded-full mr-2 mb-2"></div>
                    <div class="w-6 h-6 bg-gray-200 border border-gray-300 rounded-full mr-2 mb-2"></div>
                    <div class="w-6 h-6 bg-gray-400 border border-gray-300 rounded-full mr-2 mb-2"></div>
                    <div class="w-6 h-6 bg-black border border-gray-300 rounded-full mr-2 mb-2"></div>
                    <div class="w-6 h-6 bg-red-400 border border-gray-300 rounded-full mr-2 mb-2"></div>
                    <div class="w-6 h-6 bg-yellow-200 border border-gray-300 rounded-full mr-2 mb-2"></div>
                </div>
            </div>
        </div>

        <div class="w-3/4 p-4">
            <div class="container mx-auto max-w-7xl p-10">
                <div class="flex flex-col items-center mb-5">
                    <h1 class="text-3xl font-bold">Catálogo de Camisas</h1>
                    <p class="text-gray-500">Encuentra la camisa perfecta para ti.</p>
                </div><br><br><br>

                

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 bg-white">
                    <div class="bg-whites rounded-lg shadow-md hover:shadow-lg">
                        <img src="../Static/img/camiseta.jpg" alt="Camisa Nike" class="rounded-t-lg">
                        <div class="p-4 ">
                            <h3 class="text-black text-center font-medium">Polo</h3>
                            <p class="text-black">$45.000</p>
                            <div class="flex items-center justify-between mt-4">
                                <a href="../views/compra.php" class="text-blue-500 hover:underline">Ver detalles</a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
                        <img src="../Static/img/basica.jpg" alt="Camisa Adidas" class="rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-black text-center font-medium">Camiseta</h3>
                            <p class="text-black">$60.000</p>
                            <div class="flex items-center justify-between mt-4">
                                <a href="../Views/compra.php" class="text-blue-500 hover:underline">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
                        <img src="../Static/img/pantalon.jpg" alt="Camisa Adidas" class="rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-black text-center font-medium">Pantalon</h3>
                            <p class="text-black">$60.000</p>
                            <div class="flex items-center justify-between mt-4">
                                <a href="../Views/compra.php" class="text-blue-500 hover:underline">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
                        <img src="../Static/img/pant.jpg" alt="Camisa Adidas" class="rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-black text-center font-medium">Bermuda</h3>
                            <p class="text-black">$60.000</p>
                            <div class="flex items-center justify-between mt-4">
                                <a href="../Views/compra.php" class="text-blue-500 hover:underline">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
                        <img src="../Static/img/hoddie.jpg" alt="Camisa Adidas" class="rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-black text-center font-medium">Hooddies</h3>
                            <p class="text-black">$60.000</p>
                            <div class="flex items-center justify-between mt-4">
                                <a href="../Views/compra.php" class="text-blue-500 hover:underline">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
                        <img src="../Static/img/ber1.jpg" alt="Camisa Adidas" class="rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-black text-center font-medium">Camisa</h3>
                            <p class="text-black">$60.000</p>
                            <div class="flex items-center justify-between mt-4">
                                <a href="../Views/compra.php" class="text-blue-500 hover:underline">Ver detalles</a>
                            </div>
                        </div>
                    </div>


                    
                </div>
            </div>
        </div>
    </div>
    <img src="../Static/img/ANGEL SIN FONDO.png" class="angel2">

</body>

</html>
