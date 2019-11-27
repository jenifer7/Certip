<?php

namespace App\Http\Controllers;

use App\Employee;
use App\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * Listado de empleados registrados
     */
    public function index()
    {
        $emple = Employee::all();
        return view('employee.index', compact('emple'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * Formulario para crear un empleado nuevo
     */
    public function create()
    {
        $empleados = User::all();
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * Guarda el registro en la base de datos
     */
    public function store(Request $request)
    {
        $emple = Employee::create($request->all());
        return redirect('employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emple = Employee::find($id);
        return view('employee.show', compact('emple'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emple = Employee::find($id);
        return view('employee.edit', compact('emple'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $emple = Employee::find($id);
        $emple->update($request->all());
        return view('employee.show', compact('emple'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emple = Employee::find($id);
        $emple->delete();

        return redirect('employees');
    }
}
