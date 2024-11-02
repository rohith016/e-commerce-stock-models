<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubscriptionUser extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'subscription_id',
        'start_date',
        'end_date', 
        'status', // active, cancelled, etc.
    ];

    // relationship between subscription user and user
    public function user(){
        return $this->belongsTo(User::class);
    }

    // relationship between subscription user and subscription
    public function subscription(){
        return $this->belongsTo(Subscription::class);
    }
}