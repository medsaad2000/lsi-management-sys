<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Salle;


class SalleController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $data_salle = Salle::all();
    return view("pages.salles.salle",compact('data_salle'));
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view("pages.salles.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'nomsalle' => 'required',
      'dateres' => 'required',
      'heuredebut' => 'required',
      'heurefin' => 'required',
    ]);

    $salle = new Salle();
    $salle->nom_salle= $request->input('nomsalle');
    $salle->date_reservation= $request->input('dateres');
    $salle->heure_debut= $request->input('heuredebut');
    $salle->heure_fin= $request->input('heurefin');


    $salle->save();

    $request->session()->flash('statut' , 'Salle a été créé avec succès');

    return redirect('/salle');
    
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

    $salle =Salle::find($id);
   
    

    return view('pages.salles.edit',[
      'salle' => $salle ,
    ]
    ,compact('salle'));
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request ,$id)
  {

    $salle = Salle::findOrFail($id);

    $salle->nom_salle= $request->input('nomsalle');
    $salle->date_reservation= $request->input('dateres');
    $salle->heure_debut= $request->input('heuredebut');
    $salle->heure_fin= $request->input('heurefin');


    $salle->save();

    $request->session()->flash('statut' , 'salle a été modifié');

    return redirect('/salle');
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request , $id)
  {

    Salle::destroy($id);

    $request->session()->flash('statut' , 'salle a été supprimé');

    return redirect('/salle');
    
  }
  
}

?>