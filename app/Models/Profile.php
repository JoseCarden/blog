<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [

        'id','created_at','updated_at'

    ];

    //Relación 1 a 1 inversa (profile-user)
    public function User(){
        return $this->belongsTo(User::class);
    }
}
