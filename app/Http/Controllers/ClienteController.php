<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Prestamo;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes =Cliente::all();
        return view('clientes.index',compact('clientes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombrecliente=$request->nombrecliente;
        $cliente->apellidocliente=$request->apellidocliente;
        $cliente->dpicliente=$request->dpicliente;
        $cliente->sexocliente=$request->sexocliente;
        $cliente->save();
        return redirect('/clientes');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente= Cliente::find($id);
        return view('clientes.show',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $cliente = Cliente::find($request->idclientes);
        $cliente->nombrecliente=$request->nombrecliente;
        $cliente->apellidocliente=$request->apellidocliente;
        $cliente->dpicliente=$request->dpicliente;
        $cliente->sexocliente=$request->sexocliente;
        $cliente->save();

        return redirect('clientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect('/clientes');
    }
}
