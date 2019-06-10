<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Experiences;
use App\Formation;
use App\Competences;

class MonControlleur extends Controller
{
    public function index() {
        return redirect()->action('MonControlleur@elements');
    }

    public function elements() {
        $experiences = Experiences::all();
        $formation = Formation::all();
        $competences = Competences::all();
        return view("elements",['experiences' => $experiences, 'formation' => $formation, 'competences' => $competences]);
    }

    public function logout() {
        Auth::logout();
        return redirect()->action('MonControlleur@index');
    }

    public function deleteE($id) {
        $delE = Experiences::whereRaw('id=?', $id)->delete();
        return redirect()->action('MonControlleur@elements');
    } public function deleteC($id) {
        $delC = Competences::whereRaw('id=?', $id)->delete();
        return redirect()->action('MonControlleur@elements');
    } public function deleteF($id) {
        $delF = Formation::whereRaw('id=?', $id)->delete();
        return redirect()->action('MonControlleur@elements');
    }
    
}
