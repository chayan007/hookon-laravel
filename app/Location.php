<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'location_name',
  ];
}
