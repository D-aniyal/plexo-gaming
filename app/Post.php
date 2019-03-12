<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table name
    protected $table = 'posts';

    //Primary key
    public $primarykey = 'id';

    //timestemps
    public $timestemps = true;
}
