<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
   protected $table = 'books';
   protected $primaryKey = 'id';
   public $incrementing = true;
   public $timestamps = true;
  
  
  
  protected $fillable = [
      
      'name',
      'authorID',
      'genre',
      'condition',
      'releaseDate',
      
    ];
  
  public function author(){
    return $this->belongsTo(Author::class);
  }
  public function genre(){
    return $this->belongsTo(Genre::class);
  }
  public function condition(){
    return $this->belongsTo(Condition::class);
  }
}
