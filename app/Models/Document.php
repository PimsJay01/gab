<?php

namespace App\Models;

class Document extends BaseModel
{
    protected $table = 'documents';
    protected $fillable = ['title', 'path', 'document_type_id'];
    protected $hidden = ['slug', 'extension'];
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

    public function documentType()
	{
		return $this->hasOne('App\Models\DocumentType', 'id', 'document_type_id');
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

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = $this->generateSlugFromValue($value);
    }

    public function setPathAttribute($value)
    {
        $this->attributes['path'] = $value;
        $this->attributes['extension'] = $this->extractExtensionFromPath($value);
    }
}
