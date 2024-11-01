<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class LoyaltyPoint extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'points',
        'earned_at',
        'expired_at',
    ];

    // relationship between loyalty_point and user
    public function user(){
        return $this->belongsTo(User::class);
    }
}