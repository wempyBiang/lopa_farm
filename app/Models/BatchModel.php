<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BatchModel extends Model
{
    use HasFactory;

    protected $table = 'batch';

    public function jenis(): BelongsTo {
        return $this->belongsTo(JenisModel::class);
    }
}
