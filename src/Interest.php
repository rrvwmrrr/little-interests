<?php

namespace Rrvwmrrr\Interests;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $table = "interests";

    protected $dateFormat = 'Y-m-d H:i:s';

    protected $guarded = [];

    // public function auditable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    // {
    //     return $this->morphTo();
    // }

    // public function auditor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    // {
    //     return $this->belongsTo(Auditor::$auditorModel)->withDefault([
    //         'name' => 'Non auditable user',
    //     ]);
    // }
}
