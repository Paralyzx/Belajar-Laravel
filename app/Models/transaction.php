<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
 public function transaction(){
    return $this->BelongsTo(User::class, 'user_id');
 }  

 public function court(){
    return $this->BelongsTo(court::class, 'court_id');
 }
}
