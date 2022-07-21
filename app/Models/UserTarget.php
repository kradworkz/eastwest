<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTarget extends Model
{
    use HasFactory;

    protected $fillable = [
        'count', 'month', 'added_by'
    ];

    public function getMonthAttribute($value)
    {
        return date('M Y', strtotime($value));
    }

    public function engagements()
    {
        return $this->hasMany('App\Models\UserEngagement', 'target_id');
    } 
}
