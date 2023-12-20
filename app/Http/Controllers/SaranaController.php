<?php

namespace App\Http\Controllers;

use App\Models\Sarana;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSaranaRequest;
use App\Http\Requests\UpdateSaranaRequest;

class SaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sarana', [
            'title' => 'Semua Sarana',
            'active' => 'sarana',
            'sarana' => Sarana::latest()
                ->filter(request(['search', 'sarana_category']))
                ->paginate(7)
                ->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSaranaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sarana $sarana)
    {
        return view('post', [
            'title' => 'Sarana',
            'active' => 'sarana',
            'sarana' => $sarana,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sarana $sarana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSaranaRequest $request, Sarana $sarana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sarana $sarana)
    {
        //
    }
}
