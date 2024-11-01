<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - Biblioteca</title>
  @vite(['resources/js/app.js'])
  <style>
    .background-gradient {
      background: linear-gradient(135deg, #0d3b66, #f4a261);
    }
  </style>
</head>
<body class="background-gradient text-light d-flex flex-column min-vh-100">

  <!-- Barra de Navegación -->
  <nav class="navbar navbar-expand-lg bg-dark bg-gradient text-light">
    <div class="container-fluid">
      <a class="navbar-brand text-light fw-bold" href="#">Biblioteca Poe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#">Noticia Literaria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Registrar Libro</a>
          </li>       
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contenido Principal -->
  <main class="container mt-5 mb-5 flex-grow-1">
    @yield('contenido')
  </main>

  <!-- Footer -->
  <footer class="bg-secondary text-center text-white py-3 ">    
    <div>Biblioteca Poe - &copy; Todos los derechos reservados {{ strftime('%A %d de %B del %Y') }}</div>
  </footer>

</body>
</html>
