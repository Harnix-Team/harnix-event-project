<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CodePromo extends Model
{
    protected $fillable = ['code', 'ticket_id']; // Ajoutez d'autres colonnes selon vos besoins

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
