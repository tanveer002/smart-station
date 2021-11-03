<?php

namespace App\Service\Excel\Import;

use App\Models\Modal;
use App\Models\Device;
use App\Models\Issues;
use App\Models\Series;
use App\Models\AllIssueImage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Service\Excel\AbstractImportService;
use Illuminate\Support\Facades\Schema;

class DeviceIssues extends AbstractImportService
{
    protected $deviceId;


    public function __construct(UploadedFile $file)
    {

        $filename = $this->importFile($file);

        parent::__construct(
            $this->getStoragePath($filename)
        );
    }

    public function handle()
    {
        return $this->deviceIssues();
    }
///read data from excel file. To avoid error enter data carefully. example file can be downloaded from view

    public function deviceIssues()
    {
        Schema::disableForeignKeyConstraints();
        Device::truncate();
        Series::truncate();

        AllIssueImage::truncate();
        Modal::truncate();
        
        
       
        foreach (range(2, $this->noRows) as $row) {

            $deviceName = $this->getValue('B' . $row);
            $seriesName = $this->getValue('C' . $row);
            $modelName = $this->getValue('D' . $row);
            $issuesName = $this->getValue('E' . $row);
            $description = $this->getValue('F' . $row);
            $price = $this->getValue('G' . $row);
          
            $device = Device::where('DeviceName', $deviceName)->first();
            if (!$device) {
                $device = Device::create([
                    'DeviceName' => $deviceName,
                    'DeviceDescription' => ""
                ]);
            }

            $series = Series::where('SeriesName', $seriesName)->where('device_id',$device->id)->first();
            if (!$series) {
                $series = Series::create([
                    'device_id' => $device->id,
                    'SeriesName' => $seriesName,
                    'image' => "",
                    'SeriesDescription' => ""
                ]);
            }
            
            $model = Modal::where('ModelName', $modelName)->where('device_id',$device->id)->where('series_id',$series->id)->first();
            if (!$model) {
                $model = Modal::create([
                    'device_id' => $device->id,
                    'series_id' => $series->id,
                    'ModelName' => $modelName,
                    'ModelDescription' => "",
                    'image' => ""
                ]);
            }

            $issue = AllIssueImage::where('issue_name', $issuesName)->where('model_id',$model->id)->first();
            if (!$issue) {
                $issue = AllIssueImage::create([
                    'model_id' => $model->id,
                    'issue_name' => $issuesName,
                    'issue_description' => $description,
                    'issue_price' => $price
                ]);
            }
            
        }

        Schema::enableForeignKeyConstraints();
    }
}
