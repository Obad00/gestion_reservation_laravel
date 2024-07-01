<?php
namespace Database\Seeders;

// database/seeders/ReservationSeeder.php
use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    public function run()
    {
        Reservation::truncate();
        Reservation::create([
            'user_id' => 5, // Assuming this is the ID of the first user
            'evenement_id' => 1, // Assuming this is the ID of the first evenement
            'statut' => 'acceptee',
        ]);

        Reservation::create([
            'user_id' => 5, // Assuming this is the ID of the first user
            'evenement_id' => 2, // Assuming this is the ID of the second association
            'statut' => 'declinee',
        ]);
    }
}
