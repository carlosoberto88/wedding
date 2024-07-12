<?php

namespace App\Console\Commands;

use App\Libraries\Twilio;
use App\Models\Guest;
use Illuminate\Console\Command;

class SendConfirmationReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-confirmation-reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Confirmation Reminder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $twilio = new Twilio();
        $guests = Guest::where('status','pending')->get();
        dd($guests->count());
        Guest::where('status','pending')->cursor()->each(function ($guest) use($twilio) {

            $message = "¡Hola! Recuerden confirmar su asistencia a nuestra boda antes del 15 de agosto. Si no confirman, asumiremos que no pueden venir y cederemos su lugar. ¡Gracias!";

            $twilio->sendSms($guest->phone, $message);
        });
    }
}
