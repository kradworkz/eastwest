<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'firstname', 
        'lastname', 
        'middlename',
        'suffix',
        'gender',
        'mobile',
        'email',
        'school_id'
    ];

    public function school()
    {
        return $this->belongsTo('App\Models\School', 'school_id', 'id');
    }

    public function getFirstnameAttribute($value){
        return ucwords(strtolower($value));
    }

    public function getLastnameAttribute($value){
        return ucwords(strtolower($value));
    }

    public function getMiddlenameAttribute($value){
        return ucwords(strtolower($value));
    }
}
