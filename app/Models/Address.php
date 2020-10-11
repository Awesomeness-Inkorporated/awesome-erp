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

    public function department() {
        return $this->hasOne(Department::class);
    }

    public function employee() {
        return $this->hasOne(Employee::class);
    }

    public function employee_emergency_contact() {
        return $this->hasOne(Employee::class, 'emergency_contact_id');
    }

    public function office() {
        return $this->hasOne(Office::class);
    }

    public function contact() {
        return $this->hasOne(Contact::class);
    }
}
