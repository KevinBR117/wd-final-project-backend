<?php

namespace App\Http\Controllers;

use App\Models\PersonalityTest\PersonalityMainTypes;
use App\Models\PersonalityTest\PersonalityPersonalities;
use App\Models\PersonalityTest\PersonalitySuggestions;
use App\Models\PersonalityTest\PersonalityTest;
use App\Models\PersonalityTest\PersonalityDangers;
use Illuminate\Http\Request;
use PDF;

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
        $newPersonalityTest->qualifierScore = $request->get('qualifierScore');
        $newPersonalityTest->perceptualScore = $request->get('perceptualScore');
        $newPersonalityTest->personalityTypeObtained = $request->get('personalityTypeObtained');

        $newPersonalityTest->save();
        return response()->json(['success' => true]);
    }


    public function show(Request $request)
    {
        $test = PersonalityTest::with('user')->where('email', $request->get('email'))->get();
        return response()->json($test);
    }

    public function getPersonalities()
    {
        $personalities = PersonalityPersonalities::with('characteristics')->get();
        return response()->json($personalities);
    }

    public function getMainCharacteristics()
    {
        $mainCharacteristics = PersonalityMainTypes::with('mainCharacteristics')->get();
        return response()->json($mainCharacteristics);
    }

    public function getMainDangers()
    {
        return PersonalityDangers::all();
    }

    public function getMainSuggestions()
    {
        return PersonalitySuggestions::all();
    }

    public function exportPersonalityTest(Request $request)
    {
        $data = PersonalityTest::with('user')->where('email', $request->get('email'))->get();
        $pdf = PDF::loadView('personalityTest', array('data' => $data))->setPaper('a2', 'portrait');
        return $pdf->download('personality_test.pdf');

    }

    public function exportAllPersonalityTest()
    {
        $data = PersonalityTest::with('user')->get();
        $pdf = PDF::loadView('PersonalityTest', array('data' => $data))->setPaper('a2', 'portrait');
        return $pdf->download('all_personality_test.pdf');

    }

    public function exportPersonalityTestByType(Request $request)
    {
        $data = PersonalityTest::with('user')->where('personalityTypeObtained', $request->get('personalityType'))->get();
        $pdf = PDF::loadView('PersonalityTest', array('data' => $data))->setPaper('a2', 'portrait');
        return $pdf->download('personality_test_by_type.pdf');

    }

    public function getAllPersonalityTest()
    {
        $tests = PersonalityTest::with('user')->get();
        return response()->json($tests);
    }

    public function getPersonalityTestByType(Request $request)
    {
        $tests = PersonalityTest::with('user')->where('varkTypeObtained', $request->get('varkType'))->get();
        return response()->json($tests);
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
