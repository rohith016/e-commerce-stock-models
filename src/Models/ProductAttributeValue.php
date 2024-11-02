<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductAttributeValue extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'attribute_id',
        'value', // cotton, polyester, nylon, 100X100 CM etc.
    ];

    // relationship between attribute and value
    public function attribute(){
        return $this->belongsTo(ProductAttribute::class, 'attribute_id');
    }
    /**
     * Relationship between ProductAttributeValue and ProductAttributeAssignment
     * 
     * An ProductAttributeValue can have multiple ProductAttributeAssignment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function values(): HasMany
    {
        return $this->hasMany(ProductAttributeAssignment::class, 'attribute_value_id');
    }
}