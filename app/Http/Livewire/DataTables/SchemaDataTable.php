<?php

namespace App\Http\Livewire\DataTables;

use App\Models\Schema;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class SchemaDataTable extends LivewireDatatable
{
    public function builder()
    {
        return Schema::query()
            ->with('participants');
    }

    public function columns()
    {
        return [
            Column::index($this),

            Column::callback(['id'], function($id) {
                    return view('dashboard.master.skema.opsi', ['id' => $id]);
                })
                ->label('Opsi'),

            Column::name('kode')->searchable(),

            Column::name('nama')->searchable(),

            Column::name('jenis')->searchable(),

            Column::name('jumlah_unit')->searchable(),

            Column::name('participants.kode_skema:count')->searchable()
                ->label('Jumah Peserta'),
        ];
    }
}
