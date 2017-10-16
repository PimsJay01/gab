<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Backpack\CRUD\CrudTrait;

class BaseModel extends Model
{
    use CrudTrait, SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    protected function generateSlugFromValue($value)
    {
        $slug = str_slug($value);
        if($this->isSlugExist($slug)) {
            $i = 2;
            while($this->isSlugExist($slug . '-' . $i)) {
                $i++;
            }
            $slug .= '-' . $i;
        }
        return $slug;
    }

    private function isSlugExist($slug)
    {
        $whereQuery = [['slug', '=', $slug], ['id', '<>', $this->getKey()]];
        return BaseModel::where($whereQuery)->exists();
    }

    protected function extractExtensionFromURL($value)
    {
        return $this->extractExtensionFromPath(parse_url($value)['path']);
    }

    protected function extractExtensionFromPath($value)
    {
        // setlocale(LC_ALL,'en_US.UTF-8');
        return pathinfo($value, PATHINFO_EXTENSION);
    }
}
