<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Backpack\CRUD\CrudTrait;

class CourtInfo extends Model
{
    use CrudTrait, SoftDeletes;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'court_infos';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id', 'court_type_id'];
    protected $fillable = ['name'];
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

    public function getFullAddressAttribute($value)
    {
        return $this->address()->first()->getFullAddressAttribute($value);
    }

    // public function getTypeAndNameAttribute($value)
    // {
    //     return $this->courtType()->first()->title . ' ' . $this->name;
    // }

    public function getNameAndTypeAttribute($value)
    {
        return $this->name . ' (' . $this->courtType()->first()->title . ')';
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
