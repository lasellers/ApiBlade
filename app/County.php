<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class County extends Model
{
    public $timestamps = false;

    protected $casts = [
        'state' => 'string',
    ];

    // append accessors
    protected $appends = [
        'dropdown_name',
    ];

    public static function dropdown()
    {
        //return $this->select('county', 'state')->orderBy('state', 'asc');
        return County::select(DB::raw('CONCAT(county, \',\', state) AS dropdown'),'id')->orderBy('state','asc')->orderBy('county','asc')->pluck('dropdown','id');
    }

    public function state($state)
    {
        return $this->where('state', $state);
    }

    /**
     * Mutator to always format county correctly on creation
     * @param $value
     */
    public function setCountyAttribute($value)
    {
        $this->attributes['county'] = ucwords(strtolower($value));
    }

    /**
     * Mutator to always format state_full_name correctly on creation
     * @param $value
     */
    public function setStateFullNameAttribute($value)
    {
        $this->attributes['state_full_name'] = ucwords(strtolower($value));
    }

    /**
     * Mutator to always format state correctly on creation
     * @param $value
     */
    public function setStateAttribute($value)
    {
        $this->attributes['state'] = strtoupper($value);
    }

    /**
     * computed attribute for dropdowns
     * @return string
     */
    public function getDropdownNameAttribute()
    {
        return $this->county . ' ' . $this->state;
    }

}
