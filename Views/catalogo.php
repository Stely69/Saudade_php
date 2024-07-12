<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Camisas</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                
                <a class="  inline-block  font-medium no-underline text-black text-lg  hover:text-[#6F00FF] px-4"href="../Views/inicio_sesion.php"> Iniciar sesion </a>
                <a class="  inline-block  font-medium no-underline text-black text-lg hover:text-[#6F00FF]"href="../Views/registro.php" > Registrarse</a>
                                      
            </div>
        </div>
    </div>
  </nav>
    
  <div class="container mx-auto max-w-7xl p-10">
        <div class="flex flex-col items-center mb-5">
            <h1 class="text-3xl font-bold">Catálogo de Camisas</h1>
            <p class="text-gray-500">Encuentra la camisa perfecta para ti.</p>
        </div>

        <div class="flex flex-col md:flex-row justify-between mb-5">
            <div class="w-full md:w-1/3 mb-3">
                <label for="filtro-precio" class="block text-gray-700">Precio</label>
                <select id="filtro-precio" class="form-select w-full rounded-md border border-gray-300 focus:border-blue-500">
                    <option value="">Cualquier precio</option>
                    <option value="menos-50000">Menos de $50.000</option>
                    <option value="50000-100000">$50.000 - $100.000</option>
                    <option value="100000-150000">$100.000 - $150.000</option>
                    </select>
            </div>

            <div class="w-full md:w-1/3 mb-3">
                <label for="filtro-color" class="block text-gray-700">Color</label>
                <select id="filtro-color" class="form-select w-full rounded-md border border-gray-300 focus:border-blue-500">
                    <option value="">Cualquier color</option>
                    <option value="blanco">Blanco</option>
                    <option value="negro">Negro</option>
                    <option value="gris">Gris</option>
                    </select>
            </div>
        </div>


        

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 bg-white">
            <div class="bg-whites rounded-lg shadow-md hover:shadow-lg">
                <img src="../static/img/camiseta2.png" alt="Camisa Nike" class="rounded-t-lg">
                <div class="p-4 ">
                    <h3 class="text-black text-center font-medium">Camisa</h3>
                    <p class="text-black">$45.000</p>
                    <div class="flex items-center justify-between mt-4">
                        <a href="{{ url_for('compra') }}" class="text-blue-500 hover:underline">Ver detalles</a>
                    </div>
                </div>
            </div>





            <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
                <img src="../static/img/camiseta3.png" alt="Camisa Adidas" class="rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-black text-center font-medium">Camisa </h3>
                    <p class="text-black">$60.000</p>
                    <div class="flex items-center justify-between mt-4">
                        <a href="{{ url_for('compra') }}" class="text-blue-500 hover:underline">Ver detalles</a>
                   </div>
                </div>
            </div>
            <div class="bg-white  rounded-lg shadow-md hover:shadow-lg">
              <img src="../static/img/camiseta3.png" alt="Camisa Adidas" class="rounded-t-lg">
              <div class="p-4">
                  <h3 class="text-black text-center font-medium">Camisa </h3>
                  <p class="text-black">$60.000</p>
                  <div class="flex items-center justify-between mt-4">
                      <a href="{{ url_for('compra') }}" class="text-blue-500 hover:underline">Ver detalles</a>
                 </div>
              </div>
          </div>
          <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
            <img src="../static/img/camiseta2.png" alt="Camisa Adidas" class="rounded-t-lg">
            <div class="p-4">
                <h3 class="text-black text-center font-medium">Camisa </h3>
                <p class="text-black">$60.000</p>
                <div class="flex items-center justify-between mt-4">
                    <a href="{{ url_for('compra') }}" class="text-blue-500 hover:underline">Ver detalles</a>
               </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
          <img src="../static/img/camiseta1.png" alt="Camisa Adidas" class="rounded-t-lg">
          <div class="p-4">
              <h3 class="text-black text-center font-medium">Camisa</h3>
              <p class="text-black">$60.000</p>
              <div class="flex items-center justify-between mt-4">
                  <a href="{{ url_for('compra') }}" class="text-blue-500 hover:underline">Ver detalles</a>
             </div>
          </div>
      </div>
      <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
        <img src="../static/img/camiseta1.png" alt="Camisa Adidas" class="rounded-t-lg">
        <div class="p-4">
            <h3 class="text-black text-center font-medium">Camisa</h3>
            <p class="text-black">$60.000</p>
            <div class="flex items-center justify-between mt-4">
                <a href="{{ url_for('compra') }}" class="text-blue-500 hover:underline">Ver detalles</a>
           </div>
        </div>
    </div>
</body>
<!--<footer class="relative bg-[#0E0047] pt-8 pb-6">
  <div class="container mx-auto px-4">
      <div class="flex flex-wrap text-left lg:text-left">
          <div class="w-full lg:w-6/12 px-4">
              <h4 class="text-3xl fonat-semibold text-white">Saudade</h4>
              <h5 class="text-lg mt-0 mb-2 text-white">
                  Tienda Virtual
              </h5>
              <div class="mt-6 lg:mb-0 mb-6">
                  <button
                      class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                      type="button">
                      <i class="fab fa-twitter"></i></button><button
                      class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                      type="button">
                      <i class="fab fa-facebook-square"></i></button><button
                      class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                      type="button">
                      <i class="fab fa-dribbble"></i></button><button
                      class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                      type="button">
                      <i class="fab fa-github"></i>
                  </button>
              </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
              <div class="flex flex-wrap items-top mb-6">
                  <div class="w-full lg:w-4/12 px-4 ml-auto">
                      <span class="block uppercase text-white text-sm font-semibold mb-2">Acerca de Nosotros</span>
                      <ul class="list-unstyled">
                          <li>
                              <a class="text-white hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                  href="#">Contacto</a>
                          </li>
                          <li>
                              <a class="text-white hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                  href="#">Blog</a>
                          </li>
                          <li>
                              <a class="text-white hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                  href="#">Villeta Cundinamarca </a>
                          </li>
                          <li>
                              <a class="text-white hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                  href="#">Free
                                  Products</a>
                          </li>
                      </ul>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                      <span class="block uppercase text-white text-sm font-semibold mb-2">Enlaces Rapidos</span>
                      <ul class="list-unstyled">
                          <li>
                              <a class="text-white hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                  href="#">Mi cuenta License</a>
                          </li>
                          <li>
                              <a class="text-white hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                  href="#">Home</a>
                          </li>
                          <li>
                              <a class="text-white hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                  href="#">Terminos y condiciones</a>
                          </li>
                          <li>
                              <a class="text-white hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                  href="#">Politicas de privacidad </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>

      <hr class="my-6 border-blueGray-300">
      <div class="flex flex-wrap items-center md:justify-between justify-center">
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">
              <div class="text-sm text-white font-semibold py-1">
                  Copyright © <span id="get-current-year">2021</span><a href="#"
                      class="text-white hover:text-gray-500" target="_blank"> Saudade
                      <a href="https://www.creative-tim.com?ref=njs-profile"
                          class="text-blueGray-500 hover:text-blueGray-800"></a>.
              </div>
          </div>
      </div>
  </div>
</footer>-->

</html>
