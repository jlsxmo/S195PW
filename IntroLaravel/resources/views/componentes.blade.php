@extends('layouts.plantilla1')
  @section('titulo','Componentes BLADE')

  @section('contenido')

  <x-Card encabezado="Hola S195" titulo="Título 1" textoBoton="Guardar">
    Prueba Slot para contenido
  </x-Card>
  <x-Card encabezado="Holaaaaaa" titulo="Título 2" textoBoton="No Guardar">
    Holaaaa prross!!!
  </x-Card>

  <x-Alert tipo="success">
    Alert verde
  </x-Alert>
  <x-Alert tipo="danger">
    Alert rojo
  </x-Alert>

  @endsection