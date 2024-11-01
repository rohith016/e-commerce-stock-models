<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AabandonedCartItem extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'abandoned_cart_id',
        'product_id',
        'quantity',
        'price_at_abandonment',
    ];

    // relation ship between AabandonedCartItem and Product
    public function product(): BelongsTo 
    {
        return $this->belongsTo(Product::class);
    }

    // relation ship between AabandonedCartItem and AbandonedCart
    public function abandonedCart(): BelongsTo
    {
        return $this->belongsTo(AbandonedCart::class);
    }
}