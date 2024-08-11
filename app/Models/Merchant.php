<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Merchant extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'company_name',
        'registration_number',
        'registration_document',
        'business_type',
        'in_charge_name',
        'in_charge_nric',
        'in_charge_designation',
        'in_charge_contact',
    ];
    
    // Eloquent Relationship
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function branch()
    {
        return $this->hasMany(Branch::class);
    }
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

}
