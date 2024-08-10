<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('search');
        $ageFrom = $request->input('age_from');
        $ageTo = $request->input('age_to');
        $puesto = $request->input('puesto');

        $crud = crud::query();

        if ($query) {
            $crud->where('nombre', 'like', "%$query%")
                 ->orWhere('puesto', 'like', "%$query%")
                 ->orWhere('mail', 'like', "%$query%");
        }

        if ($ageFrom) {
            $crud->where('edad', '>=', $ageFrom);
        }

        if ($ageTo) {
            $crud->where('edad', '<=', $ageTo);
        }

        if ($puesto) {
            $crud->where('puesto', $puesto);
        }

        $crud = $crud->paginate(10);

        // Obtener valores únicos de 'puesto'
        $puestos = crud::select('puesto')->distinct()->pluck('puesto');

        return view('crud.index', compact('crud', 'query', 'ageFrom', 'ageTo', 'puesto', 'puestos'));
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required|string',
            'edad' => 'required|integer',
            'puesto' => 'required|string',
            'mail' => 'required|string',
        ]);

        // Crea un nuevo registro utilizando los datos del formulario
        crud::create($request->only(['nombre', 'edad', 'puesto', 'mail']));

        // Redirige a la lista de registros
        return redirect()->route('crud.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $crud = crud::findOrFail($id);
        return view('crud.show', compact('crud'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $crud = crud::findOrFail($id);
    return view('crud.edit', compact('crud'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string',
            'edad' => 'required|integer',
            'puesto' => 'required|string',
            'mail' => 'required|string',
        ]);

        $crud = crud::findOrFail($id);

        $crud->update($request->all());

        return redirect()->route('crud.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crud = crud::findOrFail($id);
        $crud->delete(); // Esto realiza un borrado suave
        return redirect()->route('crud.index')->with('success', 'Registro eliminado exitosamente.');
    }

}
