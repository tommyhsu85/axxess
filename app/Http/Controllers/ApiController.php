<?php

namespace App\Http\Controllers;

use App\Patient;
use DB;
use Illuminate\Http\Request;

class ApiController extends Controller
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

    public function miss(){
        $patients = Patient::select('patients.id','patients.name','patients.age','patients.phone','patients.start_date','patients.deadline')->leftjoin('visits', 'patients.id', '=', 'visits.patient_id')->where('patients.deadline', '<', date("Y-m-d"))->whereNull('visits.patient_id')->get();
        return $patients->toJson();
    }

}
