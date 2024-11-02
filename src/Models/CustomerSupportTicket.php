<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CustomerSupportTicket extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'subject',
        'description',
        'status', // 0 - open, 1 - closed, 2 - pending
    ];
    /**
     * Relationship between CustomerSupportTicket and CustomerSupportTicketResponse
     * 
     * An CustomerSupportTicket can have multiple CustomerSupportTicketResponse
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items(): HasMany
    {
        return $this->hasMany(CustomerSupportTicketResponse::class, 'ticket_id');
    }
    /**
     * Relationship between CustomerSupportTicket and CustomerSupportTicketResponse
     * 
     * An CustomerSupportTicket can have multiple CustomerSupportTicketResponse
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}