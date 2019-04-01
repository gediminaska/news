<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'stories';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('comments', function ($builder) {
            $builder->with('comments');
        });
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
