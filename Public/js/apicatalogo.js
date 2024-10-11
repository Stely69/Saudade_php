// Escucha el evento 'DOMContentLoaded' para asegurar que el DOM esté completamente cargado antes de ejecutar el código
document.addEventListener("DOMContentLoaded", function () {
    // Define la URL de la API que se utilizará para obtener los productos
    const url = 'http://localhost/Saudade_php/Api/GetProductos.php'; // Asegúrate de que esta ruta sea la correcta en localhost

    // Realiza una solicitud fetch a la URL especificada
    fetch(url)
        .then(response => {
            // Verifica si la respuesta es válida
            if (!response.ok) {
                throw new Error('Error en la red: ' + response.statusText); // Lanza un error si la respuesta no es OK
            }
            return response.json(); // Parsear el JSON que devuelve el servidor
        })
        .then(data => {
            // Obtiene el contenedor donde se mostrarán los productos
            const productosContainer = document.getElementById('productos');
            productosContainer.innerHTML = ''; // Limpiar el contenedor antes de cargar los productos

            // Recorre cada producto devuelto por la API
            data.forEach(producto => {
                // Crea un nuevo elemento div para cada producto
                const productoElement = document.createElement('div');
                productoElement.className = 'bg-white rounded-lg shadow-md hover:shadow-lg';

                // Establece el contenido HTML del elemento del producto
                productoElement.innerHTML = `
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg">
                        <img src="../../uploads/${producto.imagen}" alt="${producto.name_producto}" class="rounded-t-lg">
                        <div class="p-4"> 
                            <h3 class="text-black text-center font-medium font-bold">${producto.nombre}</h3>
                            <p class="text-black font-bold">$${producto.precio}</p>
                            <div class="flex items-center justify-between mt-4">
                                <button class="bg-blue-500 text-white mt-2 px-4 py-2 rounded verMasBtn" data-id="${producto.id}">Ver más</button>
                            </div>
                        </div>
                    </div>
                `;

                // Agrega el elemento del producto al contenedor de productos
                productosContainer.appendChild(productoElement);
            });

            // Selecciona todos los botones "Ver más"
            const verMasButtons = document.querySelectorAll('.verMasBtn');
            verMasButtons.forEach(button => {
                // Agrega un evento 'click' a cada botón
                button.addEventListener('click', function() {
                    const productId = this.getAttribute('data-id'); // Obtiene el ID del producto del atributo data-id
                    window.location.href = `compra?id=${productId}`; // Redirige a la página de compra con el ID del producto
                });
            });
        })
        .catch(error => console.error('Error al cargar los productos:', error)); // Manejo de errores si falla la carga
});
