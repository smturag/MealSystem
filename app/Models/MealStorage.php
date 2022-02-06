<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealStorage extends Model
{
    use HasFactory;
    protected $table = "meal_storage";
    protected $fillable = ["id","ym_id","Name","date","meal"];
    public $timestamps = false;
}
