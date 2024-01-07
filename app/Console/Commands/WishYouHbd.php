<?php

namespace App\Console\Commands;

use App\Models\Notification;
use App\Models\User;
use Database\Seeders\UserSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;


class WishYouHbd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:wish-you-hbd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envoyer les souhaits d\'anniversaire';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        dd('handle executed');
        // Utilisateurs qui célèbrent leur anniversaire
        $hbdUsers = DB::table('users')
            ->whereMonth(DB::raw('DATE(birth_year)'), now()->format('m'))
            ->whereDay(DB::raw('DATE(birth_year)'), now()->format('d'))
            ->get();

        // Envoyer des messages
        $numberOfWishesSent = 0;

        foreach ($hbdUsers as $hbdUser) {
            // Envoi de notification
            $this->createNotification($hbdUser->id, $hbdUser->name);
            $numberOfWishesSent++;
        }

        $this->info("Les souhaits d'anniversaire ont été envoyés à $numberOfWishesSent utilisateur(s) !");
    }

    
    private function createNotification($id, $name)
    {
        $notification = Notification::create([

            'user_id' => $id,
            'title' => "Joyeux anniversaire $name",
            'content' => "Cher $name,\n\nJoyeux anniversaire ! 🎉🎂 Que cette journée spéciale soit remplie de bonheur, d'amour et de moments mémorables. Que cette nouvelle année de votre vie vous apporte tout ce que vous désirez et plus encore.\n\nCordialement,\n config('app.name', 'Ticketche')",
            'referTo' => '/notification',
            
        ]);
    }
}

