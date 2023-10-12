<?php

namespace App\Http\Controllers\Admin;

use App\Models\EvaluacionOrganizacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EvaluacionOrganizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.recursos-humanos.evaluaciones-organizacion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EvaluacionOrganizacion $evaluacionOrganizacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EvaluacionOrganizacion $evaluacionOrganizacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EvaluacionOrganizacion $evaluacionOrganizacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluacionOrganizacion $evaluacionOrganizacion)
    {
        //
    }
}
