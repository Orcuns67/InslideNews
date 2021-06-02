<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slide extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function course() {
        return $this->belongsToMany(Course::class);
    }

    // soft delete routine
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}