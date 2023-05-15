<?php

namespace App\Http\Controllers\VarkTest;

use App\Http\Controllers\Controller;
use App\Models\VarkTest\VarkTest;
use Illuminate\Http\Request;

class VarkTestController extends Controller
{

    public function store(Request $request)
    {
        $newVarkTest = new VarkTest();
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
        $test = VarkTest::with('usuario')->where('correo', $request->get('correo'))->get();
        return response()->json($test);
    }

    public function edit(VarkTest $varkTest)
    {
    }

    public function update(Request $request, VarkTest $varkTest)
    {
    }

    public function destroy(VarkTest $varkTest)
    {
    }
}
