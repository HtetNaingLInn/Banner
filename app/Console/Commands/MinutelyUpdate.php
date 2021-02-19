<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Banner;
use Illuminate\Console\Command;

class MinutelyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Banner Image Status';

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

            Banner::where('to','<', Carbon::now())->update([
                'from'=>null,
                'to'=>null,
                'status'=>'0'
            ]);

    }
}
