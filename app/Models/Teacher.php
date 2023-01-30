<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $fillable = [
        'name',
        'surname',
        'phone',
        'email',
        'office_address',
        'office_number'
    ];

    public function courses(){

        //  Colleghiamo piu corsi a piu insegnanti
        return $this->belongsToMany('App\Models\Teacher');
    }

}
