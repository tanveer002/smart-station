<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Http\Controllers\Controller;
use App\Models\AllIssueImage;
use App\Models\Device;
use App\Models\Modal;
use App\Models\Series;
use App\Service\Excel\Export\DeviceIssuesExport;
use Illuminate\Http\Request;
use App\Service\Excel\Import\DeviceIssues;

class UploadCsvController extends Controller
{
    public function index()
    {
        $issues = AllIssueImage::query()->with('model.series.device')->paginate(30);
        return view('Dashboard.uploadCsv.index', compact('issues'));
    }

    public function create()
    {
        return view('Dashboard.uploadCsv.uploadcsv');
    }
//Excel file store
    public function store(Request $request, Device $device)
    {
        try{
            $file = $request->file('csv_file');
            $importDevices = new DeviceIssues($file);
            $importIssues = $importDevices->handle();
            
            return redirect()->back()->with('success', 'CSV File Upload SuccessFully');

        }catch(Exception $exception){
            throw $exception;
        }

        
    }

    public function deviceExport(Device $device)
    {
        $csvExport = new DeviceIssuesExport();
        return $csvExport->handle();
        
    }
    
    
}
