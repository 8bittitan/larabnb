<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Listing extends Model
{
    use HasFactory;
    use HasUlids;
    use Searchable;

    public function toSearchableArray(): array
    {
        $array = $this->toArray();

        return $array;
    }

    protected $guarded = [];

    protected $casts = [
        'has_wifi' => 'boolean',
        'has_pool' => 'boolean',
        'has_pets_allowed' => 'boolean',
        'has_wheelchair_accessible' => 'boolean',
        'has_smoking_allowed' => 'boolean',
        'has_self_check_in' => 'boolean',
        'has_office' => 'boolean',
        'has_lakeview' => 'boolean',
        'has_kitchen' => 'boolean',
        'has_beach_access' => 'boolean',
        'has_free_parking' => 'boolean',
        'has_hot_tub' => 'boolean',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(ListingImage::class);
    }

    public function rooms(): HasMany
    {
        return $this->hasMany(ListingRoom::class);
    }
}
