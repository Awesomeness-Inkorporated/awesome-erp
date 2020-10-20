<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'project_id'
    ];

    public function tag_task() {
        return $this->hasMany(TagTask::class);
    }

    public function project() {
        return $this->belongsTo(Project::class);
    }

    public function tasks() {
        return $this->hasManyThrough(Task::class, TagTask::class);
    }

}
