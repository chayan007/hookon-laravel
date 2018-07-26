<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Internship extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company','profile', 'email','logo_url','url', 'phone', 'skills', 'desc', 'about','location','duration','stipend','start',
    ];
}
