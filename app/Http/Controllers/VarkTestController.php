<?php

namespace App\Http\Controllers;

use App\Models\varkTest;
use Illuminate\Http\Request;

class VarkTestController extends Controller
{



    public function store(Request $request)
    {
        $nuevoTest = new varkTest();
        $nuevoTest->correo = $request->get('correo');
        $nuevoTest->puntuacionV = $request->get('puntuacionV');
        $nuevoTest->puntuacionA = $request->get('puntuacionA');
        $nuevoTest->puntuacionR = $request->get('puntuacionR');
        $nuevoTest->puntuacionK = $request->get('puntuacionK');
        $nuevoTest->diagnostico = $request->get('diagnostico');

        $nuevoTest->save();
        return response()->json(['success' => true]);
    }


    public function show(Request $request)
    {
        $test = varkTest::with('usuario')->where('correo', $request->get('correo'))->get();
        return response()->json($test);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\varkTest  $varkTest
     * @return \Illuminate\Http\Response
     */
    public function edit(varkTest $varkTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\varkTest  $varkTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, varkTest $varkTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\varkTest  $varkTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(varkTest $varkTest)
    {
        //
    }
}
