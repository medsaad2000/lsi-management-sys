<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Emploi;


class EmploiUploadController extends Controller
{
    public function index()
    {
        return view('pages.emploi');
    }
 
    public function store(Request $request)
    {
         
        $validatedData = $request->validate([
         'file' => 'required|csv,txt,xlx,xls,pdf,jpg,png|max:2048',
 
        ]);
 
        $name = $request->file('file')->getClientOriginalName();
 
        $path = $request->file('file')->store('public/assets/files');
 
 
        $save = new Emploi();
 
        $save->name = $name;
        $save->path = $path;
 
        return redirect('/emploi')->with('status', 'Emploi a été ajouté !');
 
    }
}
