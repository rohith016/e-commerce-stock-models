<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class OrderItem extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price'
    ];


    // relationship between order item and order
    public function order(){
        return $this->belongsTo(Order::class);
    }

    // relationship between order item and product
    public function product(){
        return $this->belongsTo(Product::class);
    }
}