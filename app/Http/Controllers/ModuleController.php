<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Module;

class ModuleController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $data_mod = Module::all();
    return view("pages.modules.module",compact("data_mod"));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view("pages.modules.create");
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

    $validatedData = $request->validate([
      'nom_module' => 'required',
      'id_profmod' => 'required',
      'id_niveau' => 'required',
      'semestre' => 'required'
    ]);

    $module = new Module();
    $module->nom_mod= $request->input('nom_module');
    $module->id_prof= $request->input('id_profmod');
    $module->id_niveau= $request->input('id_niveau');
    $module->semestre= $request->input('semestre');

    $module->save();

    $request->session()->flash('statut' , 'module a été créé avec succès');

    return redirect('/module');
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

    $module =Module::find($id);
   
    

    return view('pages.modules.edit',[
      'module' => $module ,
    ]
    ,compact('module'));
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request , $id)
  {
    $module = Module::findOrFail($id);

    $module->nom_mod= $request->input('nom_module');
    $module->id_prof= $request->input('id_profmod');
    $module->id_niveau= $request->input('id_niveau');
    $module->semestre= $request->input('semestre');

    $module->save();

    $request->session()->flash('statut' , 'module a été modifié');

    return redirect('/module');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request , $id)
  {
    Module::destroy($id);

    $request->session()->flash('statut' , 'module a été supprimé');

    return redirect('/module');

  }
  
}

?>