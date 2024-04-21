<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $table = 'informations';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsToMany(User::class, 'Authors', 'id_information', 'id_user')
        ->withPivot('type', 'date_time');
    }

    public function subtitles()
    {
        return $this->hasMany(Subtitle::class, 'id_information');
    }
}