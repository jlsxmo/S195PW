<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Repaso 1</title>
  
  @vite(['resources/js/app.js'])
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center">Convertidor de Unidades</h2>
    <form action="{{ route('convertidor') }}" method="POST" class="mt-4">
      @csrf
      <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad:</label>
        <input type="number" step="any" class="form-control" id="cantidad" name="cantidad" required>
      </div>
      <div class="mb-3">
        <label for="unidad" class="form-label">Conversión:</label>
        <select class="form-select" id="unidad" name="unidad" required>
          <option value="MB-GB">MB a GB</option>
          <option value="GB-MB">GB a MB</option>
          <option value="GB-TB">GB a TB</option>
          <option value="TB-GB">TB a GB</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success">Convertir</button>
    </form>

    @if(session('resultado'))
      <div class="alert alert-info mt-4">
        <strong>Resultado:</strong> {{ session('resultado') }}
      </div>
    @endif
  </div>
</body>
</html>
