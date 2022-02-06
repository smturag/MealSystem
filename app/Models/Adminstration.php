<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminstration extends Model
{
    protected $table = "administrations";
    protected $fillable = ["id","userName","password","rePassword","mail"];
    public $timestamps = false;
    use HasFactory;
}
