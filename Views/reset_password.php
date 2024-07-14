<!-- views/reset_password.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Restablecer Contraseña</title>
    <!-- Añadir Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6 text-center">Restablecer Contraseña</h1>
        <?php if (isset($_GET['token'])): ?>
            <form action="../public/reset_password_action.php" method="post">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token']); ?>">
                <div class="mb-4">
                    <label for="new_password" class="block text-gray-700 font-bold mb-2">Nueva Contraseña</label>
                    <input type="password" name="new_password" placeholder="Nueva Contraseña" required
                           class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:border-blue-500">
                </div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                    Restablecer Contraseña
                </button>
            </form>
        <?php else: ?>
            <p class="text-red-500">El token no es válido o ha expirado.</p>
        <?php endif; ?>
    </div>
</body>
</html>
