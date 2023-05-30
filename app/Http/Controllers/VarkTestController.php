<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Exports\VarkTestExport;
use App\Models\VarkTest\VarkTest;
use App\Exports\AllVarkTestExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\VarkTestByTypeExport;
use App\Models\VarkTest\VarkQuestions;

class VarkTestController extends Controller
{

    public function store(Request $request)
    {
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

    public function getQuestions()
    {
        $questions = VarkQuestions::with('answers')->get();
        return response()->json($questions);
    }

    // ##################### pdf exports files #######################3
    public function exportVarkTest(Request $request)
    {
        $data = VarkTest::with('user')->where('email', $request->get('email'))->get();
        $pdf = PDF::loadView('varkTest', array('data' => $data))->setPaper('a2', 'portrait');
        return $pdf->download('vark_test.pdf');
    }

    public function exportAllVarkTest()
    {
        $data = VarkTest::with('user')->get();
        $pdf = PDF::loadView('varkTest', array('data' => $data))->setPaper('a2', 'portrait');
        return $pdf->download('all_vark_test.pdf');
    }

    public function exportVarkTestByType(Request $request)
    {
        $data = VarkTest::with('user')->where('varkTypeObtained', $request->get('varkType'))->get();
        $pdf = PDF::loadView('varkTest', array('data' => $data))->setPaper('a2', 'portrait');
        return $pdf->download('vark_test_by_type.pdf');
    }
    // ###################################################################################################

    // ######################### excel export files  #####################################################

    public function exportVarkTestToExcel(Request $request)
    {
        // dd($request->get('email'));
        $filename = 'result-vark-test(' . $request->email . ').xlsx';
        return Excel::download(new VarkTestExport($request->email), $filename);
    }
    public function exportAllVarkTestToExcel()
    {
        // dd($request->get('email'));
        $filename = 'result-all-vark-test.xlsx';
        return Excel::download(new AllVarkTestExport, $filename);
    }



    public function exportVarkTestByTypeToExcel(Request $request)
    {
        // dd($request->get('email'));
        $filename = 'result-vark-test(' . $request->varkType . ').xlsx';
        return Excel::download(new VarkTestByTypeExport($request->varkType), $filename);
    }

    // ###################################################################################################
    public function getAllVarkTest()
    {
        $tests = VarkTest::with('user')->get();
        return response()->json($tests);
    }

    public function getVarkTestByType(Request $request)
    {
        $tests = VarkTest::with('user')->where('varkTypeObtained', $request->get('varkType'))->get();
        return response()->json($tests);
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

    public function getTotalVarkTest()
    {
        $total_tests = count(VarkTest::all());
        return response()->json(['total_vark_test' => $total_tests]);
        // return $total_tests;
    }
    public function getCountVarkTestByType()
    {
        $total_tests = VarkTest::all();
        $visual = 0;
        $aural = 0;
        $read = 0;
        $kinesthetic = 0;

        foreach ($total_tests as $test) {

            if (strtolower($test->varkTypeObtained) == 'visual') {
                $visual += 1;
            } elseif (strtolower($test->varkTypeObtained) == 'aural') {
                $aural += 1;
            }
            elseif(strtolower($test->varkTypeObtained) == 'read') {
                $read += 1;
            }
            else{
                $kinesthetic += 1;
            }
        }

        $array = [
            "visual" => $visual,
            "aural" => $aural,
            "read" => $read,
            "kinesthetic" => $kinesthetic
        ];
        return response()->json($array);
    }
}
