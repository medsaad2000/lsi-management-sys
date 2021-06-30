<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PFE;

class PFEController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $data_pfe = PFE::all();
    return view("pages.pfe.pfe",compact('data_pfe'));
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view("pages.pfe.create");
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
    $validatedData = $request->validate([
      'idProfPfe' => 'required',
      'sujetPfe' => 'required',
      'date_pfe' => 'required',
    ]);

    $pfe = new PFE();
    $pfe->id_prof= $request->input('idProfPfe');
    $pfe->sujet= $request->input('sujetPfe');
    $pfe->date_pfe= $request->input('date_pfe');

    $pfe->save();

    $request->session()->flash('statut' , 'PFE a été créé avec succès');

    return redirect('/pfe');
    
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

    $pfe =PFE::find($id);
   
    

    return view('pages.pfe.edit',[
      'pfe' => $pfe ,
    ]
    ,compact('pfe'));
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request , $id)
  {

    $pfe = PFE::findOrFail($id);

    $pfe->id_prof= $request->input('idProfPfe');
    $pfe->sujet= $request->input('sujetPfe');
    $pfe->date_pfe= $request->input('date_pfe');

    $pfe->save();

    $request->session()->flash('statut' , 'PFE a été modifié');

    return redirect('/pfe');
    
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy( Request $request , $id)
  {

    pfe::destroy($id);

    $request->session()->flash('statut' , 'PFE a été supprimé');

    return redirect('/pfe');
    
  }
  
}

?>