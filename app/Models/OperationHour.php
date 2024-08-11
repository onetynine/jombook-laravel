<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'monday_open', 'monday_start', 'monday_end',
        'tuesday_open', 'tuesday_start', 'tuesday_end',
        'wednesday_open', 'wednesday_start', 'wednesday_end',
        'thursday_open', 'thursday_start', 'thursday_end',
        'friday_open', 'friday_start', 'friday_end',
        'saturday_open', 'saturday_start', 'saturday_end',
        'sunday_open', 'sunday_start', 'sunday_end',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
