<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartItem extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity',
    ];

    // relation ship between CartItem and Product
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    // relation ship between CartItem and Cart
    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }
}