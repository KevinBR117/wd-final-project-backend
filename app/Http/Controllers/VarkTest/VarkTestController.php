<?php

namespace App\Http\Controllers\VarkTest;

use App\Http\Controllers\Controller;
use App\Models\VarkTest\varkTest;
use Illuminate\Http\Request;

class VarkTestController extends Controller
{

    public function store(Request $request)
    {
        $newVarkTest = new varkTest();
        $newVarkTest->correo = $request->get('email');
        $newVarkTest->puntuacionV = $request->get('visualPunctuation');
        $newVarkTest->puntuacionA = $request->get('auralPunctuation');
        $newVarkTest->puntuacionR = $request->get('readPunctuation');
        $newVarkTest->puntuacionK = $request->get('kinestheticPunctuation');
        $newVarkTest->diagnostico = $request->get('varkTypeObtained	');

        $newVarkTest->save();
        return response()->json(['success' => true]);
    }


    public function show(Request $request)
    {
        $test = varkTest::with('usuario')->where('correo', $request->get('correo'))->get();
        return response()->json($test);
    }

    public function edit(varkTest $varkTest)
    {
    }

    public function update(Request $request, varkTest $varkTest)
    {
    }

    public function destroy(varkTest $varkTest)
    {
    }
}
