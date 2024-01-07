<?php

use App\Models\Notification;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

// Artisan::command('inspire', function () {
//     $this->comment(Inspiring::quote());
// })->purpose('Display an inspiring quote');

Artisan::command('app:wish-you-hbd', function () {

    $hbdUsers = DB::table('users')
            ->whereMonth(DB::raw('DATE(birth_year)'), now()->format('m'))
            ->whereDay(DB::raw('DATE(birth_year)'), now()->format('d'))
            ->get();

        // Envoyer des messages
        $numberOfWishesSent = 0;

        foreach ($hbdUsers as $hbdUser) {
            // Envoi de notification
            $notification = Notification::create([

                'user_id' => $hbdUser->id,
                'title' => "Joyeux anniversaire $hbdUser->name",
                'content' => "Cher $hbdUser->name,\n\nJoyeux anniversaire ! 🎉🎂 Que cette journée spéciale soit remplie de bonheur, d'amour et de moments mémorables. Que cette nouvelle année de votre vie vous apporte tout ce que vous désirez et plus encore.\n\nCordialement,\n config('app.name', 'Ticketche')",
                'referTo' => '/notification',
                
            ]);
            $numberOfWishesSent++;
        }

        $this->info("Les souhaits d'anniversaire ont été envoyés à $numberOfWishesSent utilisateur(s) !");

    $this->comment('Les souhaits d\'anniversaire ont été envoyés !');
    
})->purpose('Send birthday wishes to users');
