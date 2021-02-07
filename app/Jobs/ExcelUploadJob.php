<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use App\Imports\ExcelImport;
use Excel; 
use DB;

class ExcelUploadJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $filenametostore;

    public function __construct($filenametostore)
    {
        $this->filenametostore = $filenametostore;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $file_path     = \Storage::disk('ExcelUpload')->path($this->filenametostore);
        \Excel::import(new ExcelImport, $file_path);
    }
}
