<?php

namespace App\Console\Commands;

use App\Models\Admin;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Throwable;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:admin';
    protected $retries = 3, $pass, $confirm_pass,$email,$tries=1;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an admin user from the command line';

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
     * @return int
     */
    public function handle()
    {
        $admin = new Admin();
        $admin->name = $this->ask('What is your name');
        $this->info("name set to {$admin->name}");
        $this->email();
        for($i = 1; $i < $this->retries; $i++)
        {
            if($this->emailExists()){
                $this->error('Hmmmm an admin user with that email address already exists... Try another one!');
                $this->email();
            }
            if(!$this->validateEmail()){
                $this->error('Not a valid email address. Try again..');
                $this->email();
            }
            $this->tries++;
        }
        $this->retryable();
        $admin->email = $this->email;
        $this->info("email address set to {$admin->email}");
        $this->password();
        $this->confirm_password();
        for($i = 1; $i < $this->retries; $i++)
        {

            if($this->pass !== $this->confirm_pass){
                $this->error('that didn\'t work... Try again.');
                $this->password();
                $this->confirm_password();
            }else{
                $this->info('password matched!');
                break;
            }
            $this->tries++;
        }
        $this->retryable();
        $admin->password = bcrypt($this->pass);
        $admin->super = ($this->choice('are you a super admin?',['no','yes'],"no")) == 'yes' ? 1 : 0 ;

        $this->newLine(3);
        $this->line("------ All Set. Creating Admin-----");

        try{
            $admin->save();
            $this->info('Admin Created Successfully');
            $this->info("open http://".admin_url()." to start your administrative work 😄");
        }catch(Throwable $e){
            Log::error($e);
            $this->error('Oops! An error occured while creating Admin');
        }
        $this->newLine(3);
        return 0;
    }

    private function password(){
        $this->pass = $this->secret('please enter your password');
        $this->info('password set.');
    }
    private function confirm_password()
    {
        $this->confirm_pass = $this->secret('Please confirm your password');
        $this->info('confirm password set.');
        $this->line('validating password match...');
        return;
    }

    private function email()
    {
        $this->email = $this->ask('What is your email address');
    }
    private function validateEmail()
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }
    private function emailExists()
    {
        return Admin::where('email',$this->email)->exists();
    }

    private function retryable()
    {
        if($this->tries >= $this->retries)
        {
            $this->newLine(3);
            $this->error("Retries finished... Ending program");
            die();
        }else{
            $this->tries = 1;
        }
    }

}
