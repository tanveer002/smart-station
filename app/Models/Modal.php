<?php

namespace App\Models;

use App\Models\Device;
use App\Models\Issues;
use App\Models\Series;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Modal extends Model
{
    protected $guarded = [];

    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id', 'id');
    }

    public function series()
    {
        return $this->belongsTo(Series::class, 'series_id', 'id');
    }

    public function issues()
    {
        return $this->hasMany(AllIssueImage::class, 'model_id');
    }
}
