<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TouristSpot;

class TouristSpotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TouristSpot::all();
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
    public function store(Request $request)
    {
        $spot = TouristSpot::create($request->all());
        return response()->json($spot, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(TouristSpot $touristSpot)
    {
        return $touristSpot;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $touristSpot->update($request->all());
        return response()->json($touristSpot);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $touristSpot->delete();
        return response()->json(['message' => 'Ponto turístico excluído']);
    }
}
