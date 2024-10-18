var images = [
    '../static/img/modelo2.jpeg',
    '../static/img/modelo1.jpeg',
    '../static/img/modelo3.jpeg',
  // Agrega más rutas de imágenes según sea necesario
];

var currentImageIndex = 0;

setInterval(function () {
    // Obtiene la imagen del carrusel
    var carouselImage = document.getElementById('modelo');

    // Cambia la opacidad de la imagen a 0
    carouselImage.style.opacity = 0;

    // Espera 1 segundo (el tiempo de la transición) antes de cambiar la imagen
    setTimeout(function () {
        // Incrementa el índice de la imagen actual
        currentImageIndex++;

        // Si el índice de la imagen actual es mayor que el número de imágenes, vuelve a la primera imagen
        if (currentImageIndex >= images.length) {
            currentImageIndex = 0;
        }

        // Cambia la imagen mostrada en el carrusel
        carouselImage.src = images[currentImageIndex];

        // Cambia la opacidad de la imagen a 1
        carouselImage.style.opacity = 1;
    }, 1000);
}, 3000);  // Cambia la imagen cada 4 segundos