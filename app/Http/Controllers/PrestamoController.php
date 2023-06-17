<?php

namespace App\Http\Controllers;
use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $prestamos = Prestamo::all();

        return view('prestamos.index',compact('prestamos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prestamos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prestamo = new Prestamo();
        $prestamo->monto=$request->monto;
        $prestamo->idclientes=$request->idclientes;
        $prestamo->cuota=$request->cuota;
        $prestamo->tasa=$request->tasa;
        $prestamo->save();
        return redirect('/prestamos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prestamo= Prestamo::find($id);
        return view('prestamos.show',compact('prestamo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prestamo= Prestamo::find($id);
        return view('prestamos.edit',compact('prestamo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $prestamo = Prestamo::find($request->idprestamos);
        $prestamo->monto=$request->monto;
        $prestamo->idclientes=$request->idclientes;
        $prestamo->cuota=$request->cuota;
        $prestamo->tasa=$request->tasa;
        $prestamo->save();

        return redirect('prestamos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prestamo = Prestamo::find($id);
        $prestamo->delete();

        return redirect('/prestamos');
    }
}
