<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link rel="stylesheet" href="../Public/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="../public/css/catalogo.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <style>
        #cart {
            transition: transform 0.3s ease-in-out;
            transform: translateX(100%);
        }
        #cart.open {
            transform: translateX(0);
        }
    </style>
</head>
<body>
    <nav id="header" class="barra">
        <div class="w-full z-20 flex items-center justify-between  px-6 py-4  backdrop-blur-lg">
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
                    <button id="cart-icon" class="cart-icon">
                        🛒
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenedor del carrito -->
    <div id="cart" class="fixed top-0 right-0 w-80 bg-white h-full shadow-lg p-4 overflow-y-auto">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Carrito de Compras</h2>
            <button id="close-cart" class="text-red-500">&times;</button>
        </div>
        <div id="cart-content"></div>
        <button id="pagar-button" class="w-full mt-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Pagar</button>
    </div>

    <div class="max-w-7xl mx-auto p-4">
        <div class="flex flex-col md:flex-row">
            <!-- Imágenes del Producto -->
            <div class="flex-1">
                <img src="../Static/img/ber1.jpg" alt="Imagen del producto" class="w-full h-auto">
                <div class="flex mt-4 space-x-2">
                    <img src="../Static/img/ber2.jpg" alt="Miniatura 1" class="w-30 h-40 object-cover">
                    <img src="../Static/img/ber2.jpg" alt="Miniatura 2" class="w-30 h-40 object-cover">
                    <img src="../Static/img/ber4.jpg" alt="Miniatura 3" class="w-30 h-40 object-cover">
                </div>
            </div>

            <!-- Detalles del Producto -->
            <div class="flex-1 mt-4 md:mt-0 md:ml-8">
                <h1 class="text-2xl font-semibold">Camisa manga corta bolsillos bordado</h1>
                <p class="text-xl font-bold mt-2">179,900 COP</p>
                <p class="text-gray-500 mt-1">Gris - Ref: 6380/665/802</p>
                
                <!-- Tallas -->
                <div class="mt-4">
                    <span class="text-gray-600">Tallas:</span>
                    <select id="talle" class="border rounded px-4 py-2">
                        <option value="XS">XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                </div>

                <!-- Cantidad -->
                <div class="mt-4">
                    <span class="text-gray-600">Cantidad:</span>
                    <input id="cantidad" type="number" class="border rounded px-4 py-2 w-16" min="1" value="1">
                </div>

                <!-- Botón Añadir a la Cesta -->
                <button id="compra-button" class="mt-6 px-6 py-3 bg-green-600 text-white rounded hover:bg-green-700">
                    AÑADIR A LA CESTA
                </button>

                <!-- Opciones Desplegables -->
                <div class="mt-6">
                    <details class="border-t py-2">
                        <summary class="cursor-pointer">Composición, cuidados y origen</summary>
                        <p class="mt-2 text-gray-600">Detalles sobre la composición y cuidados del producto.</p>
                    </details>
                    <details class="border-t py-2">
                        <summary class="cursor-pointer">Disponibilidad en tienda</summary>
                        <p class="mt-2 text-gray-600">Información sobre disponibilidad en tiendas físicas.</p>
                    </details>
                    <details class="border-t py-2">
                        <summary class="cursor-pointer">Envíos y devoluciones</summary>
                        <p class="mt-2 text-gray-600">Política de envíos y devoluciones.</p>
                    </details>
                </div>

                <!-- Información de Envío -->
                <div class="mt-6">
                    <p class="text-gray-600">Recogida en tienda: <span class="font-bold">GRATIS</span></p>
                    <p class="text-gray-600">Envío a domicilio estándar: <span class="font-bold">GRATIS</span> en pedidos superiores a 199,900 COP</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center my-8">
        <hr class="flex-grow border-t border-gray-300">
        <span class="mx-4 text-gray-700 text-xl font-semibold">Te puede interesar</span>
        <hr class="flex-grow border-t border-gray-300">
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
        <!-- Producto Relacionado 1 -->
        <div class="bg-white p-4 rounded shadow">
            <img src="../Static/img/prod1.jpg" alt="Producto 1" class="w-full h-auto">
            <p class="mt-2 text-gray-600">Cazadora algodón print</p>
            <p class="font-bold">249,000 COP</p>
        </div>
        <!-- Producto Relacionado 2 -->
        <div class="bg-white p-4 rounded shadow">
            <img src="../Static/img/prod2.jpg" alt="Producto 2" class="w-full h-auto">
            <p class="mt-2 text-gray-600">Camiseta manga corta efecto lavado</p>
            <p class="font-bold">99,900 COP</p>
        </div>
        <!-- Producto Relacionado 3 -->
        <div class="bg-white p-4 rounded shadow">
            <img src="../Static/img/prod3.jpg" alt="Producto 3" class="w-full h-auto">
            <p class="mt-2 text-gray-600">Gorra efecto lavado</p>
            <p class="font-bold">99,900 COP</p>
        </div>
        <!-- Producto Relacionado 4 -->
        <div class="bg-white p-4 rounded shadow">
            <img src="../Static/img/prod4.jpg" alt="Producto 4" class="w-full h-auto">
            <p class="mt-2 text-gray-600">Gorra efecto lavado parche</p>
            <p class="font-bold">89,900 COP</p>
        </div>
        <!-- Producto Relacionado 5 -->
        <div class="bg-white p-4 rounded shadow">
            <img src="../Static/img/prod5.jpg" alt="Producto 5" class="w-full h-auto">
            <p class="mt-2 text-gray-600">Gafas sol sport</p>
            <p class="font-bold">99,900 COP</p>
        </div>
        <!-- Producto Relacionado 6 -->
        <div class="bg-white p-4 rounded shadow">
            <img src="../Static/img/prod6.jpg" alt="Producto 6" class="w-full h-auto">
            <p class="mt-2 text-gray-600">Camiseta bordada</p>
            <p class="font-bold">79,900 COP</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cartIcon = document.getElementById('cart-icon');
            const cart = document.getElementById('cart');
            const closeCart = document.getElementById('close-cart');
            const compraButton = document.getElementById('compra-button');
            const cartContent = document.getElementById('cart-content');
            const pagarButton = document.getElementById('pagar-button');

            const cartItems = [];

            cartIcon.addEventListener('click', () => {
                cart.classList.add('open');
            });

            closeCart.addEventListener('click', () => {
                cart.classList.remove('open');
            });

            compraButton.addEventListener('click', () => {
                const talla = document.getElementById('talle').value;
                const cantidad = parseInt(document.getElementById('cantidad').value);
                const item = {
                    nombre: 'Camisa manga corta bolsillos bordado',
                    precio: 179900,
                    talla: talla,
                    cantidad: cantidad
                };

                cartItems.push(item);
                actualizarCarrito();
                cart.classList.add('open'); // Abrir el carrito automáticamente
            });

            function actualizarCarrito() {
                cartContent.innerHTML = '';
                cartItems.forEach((item, index) => {
                    const itemElement = document.createElement('div');
                    itemElement.classList.add('border-b', 'py-2', 'flex', 'justify-between', 'items-center');
                    itemElement.innerHTML = `
                        <div>
                            <h4 class="font-semibold">${item.nombre}</h4>
                            <p class="text-gray-600">Talla: ${item.talla}</p>
                            <p class="text-gray-600">Cantidad: ${item.cantidad}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-gray-600">${item.precio * item.cantidad} COP</p>
                            <button class="text-red-500 hover:text-red-700 remove-item" data-index="${index}">Eliminar</button>
                        </div>
                    `;
                    cartContent.appendChild(itemElement);
                });

                // Añadir event listener a los botones de eliminar
                document.querySelectorAll('.remove-item').forEach(button => {
                    button.addEventListener('click', function () {
                        const index = this.getAttribute('data-index');
                        cartItems.splice(index, 1);
                        actualizarCarrito();
                    });
                });
            }

            pagarButton.addEventListener('click', () => {
                alert('Ir a pagar');
            });
        });
    </script>
</body>
</html>
