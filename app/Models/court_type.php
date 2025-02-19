<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class court_type extends Model
{
  public function type(){
    return $this->hasMany(court::class);
  }
}
