<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductBundleItem extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'bundle_id',
        'product_id',
        'quantity'
    ];

    // relationship between bundle and item
    public function bundle(){
        return $this->belongsTo(ProductBundle::class, 'bundle_id');
    }


    // relationship between bundle and product
    public function product(){
        return $this->belongsTo(Product::class);
    }
}