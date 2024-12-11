<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    //

    protected $fillable = [
        "name",
        "tanggal",
        "hobi_id"
    ];

    public function hobi(): BelongsTo
    {
        return $this->belongsTo(Hobi::class);
    }
}
