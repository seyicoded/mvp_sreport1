<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function(){
            echo 'reach #00';
            // remember yo change this if it's not nigeria that's timezone
            date_default_timezone_set('Africa/Lagos');
            // echo date_default_timezone_get();
            // echo date('Y-m-d H:i:s');

            $this::day_checker();

        })->everyMinute();

        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    public static function day_checker(){
        $list = DB::select('SELECT * FROM subscription_linker WHERE status = ?;', [2]);
        foreach ($list as $dt) {
            // check if days days is equals to duration
            $day_count = intval($dt->day_count);
            $i_duration = intval($dt->i_duration);
            $g_amount = intval($dt->g_amount);
            $total = intval($dt->i_amount);
            $daily_rate = (floatval($dt->i_rate) / floatval($dt->i_duration));
            $daily_amount = floatval(($daily_rate * $total) / 100);

            echo 'reach #01';
            if( ($i_duration) <= ($day_count) ){
                DB::insert('UPDATE subscription_linker SET status = 3 WHERE sl_id = ?', [$dt->sl_id]);
                continue;
            }
            echo 'reach #02';

            $last_date_gain = date('Y-m-d', strtotime($dt->last_date_gain));
            $today_date = date("Y-m-d", strtotime('today'));
            // get day difference
            $daysdiff = Kernel::dateDifference($last_date_gain, $today_date);
            echo $daysdiff;

            for ($i=0; $i < $daysdiff; $i++) {
                if( ($i_duration) <= ($day_count) ){
                    DB::insert('UPDATE subscription_linker SET status = 3 WHERE sl_id = ?', [$dt->sl_id]);
                    continue;
                }

                $g_amount+=$daily_amount;
                $day_count++;
            }
            $today_date = date("Y-M-d", strtotime('today'));
            DB::insert('UPDATE subscription_linker SET g_amount = ?, day_count = ?, last_date_gain = ? WHERE sl_id = ?', [$g_amount, $day_count, $today_date, $dt->sl_id]);
            echo 'reached';
        }
    }

    public static function dateDifference($start_date, $end_date){
        // calulating the difference in timestamps
        $diff = strtotime($start_date) - strtotime($end_date);

        // 1 day = 24 hours
        // 24 * 60 * 60 = 86400 seconds
        return ceil(abs($diff / 86400));
    }
}
