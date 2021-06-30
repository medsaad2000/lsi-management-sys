<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Professeur;

class ProfesseurController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $data = Professeur::all();
    return view("pages.professeurs.professeur",compact('data'));
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view("pages.professeurs.create");
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

    $validatedData = $request->validate([
      'nom_prof' => 'required',
      'prenom_prof' => 'required',
      'email_prof' => 'required',
      'cin_prof' => 'required'
    ]);

    $professeur = new Professeur();
    $professeur->nom_prof= $request->input('nom_prof');
    $professeur->prenom_prof= $request->input('prenom_prof');
    $professeur->email_prof= $request->input('email_prof');
    $professeur->cin= $request->input('cin_prof');

    $professeur->save();

    $request->session()->flash('statut' , 'Professeur a été créé avec succès');

    return redirect('/Professeur');
    
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
    $professeur =Professeur::find($id);
   
    

    return view('pages.professeurs.edit',[
      'Professeur' => $professeur ,
    ]
    ,compact('professeur'));
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request , $id)
  {
    $professeur = Professeur::findOrFail($id);

    $professeur->nom_prof= $request->input('nom_prof');
    $professeur->prenom_prof= $request->input('prenom_prof');
    $professeur->email_prof= $request->input('email_prof');
    $professeur->cin= $request->input('cin_prof');

    $professeur->save();

    $request->session()->flash('statut' , 'Professeur a été modifié');

    return redirect('/Professeur');

    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request , $id)
  {

    // $professeur = Professeur::findOrFail($id);
    // $professeur->delete();

    Professeur::destroy($id);

    $request->session()->flash('statut' , 'Professeur a été supprimé');

    return redirect('/Professeur');


    
  }
  
}

?>