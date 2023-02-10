<?php

namespace app\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    public function tags()
    {
        return $this::belongsToMany(Tag::class);
    }

}