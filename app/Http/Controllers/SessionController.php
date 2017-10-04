<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    // used to retreive data by key
    public function retrieveValue(Request $request, $key){
      if($request->session()->has($key)){
          return $request->session()->get($key);
      }else{
          return null; // not the best
      }
   }

   // used to store new value on key
   public function putValue(Request $request, $key, $value){
      $request->session()->put($key,$value);
   }

   // used to store remove key
   public function deleteKey(Request $request, $key){
      $request->session()->forget($key);
   }

   // used to probe if the key exists
   public function probeKey(Request $request, $key){
        return $request->session()->has($key);
   }

   // returns the complete session stufff
   public function getAll(Request $request){
       return $request->session()->all();
   }

   public function refresh(Request $request){
       $this->deleteKey($request,'student_record');
       $this->deleteKey($request,'vote_records');
       $this->deleteKey($request,'qual_nr');
       $this->deleteKey($request,'qual_records');
       $this->deleteKey($request,'fin');
   }
}
