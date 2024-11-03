<?php
// Pantalla de carga
header("Refresh: 3; url=/inicio"); // Cambia "/inicio" por la ruta que necesites
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>SAUDADE</title>
  <link rel="stylesheet" href="../static/css/carga.css">
  <style>
    /* Animación de rotación horizontal */
    @keyframes rotateHorizontal {
      from {
        transform: rotateY(0deg);
      }
      to {
        transform: rotateY(360deg);
      }
    }

    /* Estilos de pantalla de carga */
    body {
      background-color: #000000;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      overflow: hidden;
      transition: opacity 1s ease-out;
      opacity: 1;
    }

    /* Clase para aplicar el desvanecimiento al finalizar la carga */
    body.fade-out {
      opacity: 0;
    }

    /* Estilos del logo */
    #logo {
      width: 350px; /* Ajusta el tamaño del logo */
      animation: rotateHorizontal 2s linear infinite;
    }

    /* Estilo del texto "SAUDADE" */
    #logo-text {
      color: #fff;
      font-size: 1.2rem;
      font-family: Arial, sans-serif;
      margin-top: 10px;
      text-align: center;
    }
  </style>
</head>
<body>
  <!-- Logo y texto de Saudade -->
  <div>
    <img id="logo" src="../public/img/LOGO_SAUDADE.png" alt="Logo Saudade">
  </div>

  <script>
    setTimeout(function() {
        // Aplica el desvanecimiento
        document.body.classList.add('fade-out');

        // Redirige tras la animación de desvanecimiento
        setTimeout(function() {
            window.location.href = 'inicio'; // Cambia a la ruta que necesitas
        }, 1000); // Tiempo de espera para completar la animación
    }, 2000); // Tiempo antes de iniciar la animación de desvanecimiento
  </script>
</body>
</html>
