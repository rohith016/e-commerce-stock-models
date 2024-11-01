<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class ProductNotification extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'product_id',
        'notification_date'
    ];

    // relationship between product notification and user
    public function user(){
        return $this->belongsTo(User::class);
    }

    // relationship between product notification and product
    public function product(){
        return $this->belongsTo(Product::class);
    }
}