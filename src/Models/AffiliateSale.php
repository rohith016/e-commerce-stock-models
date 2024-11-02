<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AffiliateSale extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'affilate_partner_id',
        'order_id',
        'commission_amount',
        'earned_at',
    ];

    // relationship between affiliate sale and affiliate partner
    public function affiliatePartner(){
        return $this->belongsTo(AffiliatePartner::class, 'affilate_partner_id');
    }

    // relationship between affiliate sale and order
    public function order(){
        return $this->belongsTo(Order::class);
    }
}