<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

/**
 * Class PacienteController
 * @package App\Http\Controllers
 */
class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::paginate();

        return view('paciente.index', compact('pacientes'))
            ->with('i', (request()->input('page', 1) - 1) * $pacientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paciente = new Paciente();
        return view('paciente.create', compact('paciente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Paciente::$rules);

        $request->validate([
            'mascota' => 'required|string|max:20|alpha',
            'fecha_de_nacimiento' => 'required|date',
            'genero' => 'required|string',
            'alergias' => 'required|string|max:20|alpha',
            'edad' => 'required|integer|max:99',
            'propietario' => 'required|string|alpha',
            'telefono' => 'required|integer|max:99999999',
            'correo' => 'required',
        ]);

        $paciente = Paciente::create($request->all());

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::find($id);

        return view('paciente.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);

        return view('paciente.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Paciente $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        request()->validate(Paciente::$rules);

        $request->validate([
            'mascota' => 'required|string|max:20|alpha',
            'fecha_de_nacimiento' => 'required|date',
            'genero' => 'required|string',
            'alergias' => 'required|string|max:20|alpha',
            'edad' => 'required|integer|max:99',
            'propietario' => 'required|string|alpha',
            'telefono' => 'required|integer|max:99999999',
            'correo' => 'required',
        ]);

        $paciente->update($request->all());

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente editado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id)->delete();

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente eliminado correctamente');
    }
}
