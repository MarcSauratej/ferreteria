<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable= ['nom','quantitat','preu','id_proveidor'];

}
