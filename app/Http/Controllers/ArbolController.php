<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArbolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Apaterno=[
            ['nombre' => 'Isidro Pacheco Chuc'],
            ['nombre' => 'Santos Antonia Piña Coh'],
                     

        ];

        $Amaterno=[
            ['nombre' => 'Eleuterio Uc Canche'],
            ['nombre' => 'Patricia Cahuich Pech'],
                     

        ];

         $padres=[
            ['nombre' => 'Alfonso Pacheco Piña'],
            ['nombre' => 'Maria Angelica Uc Cahuich'],
                     

        ];

        $hijos=[
            ['nombre' => 'Itzel Sarahi Pacheco Uc'],
            ['nombre' => 'Henry Alfonso Pacheco Uc'],
           ['nombre' => 'Najely Judith Pacheco Uc'],

                     

        ];
        
        return view('arbol', compact('Apaterno', 'Amaterno','padres','hijos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
