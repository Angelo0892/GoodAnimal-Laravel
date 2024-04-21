<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtitle extends Model
{
    use HasFactory;

    protected $table = 'subtitles';

    protected $guarded = [];

    public function information()
    {
        return $this->belongsTo(Information::class, 'id_information');
    }

    
}
