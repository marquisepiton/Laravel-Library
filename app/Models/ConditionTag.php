<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConditionTag extends Model
{
    use HasFactory;
    protected $table = 'conditionTags';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
  
  
  protected $fillable = [
      
      'tag',
      
    ];
}
