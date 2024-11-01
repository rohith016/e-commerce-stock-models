<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'address_line_1',
        'address_line_2',
        'address_line_3',
        'city',
        'postal_code',
        'country',
        'is_default',
    ];

    // relation ship between Address and User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}