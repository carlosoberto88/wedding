<?php

namespace App\Console\Commands;

use App\Models\Guest;
use Illuminate\Console\Command;
use Spatie\SimpleExcel\SimpleExcelReader;

class UploadCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:upload-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Uploads csv guests file to database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $rows is an instance of Illuminate\Support\LazyCollection
        $rows = SimpleExcelReader::create(public_path('invitados-test2.csv'))->getRows();

        $rows->each(function (array $rowProperties) {
            Guest::create([
                'first_name' => $rowProperties['first_name'],
                'last_name'  => $rowProperties['last_name'],
                'phone'      => '+' . $rowProperties['phone'],
                'code'       => self::generateUniqueInviteCode(),
                'status'     => 'new',
                'extras'     => null,
                'created_at' => now(),
            ]);
        });
    }

    public static function generateUniqueInviteCode()
    {
        do {
            $inviteCode = strval(rand(10000, 99999));
        } while (Guest::where('invite_code', $inviteCode)->exists());

        return $inviteCode;
    }
}
