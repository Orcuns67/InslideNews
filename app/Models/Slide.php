<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Project;

class Slide extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function project() {
        return $this->belongsToMany(Project::class);
    }

    // soft delete routine
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}