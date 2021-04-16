<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
  
  protected $table = 'genres';
  protected $primaryKey = 'id';
  public $incrementing = true;
  public $timestamps = true;
  
  
  
  
  protected $fillable = [
        'name',
    
    
    ];
  
  public function books(){
    return $this->hasMany(Book::class);
  }
    
   
}
