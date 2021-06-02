<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Slide;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function slide() {
        return $this->belongsToMany(Slide::class);
    }

    // soft delete routine
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}