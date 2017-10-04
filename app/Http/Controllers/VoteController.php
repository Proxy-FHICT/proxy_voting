<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QualificationController;
use App\Qualification;
use App\Teacher;
use App\Vote;

class VoteController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   * @param $request
   * @return Response
   */
  public function create(Request $request)
  {
      $this->validate($request, [
          'teachers' => 'required',
      ]); // does implicitly redirect back if fails

      
      //if passed - assumed correct input
      $vote = new Vote;
      // echo $request->teachers;
      //session controller instance
      $ses = new SessionController;
      $qual = new QualificationController;

      // peek the whole stuff
      // print_r($ses->getAll($request));

      $studentrecord = $ses->retrieveValue($request,'student_record');

      // echo $studentrecord;
      $vote->s_nr = $studentrecord['studentNr'];
      $vote->t_id = $request->teachers;
      $qual_nr = $qual->getCurrentQualNr($request);
      $vote->q_id = $qual_nr;

      // to save the tacher data for easier access
      $teacher = Teacher::find($vote->t_id);
      // echo $teacher;
      $qualif = Qualification::find($vote->q_id);
      // echo $qualif;

      $votes = $ses->retrieveValue($request,'vote_records');
      if($votes !== null){
        // do not allow doublicates
        // do override in such cases
        // to do!
        if(count($votes)<$qual_nr)
        { // if the number of votes is smaller - add new, else replace
          array_push($votes,['vote'=>$vote,'teacher'=>$teacher]); // add value to the array of votes
        }else{
          $votes[$qual_nr-1] = ['vote'=>$vote,'teacher'=>$teacher];
        }
      }else{
        $votes = array(); 
        array_push($votes,['vote'=>$vote,'teacher'=>$teacher]);
      }
      $ses->putValue($request, 'vote_records',$votes);
      
      // print_r($ses->retrieveValue($request,'vote_records')) ;
      // saved the data to session - continue further
       return redirect('/next');
     
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param Request $request
   * @return Response
   */
  public function store(Request $request)
  {
    // echo "in proress of storing response";
    $ses = new SessionController;
    
    // echo $ses->probeKey($request,'fin');
    // echo !($ses->probeKey($request,'student_record'));

    if($ses->retrieveValue($request,'student_record')== null 
        || 
        $ses->retrieveValue($request,'fin')!=null){
      //  echo($ses->retrieveValue($request,'student_record'));
        // echo($ses->retrieveValue($request,'fin'));
        return view('/mistake',['mist'=>'You have already voted...']);
        // abort(403, 'Unauthorized action.');
    }

    $votes = $ses->retrieveValue($request,'vote_records');
    //print_r($votes);

    // save student data first
    $stud = $ses->retrieveValue($request,'student_record');
    // echo ($stud);
    $stud->save();
    
    if(count($votes)>0){
     
      foreach($votes as $v)
      {
        //echo '...saving: '.$v['vote'];
        $v['vote']->save();
      }
      
      // flag finished
      $ses->putValue($request, 'fin', true);
      // $ses->deleteKey($request, 'student_record');
      return redirect('/thanks'); 
    }else{
      return view('/mistake',['mist'=>'You have not voted...']);
    }
 
  }

private function selectWinner($votes, $q_id){
  $winner = NULL;
  foreach($votes as $v){
    // echo $v->q_id."===".$q_id." ";
    if($v->q_id == $q_id){
      return $v;
    }
  }
  return $winner;
}

public function showResult(){
    $qualifications = Qualification::all();
    $votes = array();
    $votes = DB::select('
        select t.name, t_id, q_id, MAX(v)
          from 
            (select t_id, q_id, COUNT(*) as v
              from votes
              group by q_id, t_id)
          join teachers as t on t.id = t_id
          group by q_id;
      ');
    foreach ($qualifications as $q){
      $q->winner = $this->selectWinner($votes, $q->id);
      // print_r($q->winner);
    }

    
		

    // print_r($votes);
    // echo PHP_EOL;
    // print_r($qualifications);
    return view('results', ['qualifications'=>$qualifications]);
}


  // /**
  //  * Display the specified resource.
  //  *
  //  * @param  int  $id
  //  * @return Response
  //  */
  // public function show($id)
  // {
    
  // }

  // /**
  //  * Show the form for editing the specified resource.
  //  *
  //  * @param  int  $id
  //  * @return Response
  //  */
  // public function edit($id)
  // {
    
  // }

  // /**
  //  * Update the specified resource in storage.
  //  *
  //  * @param  int  $id
  //  * @return Response
  //  */
  // public function update($id)
  // {
    
  // }

  // /**
  //  * Remove the specified resource from storage.
  //  *
  //  * @param  int  $id
  //  * @return Response
  //  */
  // public function destroy($id)
  // {
    
  // }



  
}

?>