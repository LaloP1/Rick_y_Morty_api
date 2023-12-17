<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class apiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //cantidad de elementos por pagina
        $elementos = 9;
        //dice en que pagina inicia la api
        $page = request()->input('page', 1);

        $respuesta = Http::get("https://rickandmortyapi.com/api/character");

        if($respuesta->successful()){
            $data = $respuesta->json();
            $lista = $data['results'];
            // dd($lista);

            return view('rick_morty.index', compact('lista'));
        }

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
