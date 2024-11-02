<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GiftCardUsage extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'gift_card_id',
        'order_id',
        'used_amount',
        'used_at',
    ];


    // relationship between gift_card_usage and gift_card
    public function gift_card(){
        return $this->belongsTo(GiftCard::class, 'gift_card_id');
    }

    // relationship between gift_card_usage and order
    public function order(){
        return $this->belongsTo(Order::class);
    }
}