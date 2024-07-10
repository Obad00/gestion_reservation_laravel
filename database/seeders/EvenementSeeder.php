<?php
namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;
use App\Models\Evenement;

class EvenementSeeder extends Seeder
{
    public function run()
    {
        Evenement::truncate();
        Categorie::truncate();


        Categorie::create([

            'name' => 'Educations',
        ]);

        Categorie::create([

            'name' => 'Sports',
        ]);
        Categorie::create([

            'name' => 'Informatiques',
        ]);


        Evenement::create([

            'nom' => 'Bootscamps',
            'description' => 'Description de Bootscamps',
            'localite' => 'mariste',
            'date_evenement' => '2024-07-03',
            'date_limite_inscription' => '2024-06-28',
            'nombre_place' => '80',
            'image' => 'event2.png',
            'association_id' => 1, // Assuming this is the ID of the first association
            'categorie_id' => 1,
        ]);

        Evenement::create([
            'nom' => 'Hackathon',
            'description' => 'Description de hackathon',
            'localite' => 'Keur massare',
            'date_evenement' => '2024-07-01',
            'date_limite_inscription' => '2024-06-27',
            'nombre_place' => '100',
            'image' => 'event1.png',
            'association_id' => 2, // Assuming this is the ID of the first association
            'categorie_id' => 2,

        ]);
    }
}

// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use App\Models\Categorie;
// use App\Models\Evenement;

// class EvenementSeeder extends Seeder
// {
//     public function run()
//     {
//         // Désactiver les vérifications de clé étrangère
//         DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

//         // Vider les tables
//         Evenement::truncate();
//         Categorie::truncate();

//         // Réactiver les vérifications de clé étrangère
//         DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

//         // Créer les catégories
//         Categorie::create(['name' => 'Educations']);
//         Categorie::create(['name' => 'Sports']);
//         Categorie::create(['name' => 'Informatiques']);

//         // Créer les événements
//         Evenement::create([
//             'nom' => 'Bootscamps',
//             'description' => 'Description de Bootscamps',
//             'localite' => 'mariste',
//             'date_evenement' => '2024-07-03',
//             'date_limite_inscription' => '2024-06-28',
//             'nombre_place' => '80',
//             'image' => 'event2.png',
//             'association_id' => 1, // Assuming this is the ID of the first association
//             'categorie_id' => 1,
//         ]);

//         Evenement::create([
//             'nom' => 'Hackathon',
//             'description' => 'Description de hackathon',
//             'localite' => 'Keur massare',
//             'date_evenement' => '2024-07-01',
//             'date_limite_inscription' => '2024-06-27',
//             'nombre_place' => '100',
//             'image' => 'event1.png',
//             'association_id' => 2, // Assuming this is the ID of the second association
//             'categorie_id' => 2,
//         ]);
//     }
// }


