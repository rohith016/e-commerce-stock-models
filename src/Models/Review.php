<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    /**
     * Relationship between Review and ReviewResponse
     * 
     * An Review can have multiple ReviewResponse
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function values(): HasMany
    {
        return $this->hasMany(ReviewResponse::class);
    }

    // relationship between review and product
    public function product(){
        return $this->belongsTo(Product::class);
    }


    // relationship between review and user
    public function user(){
        return $this->belongsTo(User::class);
    }
}