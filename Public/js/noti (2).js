function showNotification() {
    document.getElementById('notification').classList.remove('hidden');
    
    setTimeout(function() {
        closeNotification();
    }, 30000); // Se cierra después de 30 segundos
}

function closeNotification() {
    document.getElementById('notification').classList.add('hidden');
}

// Mostrar el aviso 3 segundos después de cargar la página
window.onload = function() {
    setTimeout(showNotification, 3000);
};
