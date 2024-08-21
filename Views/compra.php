<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link rel="stylesheet" href="../Public/css/style.css">
    <link rel="stylesheet" href="../public/css/landin.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../public/css/whats.css">
    <link rel="stylesheet" href="../public/css/whats2.css">
    <link rel="stylesheet" href="../Public/css/style.css">

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="../public/css/catalogo.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

   
</head>
<body>
<nav id="header" class="w-full flex items-center justify-between px-6 py-4 backdrop-blur-lg">
    <div class="w-full z-20 flex items-center justify-between px-6 py-4 backdrop-blur-lg">
        <!-- Menú hamburguesa (visible en móviles) -->
        <label for="menu-toggle" class="cursor-pointer md:hidden block">
            <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle">
        
        <!-- Menú de navegación -->
        <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
            <nav>
                <ul class="md:flex items-center justify-between text-base text-black pt-4 md:pt-0">
                    <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../Views/inicio.php">Inicio</a></li>
                    <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../Views/quienessomos.php">Quiénes Somos</a></li>
                    <li><a class="inline-block no-underline hover:text-[#9333ea] font-medium text-lg py-2 px-4 lg:-ml-2" href="../Views/catalogo.php">Catalogo</a></li>
                </ul>
            </nav>
        </div>
        
        <!-- Botón del carrito -->
        <div class="order-2 md:order-3 flex items-center justify-end w-full md:w-auto">
            <button id="cart-icon" class="cart-icon mr-4">
                🛒
            </button>
        </div>
    </div>
