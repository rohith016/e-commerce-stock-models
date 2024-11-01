<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class ReviewResponse extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'review_id',
        'user_id',
        'response_body'
    ];

    // relationship between review_response and review
    public function review(){
        return $this->belongsTo(Review::class);
    }


    // relationship between review_response and user
    public function user(){
        return $this->belongsTo(User::class);
    }
}