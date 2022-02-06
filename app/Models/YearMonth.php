<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearMonth extends Model
{
    protected $table = "yearmonth";
    protected $fillable = ["id","ym_id"];
    public $timestamps = false;
    use HasFactory;
}
