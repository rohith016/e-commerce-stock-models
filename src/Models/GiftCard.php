<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GiftCard extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'initial_amount',
        'balance_amount',
        'expired_at',
        'status',
    ];
    /**
     * Relationship between GiftCard and GiftCardUsage
     * 
     * An GiftCard can have multiple GiftCardUsage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items(): HasMany
    {
        return $this->hasMany(GiftCardUsage::class, 'gift_card_id');
    }
}