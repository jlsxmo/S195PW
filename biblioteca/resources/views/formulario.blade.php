@extends('layouts.plantilla1')

@section('titulo', 'Registrar Libro')

@section('contenido')

<!-- Mostrar mensaje con Alertify -->
@if (session('mensaje'))
    <script>
        alertify.set('notifier', 'position', 'top-center');
        alertify.success("{{ session('mensaje') }}");
    </script>
@endif

<h1 class="text-center mb-3">Registrar Libro</h1>
<div class="col-md-5 p-4 rounded bg-dark bg-gradient shadow-lg container d-flex justify-content-center">
<form action="{{ route('procesar') }}" method="POST">
    @csrf() <!-- Token CSRF necesario para las solicitudes POST en Laravel -->
    <div class="mb-3 mt-3 row justify-content-center">
      <label for="isbn" class="col-sm-4 col-form-label">ISBN</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="isbn" required pattern="\d{13}" placeholder="9783161484100">
      </div>
      @if ($errors->has('isbn'))
        <small class="text-warning text-center mt-2">{{ $errors->first('isbn') }}</small>
      @endif
    </div>
    <div class="mb-3 row justify-content-center">
      <label for="titulo" class="col-sm-4 col-form-label">Título</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="titulo" required placeholder="La Metamorfosis" max=150>
      </div>
      @if ($errors->has('titulo'))
        <small class="text-warning text-center mt-2">{{ $errors->first('titulo') }}</small>
      @endif
    </div>
    <div class="mb-3 row justify-content-center">
      <label for="autor" class="col-sm-4 col-form-label">Autor</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="autor" name="autor" required placeholder="Franz Kafka">
      </div>
      @if ($errors->has('autor'))
        <small class="text-warning text-center mt-2">{{ $errors->first('autor') }}</small>
      @endif
    </div>
    <div class="mb-3 row justify-content-center">
      <label for="paginas" class="col-sm-4 col-form-label">Páginas</label>
      <div class="col-sm-7">
        <input type="number" class="form-control" id="paginas" name="paginas" required placeholder="120" min="1">
      </div>
      @if ($errors->has('paginas'))
        <small class="text-warning text-center mt-2">{{ $errors->first('paginas') }}</small>
      @endif
    </div>
    <div class="mb-3 row justify-content-center">
      <label for="anio" class="col-sm-4 col-form-label">Año</label>
      <div class="col-sm-7">
        <input type="number" class="form-control" id="anio" name="anio" required placeholder="1915" min="1000" max="2024">
      </div>
      @if ($errors->has('anio'))
        <small class="text-warning text-center mt-2">{{ $errors->first('anio') }}</small>
      @endif
    </div>
    <div class="mb-3 row justify-content-center">
      <label for="editorial" class="col-sm-4 col-form-label">Editorial</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="editorial" name="editorial" required placeholder="Santillana">
      </div>
      @if ($errors->has('editorial'))
        <small class="text-warning text-center mt-2">{{ $errors->first('editorial') }}</small>
      @endif
    </div>
    <div class="mb-3 row justify-content-center">
      <label for="email_editorial" class="col-sm-4 col-form-label">Email Editorial</label>
      <div class="col-sm-7 mt-2">
        <input type="email" class="form-control" id="email_editorial" name="email_editorial" required placeholder="editorial@email.mx">
      </div>
      @if ($errors->has('email_editorial'))
        <small class="text-warning text-center mt-2">{{ $errors->first('email_editorial') }}</small>
      @endif
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn-success">Registrar Libro</button>
    </div>
</form>
</div>
@endsection
