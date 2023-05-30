<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Models\VarkTest\VarkTest;
use App\Models\PersonalityTest\PersonalityTest;

class UsersController extends Controller
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
        $user = new Users;
        $user->email = $request->get('email');
        $user->name = $request->get('name');

        $user->save();
        return response()->json(['success' => true]);
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function delete(Request $request)
    {
        $user = Users::where('email', $request->email);
        $varkTest = VarkTest::where('email', $request->email);
        $personalityTest = PersonalityTest::where('email', $request->email);
        // dd($user);
        $user->delete();
        $varkTest->delete();
        $personalityTest->delete();
        return response()->json('eliminado');
    }
}
