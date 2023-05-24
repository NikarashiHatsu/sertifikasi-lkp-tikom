<?php

namespace App\Http\Livewire\DataTables;

use App\Models\Participant;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ParticipantDataTable extends LivewireDatatable
{
    public function builder()
    {
        return Participant::query()
            ->leftJoin('schemas', 'schemas.kode', '=', 'participants.kode_skema')
            ->with('schema');
    }

    public function columns()
    {
        return [
            Column::index($this),

            Column::callback(['id'], function($id) {
                    return view('dashboard.transaction.participant.opsi', ['id' => $id]);
                })
                ->label('Opsi'),

            Column::name('schema.nama')
                ->label('Nama Skema')
                ->searchable(),

            Column::name('kode_skema')
                ->searchable(),

            Column::name('nama_peserta')
                ->searchable(),

            Column::name('jenis_kelamin')
                ->searchable(),

            Column::name('alamat')
                ->searchable(),

            Column::name('no_hp')
                ->searchable(),
        ];
    }
}
