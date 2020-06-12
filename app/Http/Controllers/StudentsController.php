<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    private $students;

    public function __construct() {
        $this->students = config('students');
    }

    public function index() {
        $students = $this->students;
        return view('students.index', compact('students') );
    }
    public function show($slug) {

        $student = $this->cercaStudente($slug, $this->students);

        if (!$student) {
            abort('404');
        }


        return view('students.show', compact('student'));
    }

    //controllo se lo studente esiste tramite l'id
    private function cercaStudente($slug, $array) {
        foreach ($array as $items) {
            if ($items['slug'] == $slug) {
                return $items;
            } 
            
        }
        return false;
    }
}
