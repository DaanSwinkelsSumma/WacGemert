<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wedstrijd extends Model
{
    // protected $fillable = ['title','start_date','end_date'];

    protected $table = 'wedstrijden';
    protected $primaryKey = 'WedstrijdID';
    protected $fillable = ['TeamUit','TeamThuis','Hal','Tijd','WedstrijdDatum', 'TeamThuisScore', 'TeamUitScore', 'Klasse'];
    public $timestamps = false;
}
