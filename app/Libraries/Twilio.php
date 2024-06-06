<?php

namespace App\Libraries;

use App\Models\SmsLogs;
use Twilio\Rest\Client;

class Twilio
{
    protected $twilio;

    public function __construct()
    {
        $this->twilio = new Client(config('services.twilio.sid'), config('services.twilio.token'));
    }

    public function sendSms($to, $message)
    {
        $response = $this->twilio->messages->create(
            $to,
            [
                'from' => config('services.twilio.from'),
                'body' => $message,
            ]
        );

        $data_sent = [
            'to'   => $to,
            'from' => config('services.twilio.from'),
            'body' => $message
        ];

        $smsLog = new SmsLogs();
        $smsLog->data_sent = json_encode($data_sent);
        $smsLog->data_received = json_encode($response);
        $smsLog->save();

        return $response;
    }
}
