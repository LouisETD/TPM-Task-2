<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tenant extends Model
{
    use HasFactory;

    protected $table ='tenant';

    protected $fillable = [ 
        'nama_tenant',
        'tipe_makanan',
        'asals_id',
        'tenant_image_path'
    ];

    public function asal(): BelongsTo
    {
        return $this->belongsTo(asal::class);
    }
}
