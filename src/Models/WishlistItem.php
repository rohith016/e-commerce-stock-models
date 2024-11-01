<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class WishlistItem extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'wishlist_id',
        'product_id',
    ];

    // relationship with wishlist item and wishlist
    public function wishlist(){
        return $this->belongsTo(Wishlist::class);
    }

    // relationship with wishlist item and product
    public function product(){
        return $this->belongsTo(Product::class);
    }
}