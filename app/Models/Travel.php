<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'thumb', 'departure_date', 'return_date'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function stops(){
        return $this->hasMany(Stop::class);
    }
}
