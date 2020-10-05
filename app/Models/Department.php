<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
      'office_id',
      'name',
      'parent_department_id',
      'lead_employee_id',
      'address_id',
    ];

    public function address(){
        return $this->belongsTo(Address::class);
        /* TO DO: add return $this->hasMany(Department::class); to the Address Model */
    }

    public function office(){
      return $this->belongsTo(Office::class);
  }

}
