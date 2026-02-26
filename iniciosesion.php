<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/output.css" rel="stylesheet">
    <script src="./js/tema.js"></script>
    <title>Inicio de sesión - Liconsa</title>
</head>
<body class="bg-app-bg text-app-text transition-colors duration-300">
  
<div class="flex min-h-screen flex-col justify-center items-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Logo" class="mx-auto h-12 w-auto" />
    <h2 class="mt-10 text-center text-3xl font-bold tracking-tight"> 
        Inicio de sesión
    </h2>
  </div>

<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-app-card p-8 rounded-xl shadow-xl border border-app-border">
    <form action="procesar_login.php" method="POST" class="space-y-6">
      <div>
        <label for="email" class="block text-sm font-medium">Usuario</label>
        <div class="mt-2">
          <input id="email" type="email" name="email" required 
            class="block w-full rounded-md bg-app-bg border border-app-border px-3 py-2 text-app-text outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium">Contrasena</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-indigo-500 hover:text-indigo-400">¿Olvidó su contraseña?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="password" type="password" name="password" required 
            class="block w-full rounded-md bg-app-bg border border-app-border px-3 py-2 text-app-text outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-colors">
          Ingresar
        </button>
      </div>
    </form>
  </div>
</div>

<button onclick="toggleDarkMode()" class="fixed bottom-6 right-6 p-3 bg-indigo-600 text-white rounded-full shadow-2xl hover:scale-110 transition-transform z-50">
    <svg id="sun-icon" class="hidden w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707m12.728 12.728L5.121 5.121M19 12a7 7 0 11-14 0 7 7 0 0114 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
    <svg id="moon-icon" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</button>

</body>
</html>