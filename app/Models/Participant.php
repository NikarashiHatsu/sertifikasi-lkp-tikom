<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Participant extends Model
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
            $model->user_id = auth()->id();
        });
    }

    /**
     * A BelongsTo relation to \App\Models\Schema.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schema(): BelongsTo
    {
        return $this->belongsTo(Schema::class, 'kode_skema', 'kode');
    }

    /** @var array<string> $fillable */
    protected $fillable = [
        'user_id',
        'kode_skema',
        'nama_peserta',
        'jenis_kelamin',
        'alamat',
        'no_hp',
    ];
}
