<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'address_id',
        'job_title_id'
    ];

    public function project(){
        return $this->hasMany(Project::class);
    }

//    public function address(){
//        return $this->hasOne(Address::class);
//    }
}
