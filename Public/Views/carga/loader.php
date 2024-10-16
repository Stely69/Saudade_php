<?php
// Pantalla de carga
header("Refresh: 3; url=/inicio"); // Cambia "/inicio" por la ruta que necesites
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>SAUDAGE</title>
  <link rel="stylesheet" href="../static/css/carga.css">
  <style>
    /* Opcional: añadir una animación para el desvanecimiento */
    .fade-out {
      animation: fadeOut 1s forwards;
    }

    @keyframes fadeOut {
      from { opacity: 1; }
      to { opacity: 0; }
    }
  </style>
</head>
<body>
  <section id="global">
    <div id="top" class="mask">
      <div class="plane"></div>
    </div>
    <div id="middle" class="mask">
      <div class="plane"></div>
    </div>
    <div id="bottom" class="mask">
      <div class="plane"></div>
    </div>
    <font size=""><p>SAUDADE</p></font>
  </section>
  
  <script>
    setTimeout(function(){
        // Añade la clase de desvanecimiento
        document.body.classList.add('fade-out');

        // Espera a que termine la animación y redirige
        setTimeout(function() {
            window.location.href = 'inicio'; // Cambia a la ruta que necesitas
        }, 1000); // Espera 1 segundo para la animación
    }, 2000); // Espera 2 segundos antes de iniciar la animación
</script>



  <style>
    body {
    background: #000000;
}
  
#global {
    width: 70px;
    margin: auto;
    margin-top: 500px;
    position: relative;
    cursor: pointer;
    height: 60px;
    justify-content: center;
}
  
.mask {
    position: absolute;
    border-radius: 2px;
    overflow: hidden;
    -webkit-perspective: 1000;
            perspective: 1000;
    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
}
  
.plane {
    background: #af69cd;
    width: 400%;
    height: 100%;
    position: absolute;
    -webkit-transform: translate3d(0px, 0, 0);
            transform: translate3d(0px, 0, 0);
    
    z-index: 100;
    -webkit-perspective: 1000;
            perspective: 1000;
    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
}
  
.animation {
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
  
#top .plane {
    z-index: 2000;
    -webkit-animation: trans1 1.3s ease-in infinite  0s backwards;
            animation: trans1 1.3s ease-in infinite  0s backwards;
}
  
#middle .plane {
    -webkit-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
    background: #af69cd;
    -webkit-animation: trans2 1.3s linear infinite  0.3s  backwards;
     animation: trans2 1.3s linear infinite  0.3s  backwards;
}
  
#bottom .plane {
    z-index: 2000;
    -webkit-animation: trans3 1.3s ease-out infinite  0.7s backwards;
    animation: trans3 1.3s ease-out infinite  0.7s backwards;
}
  
#top {
    width: 53px;
    height: 20px;
    left: 20px;
    -webkit-transform: skew(-15deg, 0);
            transform: skew(-15deg, 0);
    z-index: 100;
}
  
#middle {
    width: 33px;
    height: 20px;
    left: 20px;
    top: 15px;
    -webkit-transform: skew(-15deg, 40deg);
            transform: skew(-15deg, 40deg);
}
  
#bottom {
    width: 53px;
    height: 20px;
    top: 30px;
    -webkit-transform: skew(-15deg, 0);
            transform: skew(-15deg, 0);
}
  
p {
    color: #fff;
    position: absolute;
    left: -3px;
    top: 45px;
    font-family: Arial;
    text-align: center;
    font-size: 10px;
}
  
@-webkit-keyframes trans1 {
    from {
      -webkit-transform: translate3d(53px, 0, 0);
              transform: translate3d(53px, 0, 0);
    }
    to {
      -webkit-transform: translate3d(-250px, 0, 0);
              transform: translate3d(-250px, 0, 0);
    }
}
  
@keyframes trans1 {
    from {
      -webkit-transform: translate3d(53px, 0, 0);
              transform: translate3d(53px, 0, 0);
    }
    to {
      -webkit-transform: translate3d(-250px, 0, 0);
              transform: translate3d(-250px, 0, 0);
    }
}
@-webkit-keyframes trans2 {
    from {
      -webkit-transform: translate3d(-160px, 0, 0);
              transform: translate3d(-160px, 0, 0);
    }
    to {
      -webkit-transform: translate3d(53px, 0, 0);
              transform: translate3d(53px, 0, 0);
    }
}
@keyframes trans2 {
    from {
      -webkit-transform: translate3d(-160px, 0, 0);
              transform: translate3d(-160px, 0, 0);
    }
    to {
      -webkit-transform: translate3d(53px, 0, 0);
              transform: translate3d(53px, 0, 0);
    }
}
@-webkit-keyframes trans3 {
    from {
      -webkit-transform: translate3d(53px, 0, 0);
              transform: translate3d(53px, 0, 0);
    }
    to {
      -webkit-transform: translate3d(-220px, 0, 0);
              transform: translate3d(-220px, 0, 0);
    }
}
@keyframes trans3 {
    from {
      -webkit-transform: translate3d(53px, 0, 0);
              transform: translate3d(53px, 0, 0);
    }
    to {
      -webkit-transform: translate3d(-220px, 0, 0);
              transform: translate3d(-220px, 0, 0);
    }
}
@-webkit-keyframes animColor {
    from {
      background: red;
    }
    25% {
      background: yellow;
    }
    50% {
      background: green;
    }
    75% {
      background: brown;
    }
    to {
      background: blue;
    }
}
@keyframes animColor {
    from {
      background: red;
    }
    25% {
      background: yellow;
    }
    50% {
      background: green;
    }
    75% {
      background: brown;
    }
    to {
      background: blue;
    }
}
  
body {
    transition: opacity 1s ease-out;
    opacity: 1;
}
  
  body.fade-out {
    opacity: 0;
} 
  </style>
</body>
</html>