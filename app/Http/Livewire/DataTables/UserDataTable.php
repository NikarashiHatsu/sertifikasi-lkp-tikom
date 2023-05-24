<?php

namespace App\Http\Livewire\DataTables;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UserDataTable extends LivewireDatatable
{
    public function builder()
    {
        return User::query();
    }

    public function columns()
    {
        return [
            Column::index($this),

            Column::callback(['id'], function($id) {
                    return view('dashboard.master.user.opsi', ['id' => $id]);
                })
                ->label('Opsi'),

            Column::name('name')
                ->label('Nama')
                ->searchable(),

            Column::name('email')
                ->label('Email')
                ->searchable(),

            Column::name('gender')
                ->label('Jenis Kelamin')
                ->searchable(),

            Column::name('address')
                ->label('Alamat')
                ->searchable(),

            Column::name('phone')
                ->label('No. HP')
                ->searchable(),

            Column::name('role')
                ->label('Peran')
                ->searchable(),
        ];
    }
}
