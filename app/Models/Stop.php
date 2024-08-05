<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'thumb', 'date', 'curiosity', 'note', 'vote'];

    public function travel(){
        return $this->belongsTo(Travel::class);
    }

    public function foods(){
        return $this->hasMany(Food::class);
    }
}
