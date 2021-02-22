<?php

namespace Rrvwmrrr\Interests\Traits;

use Rrvwmrrr\Interests\Interest;

trait IsInteresting {
    public function interests()
    {
        return $this->hasMany(Interest::class);
    }
}
