<?php

namespace App\Models;

class CourtInfo extends BaseModel
{
    protected $table = 'court_infos';
    protected $fillable = ['name', 'address_id', 'court_type_id'];
    protected $hidden = ['slug'];
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

    public function court()
	{
		return $this->belongsTo('App\Models\Court');
	}

	public function address()
	{
		return $this->hasOne('App\Models\Address', 'id', 'address_id');
	}

	public function courtType()
	{
		return $this->hasOne('App\Models\CourtType', 'id', 'court_type_id');
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

    public function getCourtAttribute($value)
    {
        return $this->getNameAndTypeAttribute($value) . ' - ' .
                $this->getFullAddressAttribute($value);
    }

    public function getFullAddressAttribute($value)
    {
        return $this->address()->first()->getFullAddressAttribute($value);
    }

    public function getNameAndTypeAttribute($value)
    {
        return $this->name . ' (' . $this->courtType()->first()->title . ')';
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = $this->generateSlugFromValue($value);
    }
}
