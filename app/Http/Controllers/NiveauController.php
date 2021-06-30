<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Niveau;


class NiveauController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $data_n = Niveau::all();
    return view("pages.niveaux.niveaux",compact('data_n'));
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view("pages.niveaux.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'libelle' => 'required',
    ]);

    $niveau = new Niveau();
    $niveau->libelle= $request->input('libelle');


    $niveau->save();

    $request->session()->flash('statut' , 'Niveau a été ajouté avec succès');

    return redirect('/niveau');
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
    $niveau =Niveau::find($id);
   
    

    return view('pages.niveaux.edit',[
      'Niveau' => $niveau ,
    ]
    ,compact('niveau'));
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request ,$id)
  {
    $niveau = Niveau::findOrFail($id);

    $niveau->libelle= $request->input('libelle');


    $niveau->save();

    $request->session()->flash('statut' , 'Niveau a été modifié');

    return redirect('/niveau');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request ,$id)
  {
    Niveau::destroy($id);

    $request->session()->flash('statut' , 'Niveau a été supprimé');

    return redirect('/niveau');
    
  }
  
}

?>