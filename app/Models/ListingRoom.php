<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ListingRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'king_beds',
        'queen_beds',
        'full_beds',
        'twin_beds',
        'bunk_beds',
        'futons',
        'sofas',
        'listing_id',
    ];

    public function listing(): BelongsTo
    {
        return $this->belongsTo(Listing::class);
    }
}
