<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class CouponUsage extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'coupon_id',
        'user_id',
        'order_id',
        'used_at'
    ];

    // relationship between coupon and coupon usage
    public function coupon(){
        return $this->belongsTo(Coupon::class);
    }

    // relationship between coupon usage and user
    public function user(){
        return $this->belongsTo(User::class);
    }

    // relationship between coupon usage and order
    public function order(){
        return $this->belongsTo(Order::class);
    }
}