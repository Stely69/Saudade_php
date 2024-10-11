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
                            <li><a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="../Vendedor/editor">Vendedor Dashboard</a></li>
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
</body>
</html>