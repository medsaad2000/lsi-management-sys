<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Etudiant;

class EtudiantController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $data_et = Etudiant::all();
    return view("pages.etudiants.etudiant",compact("data_et"));
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view("pages.etudiants.create");
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'nom_et' => 'required',
      'prenom_et' => 'required',
      'cinEt' => 'required',
      'cneEt' => 'required',
      'apogee' => 'required',
      'niveau_et' => 'required|min:1|max:3'
    ]);

    $etudiant = new Etudiant();
    $etudiant->nom= $request->input('nom_et');
    $etudiant->prenom= $request->input('prenom_et');
    $etudiant->cin= $request->input('cinEt');
    $etudiant->cne= $request->input('cneEt');
    $etudiant->apogee= $request->input('apogee');
    $etudiant->id_niveau= $request->input('niveau_et');

    $etudiant->save();

    $request->session()->flash('statut' , 'Etudiant a été créé avec succès');

    return redirect('/etudiant');
    
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

    $etudiant =Etudiant::find($id);
   
    

    return view('pages.etudiants.edit',[
      'etudiant' => $etudiant ,
    ]
    ,compact('etudiant'));
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request , $id)
  {

    $etudiant = Etudiant::findOrFail($id);

    $etudiant->nom= $request->input('nom_et');
    $etudiant->prenom= $request->input('prenom_et');
    $etudiant->cin= $request->input('cinEt');
    $etudiant->cne= $request->input('cneEt');
    $etudiant->apogee= $request->input('apogee');
    $etudiant->id_niveau= $request->input('niveau_et');

    $etudiant->save();

    $request->session()->flash('statut' , 'Etudiant a été modifié');

    return redirect('/etudiant');

    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request , $id)
  {


    Etudiant::destroy($id);

    $request->session()->flash('statut' , 'Etudiant a été supprimé');

    return redirect('/Etudiant');
    
  }
  
}

?>