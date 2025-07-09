<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;
    protected $table = 'papers';
    protected $guarded = ['id'];

    public function session()
    {
        return $this->belongsTo(Session::class, 'session_id');
    }
}
