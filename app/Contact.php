<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
        'civilite','nom', 'prenom', 'password','adresse1','adresse2','code_postal','ville','pays','numero','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
