<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portada - Repaso Laravel</title>
  @vite(['resources/js/app.js'])

  <style>
    .welcome-container {      
      background-color: #fff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-secondary bg-gradient">

  <div class="welcome-container text-center bg-gradient bg-light border border-success border-4">
    <h1 class="display-4 text-success">Programación Web</h1>
    <p class="lead">Alumno: <strong>Juan Luis Mosqueda Orta</strong></p>
    <p>Proyecto: <em>"practicaRepasos"</em></p>
    <a href="{{ route('rutarepaso1') }}" class="btn btn-success btn-lg mt-4">REPASO 1</a>
  </div>

</body>
</html>
