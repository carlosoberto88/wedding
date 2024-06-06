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

            $message = "Hola {$guest->first_name}! Tu codigo de confirmacion es {$guest->code}. Por favor ingresa a la siguiente URL para confirmar tu asistencia: https://elsidenuestravida.com/#rsvp";

            $twilio->sendSms($guest->phone, $message);
        });
    }
}
