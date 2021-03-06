<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['name', 'description', 'user_id'];
    protected $table = 'galleries';

    public function images() {
    	return $this->hasMany(Image::class, 'gallery_id');
    }

    public function user() {
    	return $this->belongsTo(User::class);
    }
}
