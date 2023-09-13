<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Survey;

class SurveyController extends Controller
{
    public function index()
    {
        return Survey::all();
    }

    public function show($id)
    {
        return Survey::findOrFail($id);
    }

}