<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experiences;
use App\Formation;
use App\Competences;

class Creer extends Controller
{
    public function creerExp() {
        return view('/');
    }
    protected function create(Request $request)
    {
        Experiences::create([
            'text' => $request->input('text'),
            'annee' => $request->input('annee'),
        ]);
        return view('/');
    }

    public function creerCom() {
        return view('/');
    }
    protected function createA(Request $request)
    {
        Competences::create([
            'text' => $request->input('text'),
        ]);
        return view('/');
    }

    public function creerFor() {
        return view('/');
    }
    protected function createB(Request $request)
    {
        Formation::create([
            'text' => $request->input('text'),
        ]);
        return view('/');
    }
}