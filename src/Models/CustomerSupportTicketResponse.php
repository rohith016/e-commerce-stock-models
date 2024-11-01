<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class CustomerSupportTicketResponse extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ticket_id',
        'user_id',
        'response_text',
    ];

    // relationship between customer support ticket and user
    public function user(){
        return $this->belongsTo(User::class);
    }

    // relationship between customer support ticket and customer support ticket response
    public function ticket(){
        return $this->belongsTo(CustomerSupportTicket::class);
    }
}