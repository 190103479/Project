<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function storeImage($image) {
        $this->image()->updateOrCreate([
           'postImage' => $image
        ]);
    }

    public function getImage() {
        return asset('storage/'.$this->image['postImage']);
    }


    public function image(){
        return $this->hasOne(PostImage::class);
    }
}
