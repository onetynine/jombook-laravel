<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'branch_id',
        'photo',
        'name',
        'type',
        'description',
        'price',
    ];

    public function scopeOfMerchant($query, User $user)
{
    return $query->whereHas('branch.merchant', function (Builder $query) use ($user) {
        $query->where('user_id', $user->id);
    });
}

    // Eloquent Relationship
    public function merchant(): BelongsTo
    {
        return $this->belongsTo(Merchant::class);
    }
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }
    public function booking(): BelongsToMany
    {
        return $this->belongsToMany(Booking::class);
    }
}
