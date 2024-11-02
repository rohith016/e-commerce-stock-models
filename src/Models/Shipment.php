<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shipment extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'order_id',
        'tracking_number',
        'ship_carrier_id',
        'status',
        'shipping_date',
        'delivery_date',
    ];

    // relationship between shipment and order
    public function order(){
        return $this->belongsTo(Order::class);
    }


    // relationship between shipment and ship carrier
    public function ship_carrier(){
        return $this->belongsTo(ShipCarrier::class, 'ship_carrier_id');
    }
}