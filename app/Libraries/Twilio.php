<?php

namespace App\Libraries;

use App\Models\SmsLogs;
use Twilio\Rest\Client;

class Twilio
{
    protected $twilio;

    public function __construct()
    {
        $this->twilio = new Client(env('TWILIO_SID'), env('TWILIO_AUTH_TOKEN'));
    }

    public function sendSms($to, $message)
    {
        $response = $this->twilio->messages->create(
            $to,
            [
                'from' => env('TWILIO_PHONE_NUMBER'),
                'body' => $message,
            ]
        );

        $data_sent = [
            'to'   => env('ADMIN_PHONE_NUMBER'),
            'from' => env('TWILIO_PHONE_NUMBER'),
            'body' => $message
        ];

        $smsLog = new SmsLogs();
        $smsLog->data_sent = json_encode($data_sent);
        $smsLog->data_received = json_encode($response);
        $smsLog->save();

        return $response;
    }
}
