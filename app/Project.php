<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

 	protected $guarded = [];//Esta proteccion se usa siempre y cuando no se use (request()->all())

    public function getRouteKeyName()
    {
        return 'url';
    }
}
