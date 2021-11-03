<?php

namespace App\Service\Excel\Export;

use App\Models\AllIssueImage;
use App\Models\Modal;
use App\Models\Device;
use App\Models\Issues;
use App\Models\Series;
use App\Service\Excel\Export\AbstractExportService;


class DeviceIssuesExport extends AbstractExportService
{


    private $devices;
    private $startLine = 2;


    public function handle()
    {
        $this->prepareExcelSheet();

        return $this->download();
    }



    private function prepareExcelSheet()
    {
        
        $this->devices();
        // $this->modals();
        // $this->series();
        // $this->issues();  
    }

    private function devices()
    {
        $this->setBold('A1',1500);
        $this->setCellValue('A1', 'Sr#');
        $this->setTextWrap('A1'); 
        $this->setColumnWidth('A',15);

        $this->setBold('B1',1500);
        $this->setCellValue('B1', 'Brand');
        $this->setTextWrap('B1'); 
        $this->setColumnWidth('B',15);
        
        $this->setBold('C1',1500);
        $this->setCellValue('C1', 'Series');
        $this->setTextWrap('C1');
        $this->setColumnWidth('c',20);
        
        $this->setBold('D1',1500);
        $this->setCellValue('D1', 'Models');
        $this->setTextWrap('D1');
        $this->setColumnWidth('D',15);
        
        $this->setBold('E1',1500);
        $this->setCellValue('E1', 'Issues');
        $this->setTextWrap('E1');
        $this->setColumnWidth('E',15);
        
        $this->setBold('F1',1500);
        $this->setCellValue('F1', 'Issues Description');
        $this->setTextWrap('F1');
        $this->setColumnWidth('F',15);

        $this->setBold('G1',1500);
        $this->setCellValue('G1', 'Price');
        $this->setTextWrap('G1');
        $this->setColumnWidth('G',15);

        $i=1;
        $currentLine = $this->startLine;
        $issues = AllIssueImage::query()->with('model.series.device')->get();
       
        foreach ($issues as $issue){
            $this->setCellValue('A'.$currentLine, $i);
            
            //dd($issue->model->ModelName);
            $this->setCellValue('E'.$currentLine, $issue->issue_name);
            $this->setCellValue('F'.$currentLine, $issue->issue_description);
            $this->setCellValue('G'.$currentLine, $issue->issue_price);
            $this->setCellValue('B'.$currentLine, $issue->model->series->device->DeviceName);
            $this->setCellValue('C'.$currentLine, $issue->model->series->SeriesName);
            $this->setCellValue('D'.$currentLine, $issue->model->ModelName);
            $i++;
            $currentLine++;
        }

    }

    

   

   
}
