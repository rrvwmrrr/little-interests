<?php

namespace Rrvwmrrr\Interests\Traits;

use Rrvwmrrr\Interests\Interest;

trait HasInterests {
    public function interests()
    {
        return $this->morphMany(Interest::class, 'interested');
    }

    public function registerInterest(mixed $interesting) {
        $this->interests()->updateOrCreate([
            'interesting_id' => $interesting->id,
            'interesting_type' => get_class($interesting),
        ]);
    }
}
