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
    }

    private function devices()
    {
        $this->setBold('A1',1500);
        $this->setCellValue('A1', 'Sr#');
        $this->setTextWrap('A1'); 
        $this->setColumnWidth('A',5);

        $this->setBold('B1',1500);
        $this->setCellValue('B1', 'Brand');
        $this->setTextWrap('B1'); 
        $this->setColumnWidth('B',10);
        
        $this->setBold('C1',1500);
        $this->setCellValue('C1', 'Series');
        $this->setTextWrap('C1');
        $this->setColumnWidth('C',10);

        $this->setBold('D1',1500);
        $this->setCellValue('D1', 'SeriesImg');
        $this->setTextWrap('D1');
        $this->setColumnWidth('D',10);
        
        
        $this->setBold('E1',1500);
        $this->setCellValue('E1', 'Models');
        $this->setTextWrap('E1');
        $this->setColumnWidth('E',30);

        $this->setBold('F1',1500);
        $this->setCellValue('F1', 'ModelImg');
        $this->setTextWrap('F1');
        $this->setColumnWidth('F',10);
        
        $this->setBold('G1',1500);
        $this->setCellValue('G1', 'Issues');
        $this->setTextWrap('G1');
        $this->setColumnWidth('G',15);
        
        $this->setBold('H1',1500);
        $this->setCellValue('H1', 'Issues Description');
        $this->setTextWrap('H1');
        $this->setColumnWidth('H',30);

        $this->setBold('I1',1500);
        $this->setCellValue('I1', 'Price');
        $this->setTextWrap('I1');
        $this->setColumnWidth('I',10);

        $i=1;
        $currentLine = $this->startLine;
        $issues = AllIssueImage::query()->with('model.series.device')->get();
       
        foreach ($issues as $issue){
            $this->setCellValue('A'.$currentLine, $i);
            
            //dd($issue->model->ModelName);
            $this->setCellValue('B'.$currentLine, $issue->model->series->device->DeviceName);
            $this->setCellValue('C'.$currentLine, $issue->model->series->SeriesName);
            $this->setCellValue('D'.$currentLine, $issue->model->series->image);
            $this->setCellValue('E'.$currentLine, $issue->model->ModelName);
            $this->setCellValue('F'.$currentLine, $issue->model->image);
            $this->setCellValue('G'.$currentLine, $issue->issue_name);
            $this->setCellValue('H'.$currentLine, $issue->issue_description);
            $this->setCellValue('I'.$currentLine, $issue->issue_price);
            
            $i++;
            $currentLine++;
        }

    }

}
