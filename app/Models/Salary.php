<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salary extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with =['employee'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
