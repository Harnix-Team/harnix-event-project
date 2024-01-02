<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['user_id', 'name','category_id', 'description','tags', 'place','date_begin', 'img','date_end','agency']; // Ajoutez d'autres colonnes selon vos besoins

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function eventCategory()
    {
        return $this->belongsTo(EventCategory::class);
    }
}
