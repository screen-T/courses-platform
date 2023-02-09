<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable=["slug" ,"short_description","description","title","image_path"];
    public $timestamps = false;
    use HasFactory;
}
