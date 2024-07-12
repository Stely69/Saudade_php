<!DOCTYPE html>
<html lang="es">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Producto</title>
<link rel="stylesheet" href="../Public/css/style.css">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
 <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

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
    <br>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #ffffff;
            }
            .container {
                display: grid;
                grid-template-columns: 1fr 1fr;
                max-width: 1200px;
                margin: auto;
                padding: 20px;
                background-color: white;
            }
            .images {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
            .images img {
                width: 100%;
                height: auto;
            }
            .main-image img {
                width: 100%;
                height: auto;
            }
            .details {
                padding-left: 20px;
            }
            .details h1 {
                font-size: 24px;
                margin-bottom: 20px;
            }
            .price {
                font-size: 24px;
                color: #333;
                margin-bottom: 20px;
            }
            .sizes {
                margin-bottom: 20px;
            }
            .sizes label {
                margin-right: 10px;
            }
            .quantity {
                margin-bottom: 20px;
            }
            .add-to-cart {
                background-color: black;
                color: white;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
            }
            .description {
                margin-top: 20px;
            }
            .thumbnails {
                display: flex;
                gap: 10px;
            }
            .thumbnails img {
                cursor: pointer;
                width: 100px;
                height: auto;
            }
        </style>

        <div class="container">
            <div class="images">
                <div class="main-image">
                    <img src="../static/img/CAMISETA.png" alt="Camiseta grande">
                </div>
                <div class="thumbnails">
                    <img src="../static/img/modelo1.jpeg" alt="Camiseta miniatura 1">
                    <img src="../static/img/modelo2.jpeg" alt="Camiseta miniatura 2">
                    <img src="../static/img/modelo3.jpeg" alt="Camiseta miniatura 2">
                </div>
            </div>
            
      <div class="product-page">
        <div class="product-info">
            <h1>CAMISETA OVERSIZE NEGRA</h1>
            <p class="price">$220.000</p>
            <label for="talle">TALLA:</label>
            <select id="talle" class="input-field">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
            </select>
            <label for="cantidad">CANTIDAD:</label>
            <input type="number" id="cantidad" class="input-field" value="1" min="1">
            <button id="compra-button">PROCEDER A LA COMPRA</button>
            <p class="details">
                Camiseta 100% algodón 200 GSM.<br>
                Boxy fit.<br>
                Estampado frontal y posterior en puff.<br>
                Todas las prendas son unisex.<br>
                Hecho en Villeta.
            </p>
        </div>
        <div class="product-image">
            
        </div>
        <div class="cart" id="cart">
            <h2>Carrito de Compras <button id="close-cart">&times;</button></h2>
            <div id="cart-content"></div>
            <button id="pagar-button">PAGAR AHORA</button>
        </div>
    </div>
    <style>


      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #ffffff;
    }
    
    header {
        background-color: black;
        color: white;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .header-content h1 {
        margin: 0;
    }
    
    .cart-icon {
        background: none;
        border: none;
        color: white;
        font-size: 24px;
        cursor: pointer;
    }
    
    .product-page {
        display: flex;
        justify-content: space-between;
        padding: 20px;
    }
    
    .product-info {
        max-width: 600px;
        background-color: #ffffff;
        padding: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        width: 550px;
    }
    
    .product-info h1 {
        margin-top: 0;
    }
    
    .price {
        font-size: 24px;
        color: #000;
    }
    
    .input-field {
        display: block;
        width: 100%;
        margin-bottom: 10px;
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    
    button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: black;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin-bottom: 20px;
    }
    
    button:hover {
        background-color: #333;
    }
    
    .details {
        font-size: 14px;
        color: #555;
    }
    
    .product-image {
        max-width: 400px;
        text-align: center;
    }
    
    .product-image img {
        width: 100%;
        height: auto;
        border: 1px solid #ccc;
    }
    
    .thumbnails {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }
    
    .thumbnails img {
        width: 80px;
        height: auto;
        margin: 0 5px;
        border: 1px solid #ccc;
        cursor: pointer;
    }
    
    .cart {
        position: fixed;
        top: 0;
        right: -320px;
        width: 300px;
        height: 100%;
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 20px;
        box-shadow: -2px 0 8px rgba(0, 0, 0, 0.1);
        transition: right 0.3s;
        border-radius: 8px 0 0 8px;
        z-index: 1000;
    }
    
    .cart.open {
        right: 0;
    }
    
    .cart h2 {
        margin-top: 0;
        font-size: 20px;
        border-bottom: 1px solid #ccc;
        padding-bottom: 10px;
        margin-bottom: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .cart h2 button {
        background: none;
        border: none;
        font-size: 24px;
        color: red;
        cursor: pointer;
    }
    
    #cart-content p {
        font-size: 16px;
        margin: 10px 0;
    }
    
    #pagar-button {
        background-color: #007bff;
        color: white;
        font-size: 16px;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    #pagar-button:hover {
        background-color: #0056b3;
    }
    
    </style>

    <script>

      document.getElementById('compra-button').addEventListener('click', function() {
        const talle = document.getElementById('talle').value;
        const cantidad = document.getElementById('cantidad').value;
        const cartContent = document.getElementById('cart-content');
    
        const productInfo = `
            <p><strong>Producto:</strong> CAMISETA OVERSIZE NEGRA</p>
            <p><strong>Precio:</strong> $220.000</p>
            <p><strong>Talle:</strong> ${talle}</p>
            <p><strong>Cantidad:</strong> ${cantidad}</p>
        `;
    
        cartContent.innerHTML = productInfo;
        document.getElementById('cart').classList.add('open');
    });
    
    document.getElementById('close-cart').addEventListener('click', function() {
        document.getElementById('cart').classList.remove('open');
    });
    
    document.getElementById('cart-icon').addEventListener('click', function() {
        const cart = document.getElementById('cart');
        cart.classList.toggle('open');
    });
    
    document.getElementById('pagar-button').addEventListener('click', function() {
        alert('Redirigiendo a la página de pago...');
    });
    
    </script>

        </div>

        <section class="related-products">
            <h2 id="rlt">PRODUCTOS RELACIONADOS</h2><br><br>
          
            <div class="product-grid">
              <div class="product">
                <a href="#">
                  <img src="../static/img/camiseta1.png" alt="Camiseta Oldfashioned Crudo">
                  <div class="product-info">
                    <h3>CAMISETA OLDFASHIONED CRUDO</h3>
                    <span class="price">$220.000</span>
                  </div>
                </a>
              </div>
          
              <div class="product">
                <a href="#">
                  <img src="../static/img/camiseta2.png" alt="Camiseta Memento Blanca">
                  <div class="product-info">
                    <h3>CAMISETA MEMENTO BLANCA</h3>
                    <span class="price">$220.000</span>
                  </div>
                </a>
              </div>
          
              <div class="product">
                <a href="#">
                  <img src="../static/img/camiseta3.png" alt="Camiseta Libertad">
                  <div class="product-info">
                    <h3>CAMISETA LIBERTAD</h3>
                    <span class="price">$180.000</span>
                  </div>
                </a>
              </div>
          
              <div class="product">
                <a href="#">
                  <img src="../static/img/camiseta1.png" alt="Camiseta Unchained Negra">
                  <div class="product-info">
                    <h3>CAMISETA UNCHAINED NEGRA</h3>
                    <span class="price">$180.000</span>
                  </div>
                </a>
              </div>
            </div>
          </section>

          
         <style>
        .related-products {
  margin-top: 50px;
  text-align: center; /* Added this line to center the text */
}

.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}

.product {
  text-align: center;
}

.product a {
  display: block;
}

.product img {
  width: 100%;
  height: 250px;
  object-fit: cover;
}

.product-info {
  margin-top: 20px;
}

.product-info h3 {
  font-size: 18px;
  margin-bottom: 10px;
}

.product-info .price {
  font-size: 16px;
  color: #333;
}

.related-products h2 {
  font-family: 'Times New Roman', Times, serif; /* Change the font family to Arial or any other desired font */
}

.size{
    margin-right: 300px;
   
}


 </style>

</body>
</html>
