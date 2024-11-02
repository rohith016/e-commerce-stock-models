<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\hasOne;

class Order extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'order_status',
        'payment_status',
        'total_amount',
        'status'
    ];
    /**
     * Relationship between Order and User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Relationship between Order and OrderItem
     * 
     * An Order can have multiple OrderItems
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
    /**
     * Relationship between Order and CouponUsage
     * 
     * An Order can have CouponUsage
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function couponUsage(): HasOne
    {
        return $this->hasOne(CouponUsage::class);
    }
    /**
     * Relationship between Order and OrderReturn
     * 
     * An Order can have OrderReturn
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function orderReturn(): HasOne
    {
        return $this->hasOne(OrderReturn::class);
    }
    /**
     * Relationship between Order and Payment
     * 
     * An Order can have Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }
    /**
     * Relationship between Order and Refund
     * 
     * An Order can have Refund
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function refund(): HasOne
    {
        return $this->hasOne(Refund::class);
    }
    /**
     * Relationship between Order and Shipment
     * 
     * An Order can have Shipment
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function shipment(): HasOne
    {
        return $this->hasOne(Shipment::class);
    }
    
}