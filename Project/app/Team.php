<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $primaryKey = 'TeamID';
    public $timestamps = false;
    protected $fillable = ['TeamNaam', 'Klasse'];
}
