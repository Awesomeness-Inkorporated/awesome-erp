<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag_id',
        'task_id'
    ];

    public function tags() {
        return $this->hasMany(Tag::class);
    }

    public function tasks() {
        return $this->hasMany(Task::class);
    }
}
