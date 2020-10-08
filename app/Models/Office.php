<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address_id',
        'primary_employee_id',
    ];
    
    public function address(){
        return $this->belongsTo(Address::class);
    }

    public function department(){
        return $this->hasMany(Office::class);
    }
}
