<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wedstrijd extends Model
{
    protected $table = 'wedstrijden';
    protected $primaryKey = 'WedstrijdID';
    protected $fillable = ['TeamUit', 'TeamThuis', 'Hal', 'Tijd', 'WedstrijdDatum', 'Klasse', 'TeamThuisScore', 'TeamUitScore'];
    public $timestamps = false;
}