</nav>


   

    <div class="container mx-auto mt-5">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <img class="w-full" src="../Static/img/sombrero.jpg" alt="Producto">
            </div>
            <div>
                <h1 class="text-2xl font-bold">Camiseta Unisex Oversize Natural Monaco</h1>
                <p class="text-gray-500 mt-2">Camiseta para hombre oversize con estampado en frente y espalda, tela algodón, cuello en tela Rib, silueta amplia, textura lisa, una prenda versátil infaltable en tu closet, úsala con jeans de diferentes estilos, pantalonetas o bermudas.</p>
                <p class="text-3xl font-bold mt-5">$75.000,00</p>
                <div class="mt-5">
                    <label for="size" class="block mb-2">TALLA:</label>
                    <select id="size" class="block w-full border border-gray-300 rounded-md p-2">
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                </div>
                <div class="mt-5">
                    <label for="material" class="block mb-2">Material:</label>
                    <select id="material" class="block w-full border border-gray-300 rounded-md p-2">
                        <option>100% Algodón</option>
                    </select>
                </div>
                <div class="mt-5">
                    <label for="color" class="block mb-2">Color:</label>
                    <select id="color" class="block w-full border border-gray-300 rounded-md p-2">
                        <option>Natural</option>
                    </select>
                </div>
                <div class="mt-5">
                    <label for="quantity" class="block mb-2">Cantidad:</label>
                    <input type="number" id="quantity" class="block w-full border border-gray-300 rounded-md p-2" value="1">
                </div>
                <button id="add-to-cart" class="bg-black text-white w-full py-3 mt-5">AGREGAR AL CARRITO</button>
                <button id="buy-now" class="bg-white border border-black text-black w-full py-3 mt-2">COMPRAR AHORA</button>
                <div class="mt-5">
                    <p><i class="fas fa-shipping-fast"></i> Envíos a toda Colombia</p>
                    <p><i class="fas fa-undo-alt"></i> Devoluciones hasta 30 días</p>
                    <p><i class="fas fa-credit-card"></i> Pago contra-entrega</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar del Carrito -->
    <div id="cart-sidebar" class="fixed right-0 top-0 h-full w-64 bg-white shadow-md transform translate-x-full transition-transform">
        <div class="p-4">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold">Carrito</h2>
                <button id="close-cart" class="text-red-500"><i class="fas fa-times"></i></button>
            </div>
            <div id="cart-items" class="mt-4"></div>
            <button id="proceed-to-checkout" class="bg-black text-white w-full py-2 mt-4">PROCEDER AL PAGO</button>
        </div>
    </div>

    <script>
        const cartSidebar = document.getElementById('cart-sidebar');
        const addToCartButton = document.getElementById('add-to-cart');
        const closeCartButton = document.getElementById('close-cart');
        const cartIconButton = document.getElementById('cart-icon');
        const cartItemsContainer = document.getElementById('cart-items');
        const cart = [];

        addToCartButton.addEventListener('click', () => {
            const size = document.getElementById('size').value;
            const material = document.getElementById('material').value;
            const color = document.getElementById('color').value;
            const quantity = document.getElementById('quantity').value;

            const cartItem = {
                size,
                material,
                color,
                quantity,
                price: 75000
            };

            cart.push(cartItem);
            updateCart();
            openCartSidebar();
        });

        closeCartButton.addEventListener('click', () => {
            closeCartSidebar();
        });

        cartIconButton.addEventListener('click', () => {
            openCartSidebar();
        });

        function updateCart() {
            cartItemsContainer.innerHTML = '';
            cart.forEach((item, index) => {
                const cartItemElement = document.createElement('div');
                cartItemElement.className = 'flex justify-between items-center mb-2';
                cartItemElement.innerHTML = `
                    <div>
                        <p><strong>${item.quantity}x</strong> Camiseta Unisex</p>
                        <p>${item.size} - ${item.color}</p>
                    </div>
                    <div>
                        <p>$${item.price.toLocaleString()}</p>
                        <button class="text-red-500" onclick="removeFromCart(${index})"><i class="fas fa-trash-alt"></i></button>
                    </div>
                `;
                cartItemsContainer.appendChild(cartItemElement);
            });
        }

        function removeFromCart(index) {
            cart.splice(index, 1);
            updateCart();
        }

        function openCartSidebar() {
            cartSidebar.classList.remove('translate-x-full');
        }

        function closeCartSidebar() {
            cartSidebar.classList.add('translate-x-full');
        }
    </script>

            
   <!-- Imagen angel 2 --> 
   <img src="../Static/img/ANGEL SIN FONDO.png" class="angel2">




    








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
    </div><br><br>

    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">


        <!-- Producto Relacionado 1 -->
        <div class="bg-white p-4 rounded shadow">
            <img src="../Static/img/prod6.jpg" alt="Producto 6" class="w-full h-auto">
            <p class="mt-2 text-gray-600">Camiseta bordada</p>
            <p class="font-bold">79,900 COP</p>
        </div>
       
        <!-- Producto Relacionado 2 -->

        <div class="bg-white p-4 rounded shadow">
            <img src="../Static/img/prod5.jpg" alt="Producto 5" class="w-full h-auto">
            <p class="mt-2 text-gray-600">Gafas sol sport</p>
            <p class="font-bold">99,900 COP</p>
        </div>


       
        <!-- Producto Relacionado 3 -->
        


        <div class="bg-white p-4 rounded shadow">
            <img src="../Static/img/prod4.jpg" alt="Producto 4" class="w-full h-auto">
            <p class="mt-2 text-gray-600">Gorra efecto lavado parche</p>
            <p class="font-bold">89,900 COP</p>
        </div>
        <!-- Producto Relacionado 4 -->

        <div class="bg-white p-4 rounded shadow">
            <img src="../Static/img/prod3.jpg" alt="Producto 3" class="w-full h-auto">
            <p class="mt-2 text-gray-600">Gorra efecto lavado</p>
            <p class="font-bold">99,900 COP</p>
        </div>
        
        <!-- Producto Relacionado 5 -->

        <div class="bg-white p-4 rounded shadow">
            <img src="../Static/img/prod2.jpg" alt="Producto 2" class="w-full h-auto">
            <p class="mt-2 text-gray-600">Camiseta manga corta efecto lavado</p>
            <p class="font-bold">99,900 COP</p>
        </div>
       
        <!-- Producto Relacionado 6 -->
        

        <div class="bg-white p-4 rounded shadow">
            <img src="../Static/img/prod1.jpg" alt="Producto 1" class="w-full h-auto">
            <p class="mt-2 text-gray-600">Cazadora algodón print</p>
            <p class="font-bold">249,000 COP</p>
        </div>




        <div class="nav-bottom">
        <div class="popup-whatsapp fadeIn">
            <div class="content-whatsapp -top">
                <button type="button" class="closePopup">
                    <i class="material-icons icon-font-color">X</i>
                </button>
                <p><img src="../static/img/LOGO_SAUDADE.png" width="50"> 
                    ¿Necesitas ayuda en tu compra ? 
                </p>
            </div>
            <div class="content-whatsapp -bottom">
                <input class="whats-input" id="whats-in" type="text" placeholder="Enviar mensaje..." />
                <button class="send-msPopup" id="send-btn" type="button">
                    <i class="material-icons icon-font-color--black">></i>
                </button>
            </div>
        </div>
        <button type="button" id="whats-openPopup" class="whatsapp-button">
            <img src="../Static/img/wasa.png" width="90" alt="">
        </button>
        <div class="circle-anime"></div>
    </div>
    <script src="../Public/js/whastsapp.js"></script>
   
</body>
</html>
