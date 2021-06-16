<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class Profile extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'profile';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Sace name and mail to file';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $username = $this->ask('username');
        $mail = $this->ask('mail');

        $this->info($username.'   '.$mail);


    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
