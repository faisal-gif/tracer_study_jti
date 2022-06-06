<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\biodata;
use App\kirimForm;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;
use Twilio\Rest\Client;
use App\Channels\WhatsAppMessage;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\CronTes::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
      
        
        $body = "Hello, welcome to codelapan.com.";

      
        $schedule->call(function  () {
            $bio=biodata::where('status','subscribe')->get();
            $link=kirimForm::all()->first();
            $sid    = "AC6f5a79e42795a97142536a0f1b3cfb0c";
            $token  = "057296a3219f9f3a6c9b88c91de42127";
            $wa_from= "+14155238886";
            $twilio = new Client($sid, $token);
            $l=(string) $link->link;
            foreach ($bio as $b ) {
               
                $details = [
                    'title' => 'Kepada Yth. Alumni JTI Polinema',
                    'body' => '
                    Mengingatkan untuk mengisi kuisioner tracer study pada tautan dibawah sistem.
                    Partisipasi anda akan sangat berharga bagi berkembangnya JTI Polinema.
                    Terima Kasih, Admin.',
                    'link' => $link->link,
                    'linkPerusahaan' => $link->linkPerusahaan,
                    'nama' => $b->nama
                ];               
                $wa="Mengingatkan kepada {$b->nama} untuk mengisi kuisioner tracer study pada tautan dibawah sistem. Partisipasi anda akan sangat berharga bagi berkembangnya JTI Polinema. Terima Kasih, Admin. : http://google.com/a";
                $twilio->messages->create("whatsapp:+62895389118844",["from" => "whatsapp:$wa_from" ,"body" =>$wa]);
                Mail::to($b->email)->send(new MyMail($details));
            }
        })->everyMinute();
        
        $schedule->call(function  () {
            $bio=biodata::where('status','subscribe')->get();
            $link=kirimForm::all()->first();
            $sid    = "AC6f5a79e42795a97142536a0f1b3cfb0c";
            $token  = "057296a3219f9f3a6c9b88c91de42127";
            $wa_from= "+14155238886";
            $twilio = new Client($sid, $token);
            $l=(string) $link->link;
            foreach ($bio as $b ) {
               
                $details = [
                    'title' => 'Kepada Yth. Alumni JTI Polinema',
                    'body' => '
                    Mengingatkan untuk mengisi kuisioner tracer study pada tautan dibawah sistem.
                    Partisipasi anda akan sangat berharga bagi berkembangnya JTI Polinema.
                    Terima Kasih, Admin.',
                    'link' => $link->link,
                    'linkPerusahaan' => $link->linkPerusahaan,
                    'nama' => $b->nama
                ];               
                $wa="Mengingatkan kepada {$b->nama} untuk mengisi kuisioner tracer study pada tautan dibawah sistem. Partisipasi anda akan sangat berharga bagi berkembangnya JTI Polinema. Terima Kasih, Admin. : http://google.com/a";
                $twilio->messages->create("whatsapp:+62895389118844",["from" => "whatsapp:$wa_from" ,"body" =>$wa]);
                Mail::to($b->email)->send(new MyMail($details));
            }
        })->everyMinute();
                
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
}
