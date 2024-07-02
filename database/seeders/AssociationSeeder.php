<?php


namespace Database\Seeders;

// database/seeders/AssociationSeeder.php
use Illuminate\Database\Seeder;
use App\Models\Association;

class AssociationSeeder extends Seeder
{
    public function run()
    {
        Association::truncate();

        Association::create([
            'nom' => 'Simplon',
            'description' => 'Depuis 2018, nous délivrons des formations intensives et gratuites aux métiers en tension de l’économie digitale, qui valorisent des talents peu représentés dans le numérique.

Nous sommes convaincus que la transformation numérique est un puissant vecteur d’innovation sociale et peut permettre à des publics éloignés de la formation et/ou de l’emploi, de devenir les talents de demai',
            'logo' => 'logo1.png',
            'adresse' => 'Dakar, City keur gor gui',
            'contact' => 123456789,
            'secteur' => 'NUMERIQUE',
            'ninea' => 'NINEA001',
            'etat' => 1,
            'date_creation_association' => '12/12/2014',
            'user_id' => 3, // Assuming this is the ID of the association user created in UserSeeder
        ]);

        Association::create([
            'nom' => 'Bamsachine Dessign',
            'description' => 'Description of Association 2',
            'logo' => 'logo2.png',
            'adresse' => 'Dakar, Malika',
            'contact' => 772222222,
            'secteur' => 'Education',
            'ninea' => 'NINEA002',
            'etat' => 1,
            'date_creation_association' => '23/04/2024',

            'user_id' => 4, // Assuming this is the ID of the association user created in UserSeeder
        ]);
    }
}
