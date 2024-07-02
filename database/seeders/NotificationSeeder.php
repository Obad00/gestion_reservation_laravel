<?php
namespace Database\Seeders;

// database/seeders/NotificationSeeder.php
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Notification;

class NotificationSeeder extends Seeder
{
    public function run()
    {
        // Notification::truncate();
        Notification::create([
            'id' => Str::uuid(),
            'type' => 'App\Notifications\ReservationStatus',
            'notifiable_type' => 'App\Models\User',
            'notifiable_id' => 1, // Assuming this is the ID of the first user
            'data' => json_encode(['message' => 'Your reservation has been accepted']),
            'read_at' => null,
            'reservation_id' => 1, // Assuming this is the ID of the first reservation
        ]);

        Notification::create([
            'id' => Str::uuid(),
            'type' => 'App\Notifications\ReservationStatus',
            'notifiable_type' => 'App\Models\User',
            'notifiable_id' => 1, // Assuming this is the ID of the first user
            'data' => json_encode(['message' => 'Your reservation has been declined']),
            'read_at' => null,
            'reservation_id' => 2, // Assuming this is the ID of the second reservation
        ]);
    }
}
