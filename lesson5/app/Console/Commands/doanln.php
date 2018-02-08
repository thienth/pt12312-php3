<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
class doanln extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doanln:email {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gui email tum lum';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $email = $this->argument('email');
        $msg = 'test send email by command'
;        Mail::send('emails.welcome', compact('msg'), function ($message) use ($email) {

          $message->from('thienth32@gmail.com', 'Learning Laravel');

          $message->to($email)->subject('Learning Laravel test email');

      });
        $this->info('send email success!');
    }
}
