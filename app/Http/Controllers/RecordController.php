<?php

namespace App\Http\Controllers;
use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    {
        $records = Record::all();
        return view('index', compact('records'));
    }

    public function store(Request $request)
    {
        Record::create($request->all());
        return redirect('/');
    }
}
