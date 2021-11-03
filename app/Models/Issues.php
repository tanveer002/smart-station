<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issues extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function modal()
    {
       return $this->belongsTo(Modal::class, 'model_id', 'id');
    }

}
