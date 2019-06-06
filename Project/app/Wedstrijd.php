<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wedstrijd extends Model
{
    protected $table = 'wedstrijden';
    protected $primaryKey = 'WedstrijdID';
    protected $fillable = ['TeamUit','TeamThuis','Hal','Tijd','WedstrijdDatum', 'TeamThuisScore', 'TeamUitScore', 'Klasse', 'TeamThuisScore', 'TeamÚitScore'];
    public $timestamps = false;
}