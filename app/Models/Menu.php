<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table="menu";
    protected $fillable=["id","baslik","seflink","durum","created_at","updated_at"];
}
