<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publish_paper extends Model
{
    use HasFactory;
    protected $table = 'publish_papers';
    protected $fillable = ['link_upload', 'link_download'];
}
