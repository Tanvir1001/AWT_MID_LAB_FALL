<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
        public function registration(){
            return view('pages.Registration');
        }

        public function registrationSubmit(Request $request){
            //using requests validate method
            $validate = $request->validate(
                [
                    'name'=>'required|min:5|max:10',
                    'username'=>'required|min:5|max:10',
                    'dob'=>'required',
                    'email'=>'email',
                    'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
                ],
                [
                  
                ]
            );

                $var = new Registration();
                $var->name= $request->name;
                $var->username= $request->username;
                $var->email = $request->email;
                $var->phone= $request->phone;
                $var->dob = $request->dob;
                $var->save();


            return "Submitted Successfully";  
        }
        public function list(){
            $registrations = Registration::all();
            return view('pages.list')->with('registrations',$registrations);
        }
        public function edit(Request $request){
            //
            $id = $request->id;
            //$student = Student::where('id',$id)->get(); //for multiple values : return array
            $registration = Registration::where('id',$id)->first();
            //$student = Student::where('id','>',$id)->first();//default operator =
            return $registration;
    
        }
    
}
