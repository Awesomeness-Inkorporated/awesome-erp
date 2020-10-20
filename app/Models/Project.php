<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status_id',
        'lead_employee_id',
        'contact_id',
        'category_id'
    ];

    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function lead_employee() {
        return $this->belongsTo(Employee::class, "lead_employee_id");
    }

    public function contact() {
        return $this->belongsTo(Contact::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function tag() {
        return $this->hasMany(Tag::class);
    }
}
