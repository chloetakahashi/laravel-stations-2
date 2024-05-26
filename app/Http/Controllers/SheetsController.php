<?php

namespace App\Http\Controllers;

use App\Models\Sheet;

class SheetsController extends Controller
{
    public function index()
    {
        $sheets = Sheet::all();
        return view('sheets.sheets', ['sheets' => $sheets]);
    }
}
