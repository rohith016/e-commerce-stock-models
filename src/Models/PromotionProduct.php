<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class PromotionProduct extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'promotion_id',
        'product_id'
    ];

    // relationship between promotion product and promotion
    public function promotion(){
        return $this->belongsTo(Promotion::class);
    }


    // relationship between promotion product and product
    public function product(){
        return $this->belongsTo(Product::class);
    }
}