document.addEventListener("DOMContentLoaded", function() {
    const url = 'Api/GetProductos.php'; // Asegúrate de que esta ruta sea correcta

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la red: ' + response.statusText);
            }
            return response.text(); // Cambiado de json() a text() para ver el contenido
        })
        .then(text => {
            console.log('Respuesta del servidor:', text); // Muestra el contenido en bruto
            try {
                const data = JSON.parse(text); // Intenta analizar el texto como JSON
                const productosContainer = document.getElementById('productos');

                data.forEach(producto => {
                    const productoElement = document.createElement('div');
                    productoElement.className = 'bg-white p-4 border rounded-lg shadow-lg';
                    productoElement.innerHTML = `
                        <img src="../uploads/${producto.imagen}" alt="${producto.name_producto}" class="w-full h-32 object-cover mb-4 rounded-lg">
                        <h3 class="text-xl font-semibold">${producto.name_producto}</h3>
                        <p class="text-gray-600">${producto.descripcion}</p>
                        <p class="text-lg font-bold">$${producto.precio}</p>
                        <p class="text-gray-500">Cantidad: ${producto.cantidad}</p>
                    `;
                    productosContainer.appendChild(productoElement);
                });
            } catch (error) {
                console.error('Error al parsear JSON:', error);
            }
        })
        .catch(error => console.error('Error al cargar los productos:', error)); // Captura y muestra errores
});
