<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'customer_name',
        'contact',
        'date_of_birth',
        'remark',
        'status',
    ];


    // Eloquent Relationship

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
