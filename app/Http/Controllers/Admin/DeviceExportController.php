<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Service\Excel\Export\DeviceIssuesExport;


class DeviceExportController extends Controller
{
    public function deviceExport(Device $device)
    {
        $csvExport = new DeviceIssuesExport;
      
        return $csvExport->handle();
        
    }
}
