<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class ProductVariant extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'sku',
        'size',
        'color',
        'additional_price',
        'stock_quantity',
    ];

    // relationship between product variant and product
    public function product(){
        return $this->belongsTo(Product::class);
    }
}