<?php

namespace Modules\Media\Entities;

use App\Models\BaseModel;

class Media extends BaseModel
{
    protected $guarded = [];

    protected $table = 'media';

    public function Gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}
