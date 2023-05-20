<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    //
    public function index()
    {
        //count for civil status
        $married = Record::where('civilstatus', 'Married')->count();
        $single = Record::where('civilstatus', 'Single')->count();
        $widowed = Record::where('civilstatus', 'widowed')->count();
        $seperated = Record::where('civilstatus', 'seperated')->count();

        //count for sitio
        $nieves = Record::where('sitio', 'Nieves')->count();
        $rosete = Record::where('sitio', 'Rosete')->count();
        $leyva = Record::where('sitio', 'Leyva')->count();
        $calimbas = Record::where('sitio', 'Calimbas')->count();
        $rodriguez = Record::where('sitio', 'Rodriguez')->count();
        $mercurio = Record::where('sitio', 'Mercurio')->count();
        $dearo = Record::where('sitio', 'Dearo')->count();

        return view('bins.home', compact('married', 'single', 'widowed', 'seperated', 
        'nieves', 'rosete', 'leyva', 'calimbas', 'rodriguez', 'mercurio', 'dearo'));
    }

    public function create()
    {
        return view('bins.addrecord');
    }

    public function store(Request $request)
    {
        $record = new Record;

        $record->firstname = $request->firstname;
        $record->middlename = $request->middlename;
        $record->lastname = $request->lastname;
        $record->birthdate = $request->birthdate;
        $record->civilstatus = $request->civilstatus;
        $record->occupation = $request->occupation;
        $record->sitio = $request->sitio;

        $record->save();
        return redirect("showrecord");
    }

    public function records()
    {
        $record = Record::all();

        $data = [
            'record' => $record
        ];
        return view("bins.records", $data);
    }

    public function edit($id)
    {
        $records = Record::find($id);

        return view('bins.editrecord', compact('records'));
    }

    public function update(Request $request, $id)
    {
        $record = Record::find($id);

        $record->firstname = $request->firstname;
        $record->middlename = $request->middlename;
        $record->lastname = $request->lastname;
        $record->birthdate = $request->birthdate;
        $record->civilstatus = $request->civilstatus;
        $record->occupation = $request->occupation;
        $record->sitio = $request->sitio;

        $record->update();
        return redirect("showrecord");
    }

    public function destroy($id)
    {
        $record = Record::find($id);
        $record->delete();

        return redirect("showrecord");
    }
}
