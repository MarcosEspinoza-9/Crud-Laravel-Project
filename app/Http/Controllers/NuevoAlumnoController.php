<?php

namespace App\Http\Controllers;

use App\Models\NuevoAlumno;
use Illuminate\Http\Request;

/**
 * Class NuevoAlumnoController
 * @package App\Http\Controllers
 */
class NuevoAlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nuevoAlumnos = NuevoAlumno::paginate();

        return view('nuevo-alumno.index', compact('nuevoAlumnos'))
            ->with('i', (request()->input('page', 1) - 1) * $nuevoAlumnos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nuevoAlumno = new NuevoAlumno();
        return view('nuevo-alumno.create', compact('nuevoAlumno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(NuevoAlumno::$rules);

        $nuevoAlumno = NuevoAlumno::create($request->all());

        return redirect()->route('nuevo-alumnos.index')
            ->with('success', 'NuevoAlumno created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nuevoAlumno = NuevoAlumno::find($id);

        return view('nuevo-alumno.show', compact('nuevoAlumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nuevoAlumno = NuevoAlumno::find($id);

        return view('nuevo-alumno.edit', compact('nuevoAlumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  NuevoAlumno $nuevoAlumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NuevoAlumno $nuevoAlumno)
    {
        request()->validate(NuevoAlumno::$rules);

        $nuevoAlumno->update($request->all());

        return redirect()->route('nuevo-alumnos.index')
            ->with('success', 'NuevoAlumno updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $nuevoAlumno = NuevoAlumno::find($id)->delete();

        return redirect()->route('nuevo-alumnos.index')
            ->with('success', 'NuevoAlumno deleted successfully');
    }
}
