<?php

    use Controller\QuienesControlador;
    use Controller\InicioControlador;
    use Controller\CatalogoControlador;
    use Controller\LoginControlador;
    use Controller\AdminController;
    use Libreria\Enrutador;

    // Rutas para la página de inicio
    Enrutador::get("/", [InicioControlador::class, "inicio"]);

    // Rutas de Login
    Enrutador::get("/Login/inicio_sesion", [LoginControlador::class, "login"]); // Mostrar formulario de inicio de sesión
    Enrutador::get("/Login/registro", [LoginControlador::class, "registro"]); // Mostrar formulario de registro
    Enrutador::post("/Login/LoginAction", [LoginControlador::class, "loginaction"]); // Acción para iniciar sesión
    Enrutador::post("/Login/RegisterAction", [LoginControlador::class, "registeraction"]); // Acción para registrar usuario
    Enrutador::get("/Login/LogoutAction", [LoginControlador::class, "logout"]); // Acción para cerrar sesión

    // Rutas para el catálogo
    Enrutador::get("/Catalogo/catalogo", [CatalogoControlador::class, "Catalogo"]); // Mostrar catálogo de productos
    Enrutador::get("/Catalogo/compra/", [CatalogoControlador::class, "Compra"]); // Mostrar vista de compra

    // Rutas para "Quiénes somos"
    Enrutador::get("/QuieneSomos/quienessomos", [QuienesControlador::class, "Quienes"]); // Información sobre la empresa

    // Rutas para el administrador
    Enrutador::get("/Admin/admin", [AdminController::class, "Admin"]); // Panel del administrador

    // Rutas para el vendedor
    Enrutador::get("/Vendedor/EliminarAction", [AdminController::class, "eliminar"]); // Editor de productos para vendedores
    Enrutador::get("/Vendedor/vendedordashboard", [AdminController::class, "Vendedor"]); // Panel del vendedor
    Enrutador::post("/Vendedor/VendedorAction", [AdminController::class, "vendedoraction"]); // Acción para manejar acciones del vendedor
    Enrutador::post("/Vendedor/EditorAction", [AdminController::class, "editor"]); // Acción para manejar acciones del vendedor

    Enrutador::get("/Perfil/perfil", [LoginControlador::class, "perfil"]); // Acción para cerrar sesión
    // Obtener y procesar la ruta solicitada
    Enrutador::obtenerRuta();
