<?php
    // Incluir el controlador de productos para poder acceder a sus métodos
    include_once '../Controller/ProductController.php';
    // Verificar si se ha recibido un ID de producto a través de la URL
    if (isset($_GET['id'])) {
        $productId = $_GET['id']; // Obtener el ID del producto
        $productController = new ProductController();// Instanciar el controlador de productos
        $producto = $productController->getProductById($productId); // Obtener los datos del producto por su ID
        $availableTallas = $productController->getTallasAvailable();
        $productTallas = $productController->getTallasProductId($productId);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
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

<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Editar Producto</h2>

        <form action="../ProductController/updateProduct" method="POST" enctype="multipart/form-data">
            <!-- Producto ID -->
            <div class="mb-4 text-center">
                <span class="text-gray-600 font-semibold">ID: <?php echo $producto['id']; ?></span>
            </div>

            <!-- Nombre del producto -->
            <div class="mb-4">
                <label for="name_producto" class="block text-gray-700 font-bold mb-2">Nombre del producto:</label>
                <input type="text" id="name_producto" name="name_producto" value="<?= $producto['nombre'] ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <!-- Descripción del producto -->
            <div class="mb-4">
                <label for="descripcion" class="block text-gray-700 font-bold mb-2">Descripción:</label>
                <textarea id="descripcion" name="descripcion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required><?= $producto['descripcion'] ?></textarea>
            </div>

            <!-- Precio -->
            <div class="mb-4">
                <label for="precio" class="block text-gray-700 font-bold mb-2">Precio:</label>
                <input type="number" id="precio" name="precio" step="0.01" value="<?= $producto['precio'] ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <!-- Cantidad -->
            <div class="mb-4">
                <label for="cantidad" class="block text-gray-700 font-bold mb-2">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" value="<?= $producto['cantidad'] ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <!-- Imagen -->
            <div class="mb-4">
                <label for="imagen" class="block text-gray-700 font-bold mb-2">Cambiar imagen (opcional):</label>
                <input type="file" id="imagen" name="imagen" accept="image/*" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <img src="../<?= $producto['imagen'] ?>" alt="<?= $producto['nombre'] ?>" class="mt-4 w-48 h-48 object-cover mx-auto">
            </div>

            <!-- Tallas disponibles -->
            <div class="mb-4">
                <label for="tallas" class="block text-white font-bold mb-2">Tallas Disponibles:</label>
                <select id="tallas" name="tallas[]" multiple required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <?php foreach ($availableTallas as $talla): ?>
                    <option value="<?= $talla['id'] ?>" <?= in_array($talla['id'], $productTallas) ? 'selected' : '' ?>><?= $talla['talla'] ?></option>
                <?php endforeach; ?>
                </select>
            </div>

            <!-- Botones de acción -->
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Guardar cambios
                </button>
                <a href="Vendedordashboard" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>


</body>
</html>