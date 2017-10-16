<?php

namespace App\Models;

class Court extends BaseModel
{
    protected $table = 'courts';
    protected $fillable = ['court_info_id', 'season_id'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function courtInfo()
	{
		return $this->hasOne('App\Models\CourtInfo', 'id', 'court_info_id');
	}

	public function season()
	{
		return $this->hasOne('App\Models\Season', 'id', 'season_id');
	}

	public function courtSchedule()
	{
		return $this->hasMany('App\Models\CourtSchedule');
	}

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
