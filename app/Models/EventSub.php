<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventSub extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','event_id'
    ];

    public function product(){
        return $this->belongsTo(Event::class);
    }
}
