<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Schema extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Boot the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function(self $model) {
            $increment = self::max('id') + 1;
            $model->kode = 'SKM-' . Str::padLeft($increment, 3, '0');
        });
    }

    /**
     * A HasMany relationship to \App\Models\Partiipant.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function participants(): HasMany
    {
        return $this->hasMany(Participant::class, 'kode_skema', 'kode');
    }

    /** @var array<string> $fillable */
    protected $fillable = [
        'kode',
        'nama',
        'jenis',
        'jumlah_unit',
    ];
}
