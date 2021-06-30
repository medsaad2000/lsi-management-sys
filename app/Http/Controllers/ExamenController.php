<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Examen;

class ExamenController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

    $data_exam = Examen::all();
    return view("pages.examens.examen",compact('data_exam'));
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view("pages.examens.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

    $validatedData = $request->validate([
      'idEtudiant' => 'required',
      'idModule' => 'required',
      'noteExamen' => 'required|min:0|max:20',
      'dateExamen' => 'required'
    ]);

    $examen = new Examen();
    $examen->id_etd= $request->input('idEtudiant');
    $examen->id_module= $request->input('idModule');
    $examen->Note_examen= $request->input('noteExamen');
    $examen->Date_examen= $request->input('dateExamen');

    $examen->save();

    $request->session()->flash('statut' , 'Examen a été créé avec succès');

    return redirect('/examen');
    
    
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

    $examen =Examen::find($id);
   
    

    return view('pages.examens.edit',[
      'examen' => $examen ,
    ]
    ,compact('examen'));
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request ,$id)
  {

    $examen = Examen::findOrFail($id);

    $examen->id_etd= $request->input('idEtudiant');
    $examen->id_module= $request->input('idModule');
    $examen->note_examen= $request->input('noteExamen');
    $examen->date_examen= $request->input('dateExamen');

    $examen->save();

    $request->session()->flash('statut' , 'Examen a été modifié');

    return redirect('/examen');
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request , $id)
  {

    Examen::destroy($id);

    $request->session()->flash('statut' , 'Examen a été supprimé');

    return redirect('/examen');
    
  }
  
}

?>