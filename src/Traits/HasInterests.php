<?php

namespace Rrvwmrrr\Interests\Traits;

use Rrvwmrrr\Interests\Interest;

trait HasInterests {
    public function interests()
    {
        return $this->hasMany(Interest::class);
    }
}
