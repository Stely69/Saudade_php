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
                    <div class="flex space-x-5">
                        <button class="bg-blue-500 text-white mt-2 px-4 py-2 rounded editar" data-id="${producto.id}">Editar</button>
                        <button class="bg-red-500 text-white mt-2 px-4 py-2 rounded eliminar" data-id="${producto.id}">Eliminar</button>
                    </div>
                `;

                productosContainer.appendChild(productoElement);
            });
            
            // Manejo de botones de editar
            const editarButtons = document.querySelectorAll('.editar');
            editarButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const productId = this.getAttribute('data-id');
                    window.location.href = `editor?id=${productId}`; // Redirigir a la página de edición
                });
            });

            // Manejo de botones de eliminar
            const eliminarButtons = document.querySelectorAll('.eliminar');
            eliminarButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const productId = this.getAttribute('data-id');
                    if (confirm("¿Estás seguro de que deseas eliminar este producto?")) {
                        fetch(`eliminarProducto.php?id=${productId}`, { method: 'DELETE' })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Error en la red al eliminar el producto');
                            }
                            // Recargar la página o eliminar el producto del DOM
                            location.reload(); // Recarga la página después de eliminar el producto
                        })
                        .catch(error => console.error('Error al eliminar el producto:', error));
                    }
                });
            });

        })    
        .catch(error => console.error('Error al cargar los productos:', error));
});
