<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Camisas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../public/css/catalogo.css">
    <link rel="stylesheet" href="../../Public/css/style.css">

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
                    <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../../Public/">Inicio</a></li>
                    <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../QuieneSomos/quienessomos">Quiénes Somos</a></li>
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
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF]" href="../Login/registro.php">Registrarse</a>
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
            <div class="text-center mb-8">
      <h2 class="text-4xl font-bold">NEW MERCH</h2>
      <div class="border-b-2 mb-8"></div>
    </div>
                
                <br><br><br>

                

                <div class="grid grid-cols-1 md:grid-cols-4 gap-5 bg-white">
    <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
        <img src="../../Public/Img/camiseta.jpg" alt="Camisa Nike" class="rounded-t-lg">
        <div class="p-4">
            <h3 class="text-black text-center font-medium">Polo</h3>
            <p class="text-black">$45.000</p>
            <div class="flex items-center justify-between mt-4">
                <a href="compra" class="text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
        <img src="../../public/img/basica.jpg" alt="Camisa Adidas" class="rounded-t-lg">
        <div class="p-4">
            <h3 class="text-black text-center font-medium">Camiseta</h3>
            <p class="text-black">$60.000</p>
            <div class="flex items-center justify-between mt-4">
                <a href="compra" class="text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
        <img src="../../public/img/pantalon.jpg" alt="Camisa Adidas" class="rounded-t-lg">
        <div class="p-4">
            <h3 class="text-black text-center font-medium">Pantalon</h3>
            <p class="text-black">$60.000</p>
            <div class="flex items-center justify-between mt-4">
                <a href="compra" class="text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
        <img src="../../public/img/pant.jpg" alt="Camisa Adidas" class="rounded-t-lg">
        <div class="p-4">
            <h3 class="text-black text-center font-medium">Bermuda</h3>
            <p class="text-black">$60.000</p>
            <div class="flex items-center justify-between mt-4">
                <a href="../Views/compra.php" class="text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
        <img src="../../public/img/hoddie.jpg" alt="Camisa Adidas" class="rounded-t-lg">
        <div class="p-4">
            <h3 class="text-black text-center font-medium">Hooddies</h3>
            <p class="text-black">$60.000</p>
            <div class="flex items-center justify-between mt-4">
                <a href="compra.php" class="text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
        <img src="../../Public/img/ber1.jpg" alt="Camisa Adidas" class="rounded-t-lg">
        <div class="p-4">
            <h3 class="text-black text-center font-medium">Camisa</h3>
            <p class="text-black">$60.000</p>
            <div class="flex items-center justify-between mt-4">
                <a href="compra" class="text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
        <img src="../../Public/img/sombrero.jpg" alt="Camisa Adidas" class="rounded-t-lg">
        <div class="p-4">
            <h3 class="text-black text-center font-medium">Camisa</h3>
            <p class="text-black">$60.000</p>
            <div class="flex items-center justify-between mt-4">
                <a href="compra" class="text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
        <img src="../../Public/img/pant.jpg" alt="Camisa Adidas" class="rounded-t-lg">
        <div class="p-4">
            <h3 class="text-black text-center font-medium">Camisa</h3>
            <p class="text-black">$60.000</p>
            <div class="flex items-center justify-between mt-4">
                <a href="compra" class="text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>
    </div>



    

    

   
</div>
  









    <div class="notification" id="notification">
        <img src="../../Public/img/hoddie.jpg" alt="Tee Sweetie" class="notification-image">
        <div class="notification-content">
            <p>Alguien compró hace poco <strong>una chimba de hoddie</strong></p>
            <p>Bogotá</p>
            <p class="time-ago">hace 19 minutos</p>
        </div>
        <div class="timer-bar" id="timer-bar"></div>
        <button class="close-btn" onclick="closeNotification()">×</button>
    </div>

    <style>
        body {
    font-family: Arial, sans-serif;
}

.notification {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    padding: 10px;
    max-width: 300px;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.5s ease-in-out, visibility 0.5s ease-in-out;
}

.notification-image {
    width: 50px;
    height: 50px;
    border-radius: 9%;
    margin-right: 10px;
}

.notification-content {
    flex-grow: 1;
}

.time-ago {
    font-size: 0.8em;
    color: gray;
}

.timer-bar {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background-color: black;
    animation: timer 30s linear forwards;
}

.close-btn {
    background: none;
    border: none;
    font-size: 1.2em;
    color: black;
    cursor: pointer;
    margin-left: 10px;
}

@keyframes timer {
    from { width: 100%; }
    to { width: 0%; }
}

    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
    // Mostrar la notificación después de 3 segundos
    setTimeout(function() {
        var notification = document.getElementById("notification");
        notification.style.opacity = "1";
        notification.style.visibility = "visible";
    }, 3000);

    // Ocultar la notificación después de 30 segundos
    setTimeout(function() {
        closeNotification();
    }, 33000); // 3 segundos de espera + 30 segundos de visualización
});

function closeNotification() {
    var notification = document.getElementById("notification");
    notification.style.opacity = "0";
    notification.style.visibility = "hidden";
}

    </script>

</body>

</html>
