<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function gender(Request $request) {

        $students = config('students.students');
        $genders = config('students.genders');


        $gender = $request->input('filter');

        $res = [
            'error' => '',
            'response' => []
        ];

        if (in_array($gender, $genders)) {
            if ($gender == 'all') {
                $res['response'] = $students;
            } else {
                foreach ($students as $student) {
                    if($student['genere'] == $gender) {
                        $res['response'][] = $student;
                    }
                }
            }
        } else {
            $res['error'] = 'Errore';
        }

        return response()->json($res);
        
    }
}
