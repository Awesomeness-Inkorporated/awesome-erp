<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'department_id',
        'address_id',
        'user_id',
        'job_title_id',
        'emergency_contact_id',
        'room_id'
    ];

    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function address() {
        return $this->belongsTo(Address::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function job_title() {
        return $this->belongsTo(JobTitle::class);
    }

    public function emergency_contact() {
        return $this->belongsTo(Address::class, 'emergency_contact_id');
    }

    public function room() {
        return $this->belongsTo(Room::class);
    }

    public function leads_department() {
        return $this->hasOne(Department::class, 'lead_employee_id');
    }

    public function leads_projects() {
        return $this->hasMany(Project::class, 'lead_employee_id');
    }

}
