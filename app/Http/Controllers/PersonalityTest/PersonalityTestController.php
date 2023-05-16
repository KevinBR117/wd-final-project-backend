<?php

namespace App\Http\Controllers\PersonalityTest;

use app\Http\Controllers\Controller;
use App\Models\PersonalityTest\PersonalityTest;
use Illuminate\Http\Request;

class PersonalityTestController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $newPersonalityTest = new PersonalityTest();
        $newPersonalityTest->email = $request->get('email');
        $newPersonalityTest->extrovertScore = $request->get('extrovertScore');
        $newPersonalityTest->introvertScore = $request->get('introvertScore');
        $newPersonalityTest->sensoryScore = $request->get('sensoryScore');
        $newPersonalityTest->intuitiveScore = $request->get('intuitiveScore');
        $newPersonalityTest->rationalScore = $request->get('rationalScore');
        $newPersonalityTest->emotionalScore = $request->get('emotionalScore');
        $newPersonalityTest->perceptualScore = $request->get('perceptualScore');
        $newPersonalityTest->perceptualScore = $request->get('perceptualScore');
        $newPersonalityTest->personalityTypeObtained = $request->get('personalityTypeObtained');
        
    }

    
    public function show(Request $request)
    {
        $test = PersonalityTest::with('user')->where('email', $request->get('email'))->get();
        return response()->json($test);
    }

    
    public function edit(PersonalityTest $personalityTest)
    {
        //
    }

    
    public function update(Request $request, PersonalityTest $personalityTest)
    {
        //
    }

    public function destroy(PersonalityTest $personalityTest)
    {
        //
    }
}
