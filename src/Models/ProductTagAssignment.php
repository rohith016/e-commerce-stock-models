<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'product_tag_id',
        'assigned_at',
    ];

    // relationship between product tag assignment and product
    public function product(){
        return $this->belongsTo(Product::class);
    }

    // relationship between product tag assignment and tag
    public function tag(){
        return $this->belongsTo(ProductTag::class, 'product_tag_id');
    }
}