<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class asal extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'asal_makanan',
        'belahan_negara',
    ];

    

    public function tenant(): HasMany
    {
        return $this->HasMany(asal::class);
    }
}
