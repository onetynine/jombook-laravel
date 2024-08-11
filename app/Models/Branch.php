<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Branch extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'merchant_id',
        'photo',
        'banner',
        'name',
        'address',
        'category',
        'halal_status',
        'summary',
        'description',
        'operation_time',
    ];

    // Eloquent Relationship
    public function merchant(): BelongsTo
    {
        return $this->belongsTo(Merchant::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
