<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class court extends Model
{
   public function type()
   {
    return $this->belongsTo(court_type::class, 'court_type_id');
   }
}
