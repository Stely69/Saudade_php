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

    <?php
        require_once '../Controller/CheckRole.php';
        require_once '../Controller/ProductController.php';
        checkRole('vendedor');
        $producto = new ProductController();
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
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../">Inicio</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../QuieneSomos/quienessomos">Quiénes Somos</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../Catalogo/catalogo">Catalogo</a></li>

                        <?php
                            
                            include_once '../Models/RolesModel.php';

                            $role = null;
                            if (isset($_SESSION['role_id'])) {
                                $rolesModel = new RolesModel();
                                $roleData = $rolesModel->getRoleById($_SESSION['role_id']);
                                $role = $roleData['role_name'];
                            }

                        ?>

                        <?php if ($role === 'admin' ): ?>
                            <li><a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="Admin/admin">Admin Dashboard</a></li>
                        <?php elseif ($role === 'vendedor'): ?>
                            <li><a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="../Vendedor/vendedordashboard">Vendedor Dashboard</a></li>
                        <?php endif; ?>

                        </ul>
                    </nav>
                </div>

                <!-- Contenido adicional del menú -->
                <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
                    <div class="auth flex items-center w-full md:w-full">
                        <button><a style='font-size:24px;color:black' class='fas'>&#xf07a;</a></button>             

                        <?php if (isset($_SESSION['user_id'])): ?>
                            <span class="inline-block no-underline font-medium text-black text-lg px-4">Hola, <?php echo $_SESSION['username']; ?>!</span>
                            <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="../Login/LogoutAction">Cerrar Sesión </a>
                        <?php else: ?>
                            <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="Login/inicio_sesion">Iniciar Sesión</a>
                            <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="Login/registro">Registrarse</a>
                        <?php endif; ?>

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


    <div class="pt-10 md:pl-80">
        <div class="">
            <button id="agregarProductoBtn" class="bg-blue-200 p-4 rounded-2xl w-52 flex flex-row items-center justify-center space-x-2">
                <i style="font-size:24px" class="fa">&#xf196;</i>
                <p>Agregar Producto</p>
            </button>
        </div>

    
   
    <!-- Modal para agregar/editar producto -->
    <div id="productoModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg p-6 w-3/4 md:w-1/2">
        <h2 id="modalTitle" class="text-2xl mb-4">Agregar Producto</h2>
        <form action="VendedorAction" method="post" id="productoForm" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700">Nombre:</label>
                <input type="text" id="nombre" name="name" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="descripcion" class="block text-gray-700">Descripción:</label>
                <textarea id="descripcion" name="descripcion" class="w-full p-2 border rounded" required></textarea>
            </div>
            <div class="mb-4">
                <label for="cantidad">Cantidad:</label>
                <input class="w-full p-2 border rounded" type="number" id="cantidad" name="cantidad" required>
            </div>
            <div class="mb-4">
                <label for="tallas" class="block text-sm font-medium text-gray-700">Tallas Disponibles:</label>
                <select id="tallas" name="tallas[]" multiple required
                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="1">S</option>
                    <option value="2">M</option>
                    <option value="3">L</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="precio" class="block text-gray-700">Precio:</label>
                <input type="number" id="precio" name="precio" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="imagen" class="block text-gray-700">Imagen:</label>
                <input type="file" id="imagen" name="imagen" accept="image/*" class="w-full p-2 border rounded">
            </div>
            <div class="flex justify-end">
                <button type="button" id="cancelarBtn" class="bg-red-500 text-white px-4 py-2 rounded mr-2">Cancelar</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
            </div>
        </form>

    </div>
</div>

<div id="successAlert" class="fixed top-20 right-4 bg-green-500 text-white p-4 rounded-lg shadow-lg hidden">
            <?php if(isset($_GET['exito'])):?>
                <p  id="successMessage"><?php echo $_GET['exito']; ?></p>
            <?php endif; ?>
</div>

<div id="errorAlert" class="fixed top-20 right-4 bg-red-500 text-white p-4 rounded-lg shadow-lg hidden">
            <?php if(isset($_GET['error'])):?>
                <p  id="errorMessage"><?php echo $_GET['error']; ?></p>
            <?php endif; ?>
</div>

<div id="productos" class="grid grid-cols-1 md:grid-cols-3 gap-5 bg-white md:pl-80 pt-20 md:px-40">
    <!-- Productos existentes y dinámicos -->
   
</div>

<!-- Modal para editar producto -->
<div id="editModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold mb-4">Editar Producto</h2>
        
        <form id="editForm">
            <input type="hidden" id="editProductoId" name="productoId">
            
            <div class="mb-4">
                <label for="editNombre" class="block text-gray-700">Nombre del producto</label>
                <input type="text" id="editNombre" name="nombre" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="editDescripcion" class="block text-gray-700">Descripción</label>
                <textarea id="editDescripcion" name="descripcion" class="w-full p-2 border rounded"></textarea>
            </div>

            <div class="mb-4">
                <label for="editPrecio" class="block text-gray-700">Precio</label>
                <input type="number" id="editPrecio" name="precio" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="editCantidad" class="block text-gray-700">Cantidad</label>
                <input type="number" id="editCantidad" name="cantidad" class="w-full p-2 border rounded">
            </div>

            <div class="flex justify-end">
                <button type="button" id="closeEditModal" class="bg-red-500 text-white px-4 py-2 rounded mr-2">Cancelar</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal para eliminar producto -->
<div id="deleteModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold mb-4">¿Estás seguro de eliminar este producto?</h2>
        <p id="deleteProductoName" class="mb-4"></p>

        <div class="flex justify-end">
            <button type="button" id="closeDeleteModal" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">Cancelar</button>
            <button type="button" id="confirmDelete" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
        </div>
    </div>
</div>


<script>

document.addEventListener("DOMContentLoaded", function() {
    const agregarProductoBtn = document.getElementById('agregarProductoBtn');
    const modalTitle = document.getElementById('modalTitle');
    const productoForm = document.getElementById('productoForm');
    const productoModal = document.getElementById('productoModal');
    const cancelarBtn = document.getElementById('cancelarBtn');

    agregarProductoBtn.addEventListener("click", function () {
        editIndex = null;
        modalTitle.textContent = "Agregar Producto";
        productoForm.reset();
        productoModal.classList.remove("hidden");
    });

    cancelarBtn.addEventListener("click", function () {
        productoModal.classList.add("hidden");
    });
});

</script>




<script>
    function showAlert(type, message) {
        console.log("showAlert called with type:", type, "and message:", message); // Agrega esta línea
        const successAlert = document.getElementById('successAlert');
        const errorAlert = document.getElementById('errorAlert');
        const successMessage = document.getElementById('successMessage');
        const errorMessage = document.getElementById('errorMessage');

        successAlert.classList.add('hidden');
        errorAlert.classList.add('hidden');

        if (type === 'success') {
            successMessage.textContent = message;
            successAlert.classList.remove('hidden');
        } else if (type === 'error') {
            errorMessage.textContent = message;
            errorAlert.classList.remove('hidden');
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        const urlParams = new URLSearchParams(window.location.search);
        const success = urlParams.get('exito');
        const error = urlParams.get('error');

        if (success) {
            showAlert('success', success);
        } else if (error) {
            showAlert('error', error);
        }
    });
</script>
<script src="../../Public/js/apieditor.js"></script>
<!---->
</body>
</html>