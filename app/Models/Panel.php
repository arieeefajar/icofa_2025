<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
    use HasFactory;
    protected $table = 'panels';
    protected $guarded = ['id'];
    protected $casts = [
        'moderators' => 'array',
    ];


    public function sessions()
    {
        return $this->hasMany(Session::class, 'panel_id');
    }
}
