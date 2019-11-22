<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Visit;
use DB;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index(){
        return view('signup');
    }
    public function update(Request $request){
        if ($request->name=='' || $request->age=='' || $request->phone=='' || $request->start_date==''){
            return response("false");
        }

        $patient = new Patient;

        $patient->name = $request->name;
        $patient->age = $request->age;
        $patient->phone = $request->phone;
        $patient->start_date = $request->start_date;
        $deadline = date('Y-m-d',strtotime('+90 days',strtotime($request->start_date)));
        $patient->deadline = $deadline;

        $patient->save();
        return view('welcome');
    }
    public function visit(){
        $patient = new Patient;
        $patients = $patient->select('id', 'name')->get();
        return view('visit', compact('patients', 'patients'));
    }
    public function vupdate(Request $request){
        if ($request->patient=='' || $request->visit_date==''){
            return response("false");
        }
        $visit = new Visit;
        $visit->patient_id = $request->patient;
        $visit->visit_date = $request->visit_date;
        $visit->save();
        return view('welcome');
    }
    public function upcoming(){
        $patient = new Patient;
        $today = date('Y-m-d');
        $countdate = date('Y-m-d',strtotime('+4 weeks',strtotime($today)));
        $patients = $patient->whereBetween('deadline', array($today, $countdate))->get();
        return view('upcoming', compact('patients', 'patients'));
    }
}
