<?php

namespace App\Console\Commands;

use App\Models\Extra;
use App\Models\Guest;
use Illuminate\Console\Command;

class DeleteGuests extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-guests';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Extra::truncate();
        Guest::truncate();
    }
}
