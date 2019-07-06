<?php

namespace App\Console\Commands;

use App\Traits\PushMessage;
use Illuminate\Console\Command;

class pushMsg extends Command
{
    use PushMessage;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'msg';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'push message';

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
        $data = [
            'title'     => 'test',
            'content'   => 'just do it',
            'send_uuid' => 'winter',
            'accept_uuid' => 'a56f1d36-99ad-3cd6-8956-2e052f014b48',
            'flag' => 23
        ];
        $this->push($data);
    }
}
