<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductAnalytic extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'visit_count',
        'added_to_cart_count',
        'purchased_count',
        'last_viewed_at',
    ];

    // relationship between product and analytic
    public function product(){
        return $this->belongsTo(Product::class);
    }
}