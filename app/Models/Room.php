<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'identifier',
        'room_type_id',
    ];

    public function room_type() {
        return $this->belongsTo(Room_Type::class);
    }

    public function employees() {
        return $this->hasMany(Employee::class);
    }

}
