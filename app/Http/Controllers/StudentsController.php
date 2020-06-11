<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    private $students;

    public function __construct() {
        $this->students =[
            [
                'id' => 1,
                'nome' => 'Alessandro Biagini',
                'img' => 'https://www.boolean.careers/images/students/biagini.png',
                'azienda' => 'DISC SPA',
                'eta' => 25,
                'ruolo' => 'web dev',
                'genere' => 'm',
                'descrizione' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.'
            ],
            [
                'id' => 2,
                'nome' => 'Paola Poggini',
                'img' => 'https://www.boolean.careers/images/students/poggini.png',
                'azienda' => 'Subito',
                'eta' => 24,
                'ruolo' => 'web dev',
                'genere' => 'f',
                'descrizione' => ' A 24 anni, dopo aver conseguito il diploma linguistico ha deciso di intraprendere fin da subito un percorso nel mondo Tech. Ad oggi ricopre il ruolo di Junior Software Engineer.'
            ],
            [
                'id' => 3,
                'nome' => 'Loana Masetti ',
                'img' => 'https://www.boolean.careers/images/students/masetti.png',
                'azienda' => 'facile.it',
                'eta' => 36,
                'ruolo' => 'Web dev',
                'genere' => 'f',
                'descrizione' => "Ha scoperto la passione per l'informatica creando un blog di psicologia, ambito in cui si era specializzata durante gli studi. Il suo cuore però non vuol sentir ragione e Loana cambia carriera e diventa una ricercatissima sviluppatrice web."
            ],
            [
                'id' => 4,
                'nome' => 'Davide Patruno',
                'img' => 'https://www.boolean.careers/images/students/patruno.png',
                'azienda' => 'OK',
                'eta' => 29,
                'ruolo' => 'Junior web dev',
                'genere' => 'm',
                'descrizione' => "Dopo la laurea magistrale in scienze umanistiche e sociali, si concentra sullo sviluppo di strategie marketing. Decide di cambiare vita, questa volta puntando sullo sviluppo Front-End."
            ],
        ];
    }

    public function index() {
        $students = $this->students;
        return view('students.index', compact('students') );
    }
    public function show($id) {

        $student = $this->cercaStudente($id, $this->students);

        if (!$student) {
            abort('404');
        }


        return view('students.show', compact('student'));
    }

    //controllo se lo studente esiste tramite l'id
    private function cercaStudente($id, $array) {
        foreach ($array as $items) {
            if ($items['id'] == $id) {
                return $items;
            } 
            
        }
        return false;
    }
}
