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

    public function check_miss(){
        $patients = Patient::select('patients.id')->leftjoin('visits', 'patients.id', '=', 'visits.patient_id')->where('patients.deadline', '<', date("Y-m-d"))->whereNull('visits.patient_id')->get();
        foreach ($patients as $value) {
            $array[] = $value->id;
        }

        Patient::wherein('id', $array)
            ->update(['follow_up' => 'missed']);
        return $patients;
    }
    public function miss(){
        $patients = Patient::select('patients.id','patients.name','patients.age','patients.phone','patients.start_date','patients.deadline')->leftjoin('visits', 'patients.id', '=', 'visits.patient_id')->where('patients.deadline', '<', date("Y-m-d"))->whereNull('visits.patient_id')->get();
        //return $patients->toJson();
        $ary_patients = array();
        if (count($patients)>0){  
            foreach ($patients as $value) {
                $ary_patients[] = array(
                    "id"            =>  $value->id,
                    "name"          =>  $value->name,
                    "age"           =>  $value->age,
                    "start_date"    =>  $value->start_date,
                    "deadline"      =>  $value->deadline,
                );
            }
        }
        $ary_missinfo = array(
            'status'    =>  'success', 
            'data'      =>  $ary_patients
        );

        return json_encode($ary_missinfo);
        exit;
    }

}
