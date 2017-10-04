<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SessionController;
use App\Qualification;
use App\Teacher;
use App\Vote;

class QualificationController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }

  public function getCurrentQualNr(Request $request)
  {
    $ses = new SessionController;
    $qual_nr = $ses->retrieveValue($request, 'qual_nr');
    $qual_nr--; // business rule - the session stores the index to the next qual
    return $qual_nr;
  }

  /**
   * Show the form for creating a new resource.
   * @param $request
   * @return Response
   */
  public function create(Request $request)
  {
     // todo
        
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    
  }

  /**
   * Display the specified resource.
   * @param $request
   * @param  int  $id
   * @return Response
   */
  public function show(Request $request, $id)
  {
    // echo $id;
    $ses = new SessionController;
    $ses->putValue($request, 'qual_nr',$id+1);

    $qualification = Qualification::find($id);
    $teachers = Teacher::orderBy('name','asc')->get();
    // echo $qualification;
    // echo $teachers;

    return view('qualification', ['qualification'=>$qualification, 'teachers'=>$teachers]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>