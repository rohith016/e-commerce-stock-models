<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
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

    // relationship between order and user
    public function user(){
        return $this->belongsTo(User::class);
    }
}