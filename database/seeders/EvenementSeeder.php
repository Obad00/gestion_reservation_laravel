<?php
namespace Database\Seeders;

// database/seeders/EvenementSeeder.php
use Illuminate\Database\Seeder;
use App\Models\Evenement;

class EvenementSeeder extends Seeder
{
    public function run()
    {
        Evenement::truncate();

        Evenement::create([

            'nom' => 'Bootscamps',
            'description' => 'Description de Bootscamps',
            'localite' => 'mariste',
            'date_evenement' => '2024-07-03',
            'date_limite_inscription' => '2024-06-28',
            'nombre_place' => '80',
            'image' => 'event2.png',
            'association_id' => 1, // Assuming this is the ID of the first association
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
        ]);
    }
}
