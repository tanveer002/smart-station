<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllIssueImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function model()
    {
        return $this->belongsTo(Modal::class, 'model_id');
    }
}
