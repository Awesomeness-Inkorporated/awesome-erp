<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_name',
        'estate_name',
        'lat',
        'lng',
        'street',
        'line2',
        'city',
        'district',
        'state',
        'country',
        'zip',
        'phone',
        'email',
    ];
  
    public function department(){
        return $this->hasMany(Department::class);
    }
}
