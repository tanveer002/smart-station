<?php

namespace App\Models;

use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;

    const PATH = '/files/';

    protected $guarded = [];

    protected  $appends = [
        'fulpath'
    ];

     public function getStoragePath()
    {
        return self::PATH.$this->path;
    }

    public function getFullPathAttribute()
    {
        return $this->getPath();
    }

    public function getPath()
    {
        return route('media.get' , $this->path);
    }

    public function getRouteKeyName()
    {
        return 'path';
    }

    //delete

    public static function boot()
    {
        parent::boot();

        self::deleting(function($file){
            if(Storage::exists($file->getStoragePath())){
                Storage::delete($file->getStoragePath());
            }
        });
    }

    //upload

    public static function uploadFile(UploadedFile $file , bool $save=true) : File
    {
        $filename = md5(microtime()).'.'.$file->getClientOriginalExtension();
        $file->storeAs(file::PATH, $filename);
        $file->filename=$filename;

        $fileData = [
            'name' => $file->getClientOriginalName(),
            'size' => $file->getSize(),
            'type' => $file->getMimeType(),
            'path' => $file->filename
        ];

        if($save){
            return self::create($fileData);
        }
        return (new File($fileData));
    }
}
