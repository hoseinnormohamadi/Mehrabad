<?php

namespace App\Jobs;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Hash;

class ImportUsers implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $FirstName = '';
    protected $LastName = '';
    protected $CodeMeli = '';
    public function __construct($Data)
    {
        $this->FirstName = $Data[0]['FirstName'];
        $this->LastName = $Data[0]['LastName'];
        $this->CodeMeli = $Data[0]['CodeMeli'];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        User::create([
            'FirstName' => $this->FirstName,
            'LastName' => $this->LastName,
            'CodeMeli' => $this->CodeMeli,
            'password' => Hash::make($this->CodeMeli),
            'AccountStatus' => 'Active',
            'Image' => '/assets/img/default-avatar.png'
        ]);
    }
}
