@extends('layouts.plantilla1')
@section('titulo','Clientes')

@section('contenido')

@if (session('exito'))
  <x-Alert tipo="success">{{ session('exito') }}</x-Alert>
@endif

@session ('exito')
  <script>
   Swal.fire({
    title: "Respuesta del servidor",
    text: '{{ $value }}',
    icon: "success"
   });
  </script>
@endsession

{{-- Inicia tarjetaCliente --}}
<div class="container mt-5 col-md-8">
  @foreach ($consultaClientes as $cliente)
   <div class="card text-justify font-monospace mt-3">
    <div class="card-header fs-5 text-primary">
      {{ $cliente->nombre }}
    </div>

    <div class="card-body">
      <h5 class="fw-bold">{{ $cliente->correo }}</h5>
      <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
    </div>

    <div class="card-footer text-muted">
      <a href="{{ route('editar', $cliente->id) }}" class="btn btn-warning btn-sm">Actualizar</a>

      {{-- Botón para abrir el modal --}}
      <button 
       type="button" 
       class="btn btn-danger btn-sm"
       onclick="abrirModal('{{ route('eliminar', $cliente->id) }}', '{{ $cliente->nombre }}')">
       Eliminar
      </button>
    </div>
   </div>
  @endforeach
</div>

{{-- Modal de confirmación --}}
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
   <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar eliminación</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
    </div>
    <div class="modal-body">
      <p id="modalBodyText">¿Está seguro de que desea eliminar este cliente?</p>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      <form id="deleteForm" method="POST">
       @csrf
       @method('DELETE')
       <button type="submit" class="btn btn-danger">Eliminar</button>
      </form>
    </div>
   </div>
  </div>
</div>
@endsection

{{-- Script para manejar el modal --}}
<script>
  function abrirModal(actionUrl, clienteNombre) {
   // Actualiza el texto del modal
   document.getElementById('modalBodyText').innerText = `¿Está seguro de que desea eliminar al cliente ${clienteNombre}?`;

   // Actualiza la acción del formulario
   document.getElementById('deleteForm').action = actionUrl;

   // Muestra el modal
   const confirmModal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
   confirmModal.show();
  }
</script>
