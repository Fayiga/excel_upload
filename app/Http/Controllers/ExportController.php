<?php

namespace App\Http\Controllers;
use App\StaffDetails;
use App\Jobs\ExcelUploadJob;
use Excel; 
use DB;
use Response;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function index()
    {
    	// $users = factory(StaffDetails::class, 100000)->create();
    	return view('excel_export');
    }

    public function fileUploadPost(Request $request)
    {
    	if ($request->hasFile('excel')) {
            $filenamewithextension = $request->file('excel')->getClientOriginalName();
             $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
             $extension = $request->file('excel')->getClientOriginalExtension();
             $filenametostore = Str::slug($filename).time().'.'.$extension;
            $saveFile = $request->file('excel')->storeAs('public/ExcelUpload', $filenametostore);
        }
    	ExcelUploadJob::dispatch($filenametostore);
	    return view('excel_export');
    }

    public function download()
    {
        $file="./template/sample_template.xlsx";
        return Response::download($file);
    }
}
