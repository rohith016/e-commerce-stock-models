<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class ProductAttributeAssignment extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'attribute_value_id',
        'assigned_at', // date when attribute was assigned to product
    ];

    // relationship between product and attribute
    public function product(){
        return $this->belongsTo(Product::class);
    }

    // relationship between attribute and value
    public function attributeValue(){
        return $this->belongsTo(ProductAttribute::class);
    }
}