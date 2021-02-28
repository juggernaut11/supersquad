<?php

namespace Framework\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;


    public function user()
   {
       return $this->belongsTo('Framework\User');
   }

   public function competition()
   {
       return $this->hasOne('Framework\Competition');
   }

   public function team()
   {
       return $this->hasOne('Framework\Team');
   }

   public function leaderboard()
   {
       return $this->hasOne('Framework\Leaderboard');
   }

}
