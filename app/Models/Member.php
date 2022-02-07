<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = "members";
    protected $fillable = ["id","member_id","name","monthYear"];
    public $timestamps = false;
    use HasFactory;
}
