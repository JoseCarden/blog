<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [

        'id','created_at','updated_at'

    ];

    //Relación de 1 a n inversa (article-user)
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación de 1 a n (article-comment)
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
