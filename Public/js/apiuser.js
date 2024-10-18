document.addEventListener("DOMContentLoaded", function () {
    const url = 'http://localhost/Saudade_php/Api/GetUser.php'; // Ruta para obtener usuarios

    // Cargar usuarios
    fetch(url)
    .then(response => {
        if (!response.ok) {
            throw new Error('Error en la red: ' + response.statusText);
        }
        return response.json(); // Cambia a .json() ya que ahora sabemos que devuelve JSON
    })
    .then(data => {
       // console.log("Respuesta del servidor:", data); // Verificar qué responde el servidor

        const usersTableBody = document.getElementById('usersTableBody'); // Asegúrate de que el ID sea correcto
        usersTableBody.innerHTML = ''; // Limpiar el contenedor antes de cargar los usuarios

        data.forEach(usuario => {
            const usuarioElement = document.createElement('tr');
            usuarioElement.innerHTML = `
                <td>${usuario.id}</td>
                <td>${usuario.username}</td>
                <td>${usuario.email}</td>
                <td>${usuario.role_name}</td>
                <td>${usuario.fecha_creacion || 'N/A'}</td> <!-- Asegúrate de que este campo exista en tu JSON -->
                <td>
                    <button class="editar" data-id="${usuario.id}">Editar</button>
                    <button class="eliminar" data-id="${usuario.id}">Eliminar</button>
                </td>
            `;
            usersTableBody.appendChild(usuarioElement);
        });

        // Agregar eventos a los botones de "Editar" y "Eliminar"
        const editarButtons = document.querySelectorAll('.editar');
        editarButtons.forEach(button => {
            button.addEventListener('click', function() {
                const userId = this.getAttribute('data-id');
                window.location.href = `editarUsuario.php?id=${userId}`;
            });
        });

        const eliminarButtons = document.querySelectorAll('.eliminar');
        eliminarButtons.forEach(button => {
            button.addEventListener('click', function() {
                const userId = this.getAttribute('data-id');
                if (confirm("¿Estás seguro de que deseas eliminar este usuario?")) {
                    fetch(`eliminarUsuario.php?id=${userId}`, { method: 'DELETE' })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Error al eliminar el usuario');
                        }
                        location.reload(); // Recargar la página después de eliminar
                    })
                    .catch(error => console.error('Error al eliminar el usuario:', error));
                }
            });
        });
    })
    .catch(error => console.error('Error en la solicitud:', error));
});
