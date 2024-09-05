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
                productoElement.className = 'bg-white rounded-lg shadow-md hover:shadow-lg';

                productoElement.innerHTML = `
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
                        <img src="../../uploads/${producto.imagen}" alt="${producto.name_producto}" class="rounded-t-lg">
                        <div class="p-4"> 
                            <h3 class="text-black text-center font-medium  font-bold">${producto.nombre}</h3>
                            <p class="text-black  font-bold">$${producto.precio}</p>
                            <div class="flex items-center justify-between mt-4">
                                <button class="bg-blue-500 text-white mt-2 px-4 py-2 rounded verMasBtn" data-id="${producto.id}">Ver más</button>
                            </div>
                        </div>
                    </div>
                `;

                productosContainer.appendChild(productoElement);
            });
            const verMasButtons = document.querySelectorAll('.verMasBtn');
            verMasButtons.forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-id');
                window.location.href = `compra?id=${productId}`;
            });
        });
        })
        .catch(error => console.error('Error al cargar los productos:', error));
});

