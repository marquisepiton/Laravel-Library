<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
   use HasFactory;
   protected $table = 'conditions';
   protected $primaryKey = 'id';
   public $incrementing = true;
   public $timestamps = true;
  
  
  
  protected $fillable = [
      
      'state',
      
    ];
    
}
