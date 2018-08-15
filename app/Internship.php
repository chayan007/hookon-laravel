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

    public function student()
    {
      $student=$this->hasMany('App\Student');
      return $student; //will return all student in an internship
    }
    public function category()
    {
      $category = $this->hasOne('App\Category');
      return $category; //create category and location model... "Category" and "Model"
    }
}
