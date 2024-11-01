<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class SupplierProduct extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'supplier_id',
        'cost_price',
        'lead_time',
    ];

    // relationship between supplier product and product
    public function product(){
        return $this->belongsTo(Product::class);
    }

    // relationship between supplier product and supplier
    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
}