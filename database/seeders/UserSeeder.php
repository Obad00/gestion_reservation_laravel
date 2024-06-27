<?php
namespace Database\Seeders;



// database/seeders/UserSeeder.php
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // User::truncate();
        User::create([
            'nom' => 'Ndiaye',
            'prenom' => 'Souleymane',
            'telephone' => '766657278',
            'etat' => 1,
            'email' => 'soleymane@gmail.com',
            'password' => bcrypt('password'),
        ])->assignRole('super_admin');

        User::create([
            'nom' => 'Aabo',
            'prenom' => 'Adama',
            'telephone' => '770000000',
            'etat' => 1,
            'email' => 'dabo@gmail.com',
            'password' => bcrypt('password'),
        ])->assignRole('admin');

        User::create([
            'nom' => 'Diallo',
            'prenom' => 'Mariama',
            'telephone' => '770000010',
            'etat' => 1,
            'email' => 'Mariama@gmail.com',
            'password' => bcrypt('password'),
        ])->assignRole('association');

        User::create([
            'nom' => 'Fall',
            'prenom' => 'Oumy',
            'telephone' => '770000011',
            'etat' => 1,
            'email' => 'fall@gmail.com',
            'password' => bcrypt('password'),
        ])->assignRole('association');

        User::create([
            'nom' => 'julio',
            'prenom' => 'Ndiaye',
            'telephone' => '760000000',
            'etat' => 1,
            'email' => 'julio@gmail.com',
            'password' => bcrypt('password'),
        ])->assignRole('user');
    }
}
