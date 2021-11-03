<?php 

namespace App\Service\Excel;

use Illuminate\Http\UploadedFile;
use PhpOffice\PhpSpreadsheet\IOFactory;

abstract class AbstractImportService
{
    protected $file;
    protected $fileReader;
    protected $spreadSheet; 
    protected $workSheet;
    protected $noRows;
    protected $noColumns;
    private $service;
    
    public function __construct($file)
    {
        $this->file = $file;
        $this->fileReader = IOFactory::createReaderForFile($file);
        $this->fileReader->setReadDataOnly(false);
        $this->fileReader->setLoadSheetsOnly(0);
        $this->spreadSheet = $this->fileReader->load($this->file);
        $this->workSheet = $this->spreadSheet->getSheet(0);
        $this->noRows = $this->spreadSheet->getSheet(0)->getHighestDataRow();
        $this->noColumns = $this->spreadSheet->getSheet(0)->getHighestDataColumn();

    }

    public function getDataAsArray()
    {
        return $this->workSheet->rangeToArray(
            'A1:'.$this->noColumns.$this->noRows,
            null,
            true,
            true,
            true
        );
    }

    public function getStoragePath($filename)
    {
        return storage_path("app/excels/rates/{$filename}");
    }

    abstract public function handle();

    public function importFile(UploadedFile $file)
    {
        $filename = md5(microtime()).'.'.$file->getClientOriginalExtension();
        $file->storeAs("excels/rates", $filename);
        return $filename;
    }

    public function getValue($cell)
    {
        return $this->workSheet->getCell($cell)->getCalculatedValue();
    }

}     
