<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->insert([
            'text' => "Programmation d'une électrovanne pour mon projet de BAC",
            'annee' => "2018",
        ]);
        DB::table('experiences')->insert([
            'text' => "Création de paramétrage auto d'une VM dès son lancement à Ynov",
            'annee' => "2019",
        ]);
        DB::table('competences')->insert([
            'text' => "HTML,CSS, JAVASCRIPT, PHP : 2,5/5",
        ]);
        DB::table('competences')->insert([
            'text' => "Python : 3.5/5",
        ]);
        DB::table('competences')->insert([
            'text' => "C : 2.5/5",
        ]);
        DB::table('formation')->insert([
            'text' => "Gustave Eiffel Bordeaux : BAC STI2D avec option SIN.",
        ]);
        DB::table('formation')->insert([
            'text' => "Ynov Bordeaux : 1ère année en filière Informatique",
        ]);
    }
}
