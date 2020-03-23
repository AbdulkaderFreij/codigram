<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[];

    public function profileImage(){
        $imagePath=($this->image) ?  $this->image : '/profile/0VIz7gS1rt6o1PCukIYnLcnoCKi7Swia1kkzZrI5.png';
        return '/storage/' . $imagePath;
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
