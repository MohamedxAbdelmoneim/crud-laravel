<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    protected $fillable =['name', 'desc', 'img'];

    public function getImgAttribute($value)
    {
        // if($value == null)
        // {
        //     return 'http://google.com' ;
        // }
        
    }
}
