<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title','body'];


    public function test()
    {
        $a = 1;
    }

    public function test1()
    {
        $a = 1;
    }
    
}





