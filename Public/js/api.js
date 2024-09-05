document.addEventListener("DOMContentLoaded", function () {
    const url = 'http://localhost/Saudade_php/Api/GetProductos.php'; // Asegúrate de que esta ruta sea la correcta en localhost

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la red: ' + response.statusText);
            }
            return response.json(); // Parsear el JSON que devuelve el servidor
        })
        .then(data => {
            const productosContainer = document.getElementById('productos');
            productosContainer.innerHTML = ''; // Limpiar el contenedor antes de cargar los productos

            data.forEach(producto => {
                const productoElement = document.createElement('div');
                productoElement.className = 'bg-white p-4 border rounded-lg shadow-lg';

                productoElement.innerHTML = `
                    <img src="../../uploads/${producto.imagen}" alt="${producto.name_producto}" class="w-full h-60 object-cover mb-4 rounded-lg">
                    <h3 class="text-xl font-semibold">${producto.nombre}</h3>
                    <p class="text-gray-600">${producto.descripcion}</p>
                    <p class="text-lg font-bold">$${producto.precio}</p>
                    <p class="text-gray-500 ">Cantidad: ${producto.cantidad}</p>
                `;

                productosContainer.appendChild(productoElement);
            });
        })
        .catch(error => console.error('Error al cargar los productos:', error));
});
