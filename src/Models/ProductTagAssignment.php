<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class ProductTagAssignment extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'tag_id',
        'assigned_at',
    ];

    // relationship between product tag assignment and product
    public function product(){
        return $this->belongsTo(Product::class);
    }

    // relationship between product tag assignment and tag
    public function tag(){
        return $this->belongsTo(ProductTag::class);
    }
}