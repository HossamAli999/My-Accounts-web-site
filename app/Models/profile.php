<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    protected $fillable=[
        'token','name','Instagram','Phone','Snapchat','Whatsapp','user_id','facebook','linkedin','twitter','github','web1','web2','web3','web4','web5','web6'
    ];
}

