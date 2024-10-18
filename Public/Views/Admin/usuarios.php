
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script> 
    <title>Saudade</title>
</head>
<body>
    <?php
        require_once '../Controller/CheckRole.php';
        checkRole('admin');
    ?>

    
    <!-- Navegación principal -->
    <nav id="header" class="barra">
        <div class="w-full flex items-center justify-between px-6 py-4 backdrop-blur-lg">
            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle"> <!-- Checkbox para el menú móvil -->

            <!-- Menú de navegación -->
            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-black pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../../Public/inicio">Inicio</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../QuieneSomos/quienessomos">Quiénes Somos</a></li>
                        <li><a class="inline-block no-underline hover:text-[#9333ea] font-medium text-lg py-2 px-4 lg:-ml-2" href="../Catalogo/catalogo">Catalogo</a></li>
                        <?php // Iniciar sesión si aún no ha sido iniciada

                                 include_once '../Models/RolesModel.php'; // Incluir modelo para manejo de roles

                                 $role = null;
                                 if (isset($_SESSION['role_id'])) { // Verificar si el rol está establecido en la sesión
                                    $rolesModel = new RolesModel(); // Instanciar modelo de roles
                                    $roleData = $rolesModel->getRoleById($_SESSION['role_id']); // Obtener datos del rol por ID
                                    $role = $roleData['role_name']; // Asignar el nombre del rol a una variable
                                 }
                        ?>
                           <?php if ($role === 'admin' ): ?>
                              <li><a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="../Admin/admin">Admin Dashboard</a></li>
                           <?php elseif ($role === 'vendedor'): ?>
                              <li><a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="Vendedor/vendedordashboard">Vendedor Dashboard</a></li>
                            <?php endif; ?>
                    </ul>
                </nav>
            </div>

            <!-- Contenido de navegación adicional -->
            <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
                <div class="auth flex items-center w-full md:w-full">
                    <button class=""><a style='font-size:24px;color:black' class='fas '>&#xf07a;</a></button> <!-- Icono de carrito -->

                    <?php if (isset($_SESSION['username'])): ?>
                        <!-- Mensaje de bienvenida si el usuario está autenticado -->
                        <span class="inline-block no-underline font-medium text-black text-lg px-4">Hola, <?php echo $_SESSION['username']; ?>!</span>
                        <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="../LogoutAction">Cerrar sesión</a>
                    <?php else: ?>
                        <!-- Enlaces de autenticación si el usuario no está autenticado -->
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF] px-4" href="inicio_sesion">Iniciar sesión</a>
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF]" href="registro">Registrarse</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="text-left py-3 px-4">ID</th>
                <th class="text-left py-3 px-4">Usuario</th>
                <th class="text-left py-3 px-4">Email</th>
                <th class="text-left py-3 px-4">Rol Actual</th>
                <th class="text-left py-3 px-4">Fecha de Asignación</th>
                <th class="text-left py-3 px-4">Acciones</th>
            </tr>
        </thead>
        <tbody id="usersTableBody">
            <!-- Aquí se llenarán los usuarios desde JavaScript -->
        </tbody>
    </table>

    <script src="../js/apiuser.js"></script>                 
</body>
</html>