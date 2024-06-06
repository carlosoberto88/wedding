<?php

namespace App\Console\Commands;

use App\Libraries\Twilio;
use App\Models\Guest;
use Illuminate\Console\Command;

class SendInviteCode extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-invite-code';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends invite code to each guest';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $twilio = new Twilio();
        Guest::where('status','new')->cursor()->each(function ($guest) use($twilio) {
            $guest->update([
                'status' => 'pending'
            ]);

            $message = "Hola {$guest->first_name} Tu codigo de confirmacion es {$guest->code} por favor ingresa a https://elsidenuestravida.com/#rsvp y se parte de nuestra celebracion";

            $twilio->sendSms($guest->phone, $message);
        });
    }
}
