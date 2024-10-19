<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypePrestationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_prestations')->insert([
            ['libelletypeprestation' => 'Développeur Angular'],
            ['libelletypeprestation' => 'Community Manager'],
            ['libelletypeprestation' => 'Développeur Laravel'],
            ['libelletypeprestation' => 'Web Designer'],
            ['libelletypeprestation' => 'Administrateur Système'],
            ['libelletypeprestation' => 'Consultant SEO'],
            ['libelletypeprestation' => 'Développeur Mobile'],
            ['libelletypeprestation' => 'Développeur Front-end'],
            ['libelletypeprestation' => 'Développeur Back-end'],
            ['libelletypeprestation' => 'Développeur Full-stack'],
            ['libelletypeprestation' => 'Expert Data Science'],
            ['libelletypeprestation' => 'Technicien Réseau'],
            ['libelletypeprestation' => 'Animatrice TV'],
            ['libelletypeprestation' => 'Graphiste'],
            ['libelletypeprestation' => 'Consultant Marketing Digital'],
            ['libelletypeprestation' => 'Rédacteur Web'],
            ['libelletypeprestation' => 'Formateur Informatique'],
            ['libelletypeprestation' => 'Community Manager Instagram'],
            ['libelletypeprestation' => 'Spécialiste en Cyber Sécurité'],
            ['libelletypeprestation' => 'Développeur Python'],
            ['libelletypeprestation' => 'Consultant en Cloud Computing'],
            ['libelletypeprestation' => 'Administrateur Bases de Données'],
            ['libelletypeprestation' => 'Consultant IA (Intelligence Artificielle)'],
        ]);

    }
}
