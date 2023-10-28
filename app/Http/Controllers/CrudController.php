<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use App\Http\Requests\StorecrudRequest;
use App\Http\Requests\UpdatecrudRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectRespon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tampil = Crud::all();
        return view('user.index', compact('tampil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View ('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecrudRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(crud $crud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(crud $crud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecrudRequest $request, crud $crud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(crud $crud)
    {
        //
    }
}
