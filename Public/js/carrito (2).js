
document.getElementById('compra-button').addEventListener('click', function() {
    const talle = document.getElementById('talle').value;
    const cantidad = document.getElementById('cantidad').value;
    const cartContent = document.getElementById('cart-content');

    const productInfo = `
        <p><strong>Producto:</strong> CAMISETA OVERSIZE NEGRA</p>
        <p><strong>Precio:</strong> $220.000</p>
        <p><strong>Talle:</strong> ${talle}</p>
        <p><strong>Cantidad:</strong> ${cantidad}</p>
    `;

    cartContent.innerHTML = productInfo;
    document.getElementById('cart').classList.add('open');
});

document.getElementById('close-cart').addEventListener('click', function() {
    document.getElementById('cart').classList.remove('open');
});

document.getElementById('cart-icon').addEventListener('click', function() {
    const cart = document.getElementById('cart');
    cart.classList.toggle('open');
});

document.getElementById('pagar-button').addEventListener('click', function() {
    alert('Redirigiendo a la página de pago...');
});
