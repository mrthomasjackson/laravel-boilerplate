<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'role'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public static function getAllAsArray()
    {
        $array = array();
        foreach (self::all() as $value){
            $array[$value->id] = $value->role;
        }
        return $array;
    }
}
