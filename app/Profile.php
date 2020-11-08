<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : 'profile/AZD0mRnIPHdXl9ym4cA2LMDhFC2YAcySYItzVy6t.png';
        return '/storage/'. $imagePath;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
