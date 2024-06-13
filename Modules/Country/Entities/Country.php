<?php

namespace Modules\Country\Entities;

use App\Models\BaseModel;

class Country extends BaseModel
{
    protected $guarded = [];

    protected $table = 'countries';

    public function Regions()
    {
        return $this->hasMany(Region::class);
    }
}
