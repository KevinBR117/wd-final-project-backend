<?php

namespace App\Http\Controllers\VarkTest;

use App\Http\Controllers\Controller;
use App\Models\VarkTest\VarkTest;
use Illuminate\Http\Request;

class VarkTestController extends Controller
{

    public function store(Request $request)
    {
        // dd($request);
        $newVarkTest = new VarkTest();
        $newVarkTest->email = $request->get('email');
        $newVarkTest->visualPunctuation = $request->get('visualPunctuation');
        $newVarkTest->auralPunctuation = $request->get('auralPunctuation');
        $newVarkTest->readPunctuation = $request->get('readPunctuation');
        $newVarkTest->kinestheticPunctuation = $request->get('kinestheticPunctuation');
        $newVarkTest->varkTypeObtained = $request->get('varkTypeObtained');

        $newVarkTest->save();
        return response()->json(['success' => true]);
    }


    public function show(Request $request)
    {
        $test = VarkTest::with('user')->where('email', $request->get('email'))->get();
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
