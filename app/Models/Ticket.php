<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['category','event_id','name','description','price','totalNumber']; // Ajoutez d'autres colonnes selon vos besoins

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'buys', 'ticket_id', 'customer_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function codePromo()
    {
        return $this->hasOne(CodePromo::class);
    }

    public function ticketsCategory()
    {
        return $this->belongsTo(TicketsCategory::class);
    }
}
