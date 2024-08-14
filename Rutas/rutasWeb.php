<?php

    use Controller\QuienesControlador;
    use Controller\InicioControlador;
    use Controller\CatalogoControlador;
    use Controller\LoginControlador;
    use Libreria\Enrutador;

    Enrutador::get("/",[InicioControlador::class,"inicio"]);
    //Login
    Enrutador::get("/Login/inicio_sesion",[LoginControlador::class,"login"]);
    Enrutador::get("/Login/registro",[LoginControlador::class,"registro"]);
    Enrutador::post("/Login/LoginAction",[LoginControlador::class,"loginaction"]);
    Enrutador::post("/Login/RegisterAction",[LoginControlador::class,"registeraction"]);
    Enrutador::get("/Login/LogoutAction",[LoginControlador::class,"logout"]);
    //Catalogo
    Enrutador::get("/Catalogo/catalogo",[CatalogoControlador::class,"Catalogo"]);
    Enrutador::get("/Catalogo/compra",[CatalogoControlador::class,"Compra"]);
    //Quienes somos
    Enrutador::get("/QuieneSomos/quienessomos",[QuienesControlador::class,"Quienes"]);

    Enrutador::obtenerRuta();