<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $table = 'sessions';
    protected $guarded = ['id'];


    public function panel()
    {
        return $this->belongsTo(Panel::class, 'panel_id');
    }

    public function papers()
    {
        return $this->hasMany(Paper::class, 'session_id');
    }
}
