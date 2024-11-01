<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class Review extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'user_id',
        'rating',
        'title',
        'body',
    ];

    // relationship between review and product
    public function product(){
        return $this->belongsTo(Product::class);
    }


    // relationship between review and user
    public function user(){
        return $this->belongsTo(User::class);
    }
}