<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class Supplier extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone_numer',
        'email',
        'address_id',
    ];

    // relationship between supplier and address
    public function address(){
        return $this->belongsTo(Address::class);
    }
}