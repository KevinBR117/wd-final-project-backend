<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PersonalityTest\Personality;
use Illuminate\Http\Request;

class PersonalityController extends Controller
{
    public function getPersonalities()
    {
        $personalities = Personality::with('characteristics')->get();
        return response()->json($personalities);
    }

    public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Personality $personality)
    {
    }

    public function edit(Personality $personality)
    {
    }

    public function update(Request $request, Personality $personality)
    {
    }

    public function destroy(Personality $personality)
    {
    }
}
