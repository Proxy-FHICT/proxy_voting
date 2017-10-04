<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SessionController;
use App\Qualification;
use App\Http\Controllers\StudentContoller;

// used to track the VOTING progress
class VotingController extends Controller
{

    // initial command
    public function start(Request $request)
    {
        $this->validate($request, [
            'student_email' => 'required|unique:Students,studentEmail|email|',
            'student_number' => 'required|unique:Votes,s_nr|integer|digits:7|exists:validations,stud_nr|between:2038109,3270548|unique:Students,studentNr',
        ]); // does implicitly redirect back if fails
        // add the regex to check fontys email
        // TODO: check studnr validity

        // setting request session variables
        $ses = new SessionController;
        $stud = new StudentController;
        
        $ses->putValue($request,'student_email',$request->student_email);
        $ses->putValue($request,'student_number',$request->student_number);
        // first qualification requesting
        $ses->putValue($request,'qual_nr','1');

        $stud->create($request);

        //echo $ses->retrieveValue($request,'student_record');
        return redirect('/next');
    }

    // Determines which qualification to go to
    public function next(Request $request)
    {
        $ses = new SessionController;

        $qual_nr = $ses->retrieveValue($request,'qual_nr');
        // echo $qual_nr;

        $quals = Qualification::all();
        // echo $quals->count();

        // no more qualifications to go through
        if($qual_nr > $quals->count()){
            return redirect('/finish');
            // echo "redirecting to finish...";
        }else{
            $old_nr = $qual_nr; 
            $qual_nr++;
            $ses->putValue($request,'qual_nr',$qual_nr);
            // can also be stored in a sesssion array, even though it is not nice
            // there will be a mapping manually maintained therefore
            $qualification = Qualification::find($old_nr);
            $quals = $ses->retrieveValue($request,'qual_records');
            if($quals !== null){
                if(!isset($quals[$old_nr])){
                    array_push($quals,$qualification);    
                }
                // add value to the array of votes
            }else{
                $quals = array(); 
                array_push($quals,$qualification);
            }
            $ses->putValue($request, 'qual_records',$quals);


            return redirect('/qual/'.$old_nr);
            //echo "redirecting to next qualification...next qual on queue: ".$qual_nr;
        }
    }

    public function finish(Request $request)
    {
        // echo "retrieveing overview";
        $ses = new SessionController;
        $stud = $ses->retrieveValue($request,'student_record');
        $votes = $ses->retrieveValue($request,'vote_records');
        $quals = $ses->retrieveValue($request,'qual_records');
        // echo $stud;
        // print_r($votes);

        if(isset($stud,$votes,$quals)){
            return view('overview',['student' => $stud, 'votes'=>$votes,'quals'=>$quals]);
        }else{
            return view('mistake', ['mist'=>'we have have a mistake']);
        }

    }
}
