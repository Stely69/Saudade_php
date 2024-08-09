<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Editor De Saudade</title>
</head>
<body>
    <nav id="header" class="barra">
        <div class="w-full flex items-center justify-between z-50 fixed px-6 py-4 backdrop-blur-lg ">
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
                                href="../Views/inicioseller.php">Inicio</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2"
                                href="../Views/quienessomos.php">Quiénes Somos</a></li>

                        <li><a class="inline-block no-underline hover:text-[#9333ea] font-medium text-lg py-2 px-4 lg:-ml-2"
                                href="../Views/catalogo.php">Catalogo</a></li>

                    </ul>
                </nav>
            </div>

            <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
                <div class="auth flex items-center w-full md:w-full">
                    
                
                                          
                </div>
            </div>
        </div>
    </nav>
    
    <aside class="bg-gradient-to-br from-gray-800 to-gray-900 z-50 -translate-x-80 fixed inset-0 my-20 ml-2 h-[calc(100vh-32px)] w-72 rounded-xl transition-transform duration-300 xl:translate-x-0">
        <div class="relative border-b border-white/20">
        <a class="flex items-center gap-4 py-6 px-8" href="#/">
            <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-white">Editor de Saudade</h6>
        </a>
        <button class="middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30 absolute right-0 top-0 grid rounded-br-none rounded-tl-none xl:hidden" type="button">
            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
            </span>
        </button>
        </div>
        <div class="m-4">
        <ul class="mb-4 flex flex-col gap-1">
            <li>
            <a aria-current="page" class="active" href="#">
                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                    <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z"></path>
                    <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z"></path>
                </svg>
                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Catalogo</p>
                </button>
            </a>
            </li>
            <li>
            <a class="" href="#">
                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
                </svg>
                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Perfil</p>
                </button>
            </a>
            </li>
            <li>
            <a class="" href="#">
                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                    <path d="M15.75 2.25H21a.75.75 0 01.75.75v5.25a.75.75 0 01-1.5 0V4.81l-5.72 5.72a.75.75 0 01-1.06 0L11.75 9.06l-7.47 7.47a.75.75 0 11-1.06-1.06l8-8a.75.75 0 011.06 0l2.72 2.72L18.94 3.75H15.75a.75.75 0 010-1.5z"></path>
                </svg>
                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Ventas</p>
                </button>
            </a>
            </li>
        </ul>
        </div>
    </aside>

    <div class="pt-20 md:pl-80">
        <div class="">
            <button id="agregarProductoBtn" class="bg-blue-200 p-4 rounded-2xl w-52 flex flex-row items-center justify-center space-x-2">
                <i style="font-size:24px" class="fa">&#xf196;</i>
                <p>Agregar Producto</p>
            </button>
        </div>

        <div id="formularioAgregar" class="hidden mt-5 bg-white p-5 rounded-xl shadow-md">
            <h3 class="text-lg font-semibold mb-4">Añadir Nueva Camiseta</h3>
            <form id="nuevoProductoForm">
                <div class="mb-4">
                    <label class="block text-gray-700">Nombre:</label>
                    <input type="text" id="nombreProducto" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Precio:</label>
                    <input type="number" id="precioProducto" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Imagen:</label>
                    <input type="file" id="imagenProducto" class="w-full p-2 border border-gray-300 rounded-md" accept="image/*" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Guardar</button>
            </form>
        </div>
    </div>

    <div id="productos" class="grid grid-cols-1 md:grid-cols-3 gap-5 bg-white md:pl-80 pt-20 md:px-40">
        <!-- Productos existentes -->
        <div class="bg-whites rounded-lg shadow-md hover:shadow-lg">
            <img src="../static/img/camiseta2.png" alt="Camisa Nike" class="rounded-t-lg">
            <div class="p-4">
                <h3 class="text-black text-center font-medium">Camisa</h3>
                <p class="text-black">$45.000</p>
                <div class="flex items-center justify-between mt-4">
                    <a href="../views/compra.php" class="text-blue-500 hover:underline">Editar</a>
                </div>
            </div>
        </div>
        <div class="bg-whites rounded-lg shadow-md hover:shadow-lg">
            <img src="../static/img/camiseta1.png" alt="Camisa Adidas" class="rounded-t-lg">
            <div class="p-4">
                <h3 class="text-black text-center font-medium">Camiseta Adidas</h3>
                <p class="text-black">$50.000</p>
                <div class="flex items-center justify-between mt-4">
                    <a href="../views/compra.php" class="text-blue-500 hover:underline">Editar</a>
                </div>
            </div>
        </div>
        <!-- Otros productos existentes -->
    </div>

    <script>
        // Mostrar el formulario al hacer clic en "Agregar Producto"
        document.getElementById('agregarProductoBtn').addEventListener('click', function() {
            document.getElementById('formularioAgregar').classList.toggle('hidden');
        });

        // Manejar la subida del nuevo producto
        document.getElementById('nuevoProductoForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Obtener los valores del formulario
            const nombre = document.getElementById('nombreProducto').value;
            const precio = document.getElementById('precioProducto').value;
            const imagenInput = document.getElementById('imagenProducto');
            const imagen = URL.createObjectURL(imagenInput.files[0]);

            // Crear un nuevo div de producto
            const nuevoProducto = document.createElement('div');
            nuevoProducto.className = 'bg-whites rounded-lg shadow-md hover:shadow-lg';

            nuevoProducto.innerHTML = `
                <img src="${imagen}" alt="${nombre}" class="rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-black text-center font-medium">${nombre}</h3>
                    <p class="text-black">$${precio}</p>
                    <div class="flex items-center justify-between mt-4">
                        <a href="../views/compra.php" class="text-blue-500 hover:underline">Editar</a>
                    </div>
                </div>
            `;

            // Agregar el nuevo producto a la lista de productos
            document.getElementById('productos').appendChild(nuevoProducto);

            // Ocultar el formulario y limpiar los campos
            document.getElementById('formularioAgregar').classList.add('hidden');
            document.getElementById('nuevoProductoForm').reset();
        });
    </script>
</body>
</html>
