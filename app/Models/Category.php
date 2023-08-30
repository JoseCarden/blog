<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [

        'id','created_at','updated_at'

    ];

    //Relación de 1 a n (category-article)
    public function articles(){
        return $this->hasMany(Article::class);
    }
}
