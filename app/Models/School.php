<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'shortcut',
        'municipality_code'
    ];

    public function employee()
    {
        return $this->hasOne('App\Models\UserEmployee', 'school_id');
    } 

    public function municipality()
    {
        return $this->belongsTo('App\Models\LocationMunicipality', 'municipality_code', 'code');
    }
}
