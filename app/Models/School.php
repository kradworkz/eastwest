<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'shortcut'
    ];

    public function employee()
    {
        return $this->hasOne('App\Models\UserEmployee', 'school_id');
    } 
}
