<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class clienteController extends Controller
{

    public function home()
    {
        return view('inicio');
    }

    /**
     * Display a listing of the resource.
     * Muestra la consulta del CRUD.
     */
    public function index()
    {
        $consultaClientes = DB::table('clientes')->get();
        return view('clientes', compact('consultaClientes'));
    }

    /**
     * Show the form for creating a new resource.
     * Para abrir el formulario
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     * La usamos para ejecutar el insert
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            'nombre'=> $request->input('txtnombre'),
            'apellido'=> $request->input('txtapellido'),
            'correo'=> $request->input('txtcorreo'),
            'telefono'=> $request->input('txttelefono'),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

         //redirección con mensaje en sesión
         $usuario = $request->input('txtNombre');
         session()->flash('exito', 'El usuario ha sido registrado con éxito'.$usuario);
 
         return to_route('rutaformulario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * Para abrir el formulario de edición
     */
    public function edit(string $id)
    {
        //Obtenemos los datos del cliente específico
        $cliente = DB::table('clientes')->where('id', $id)->first();

        //Retornamos al formulario de edición con los datos del cliente
        return view('formulario', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     * Actualiza los datos del cliente
     */
    public function update(validadorCliente $request, string $id)
    {
        //Actualizamos los datos del cliente
        DB::table('clientes')->where('id', $id)->update([
            'nombre'=> $request->input('txtnombre'),
            'apellido'=> $request->input('txtapellido'),
            'correo'=> $request->input('txtcorreo'),
            'telefono'=> $request->input('txttelefono'),
            'updated_at'=> Carbon::now(),
        ]);

        //Mensaje de confirmación de actualización
        session()->flash('exito', 'El cliente ha sido actualizado con éxito');

        //Redirección a la vista del formulario
        return to_route('rutaformulario');
    }

    /**
     * Remove the specified resource from storage.
     * Elimina un cliente en específico
     */
    public function destroy(string $id)    
    {
        // Eliminar el cliente por ID
        DB::table('clientes')->where('id', $id)->delete();

        // Agregar mensaje de confirmación
        session()->flash('exito', 'El cliente ha sido eliminado con éxito.');

        // Mensaje de confirmación
        return to_route('rutaclientes');
    }    
}
