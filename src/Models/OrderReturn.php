<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderReturn extends Model
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
        'reason',
        'status',
        'requested_at',
        'resolved_at',
    ];


    // relationship between order return and order
    public function order(){
        return $this->belongsTo(Order::class);
    }


    // relationship between order return and product
    public function product(){
        return $this->belongsTo(Product::class);
    }
}