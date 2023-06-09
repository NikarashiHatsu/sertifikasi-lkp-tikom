<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSchemaRequest;
use App\Http\Requests\UpdateSchemaRequest;
use App\Models\Schema;

class SchemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(auth()->user()->role == 'user', 403);

        return view('dashboard.master.skema.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(auth()->user()->role == 'user', 403);

        return view('dashboard.master.skema.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchemaRequest $request)
    {
        abort_if(auth()->user()->role == 'user', 403);

        $data = $request->validated();

        try {
            Schema::create($data);
        } catch (\Throwable $th) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $th->getMessage())
                ->withInput();
        }

        return redirect()
            ->back()
            ->with('success', 'Berhasil menyimpan data.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schema $schema)
    {
        abort_if(auth()->user()->role == 'user', 403);

        return view('dashboard.master.skema.edit', [
            'schema' => $schema,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchemaRequest $request, Schema $schema)
    {
        abort_if(auth()->user()->role == 'user', 403);

        $data = $request->validated();

        try {
            $schema->update($data);
        } catch (\Throwable $th) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan saat memperbarui data: ' . $th->getMessage())
                ->withInput();
        }

        return redirect()
            ->back()
            ->with('success', 'Berhasil memperbarui data.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schema $schema)
    {
        abort_if(auth()->user()->role == 'user', 403);

        try {
            $schema->delete();
        } catch (\Throwable $th) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan saat menghapus data: ' . $th->getMessage())
                ->withInput();
        }

        return redirect()
            ->back()
            ->with('success', 'Berhasil menghapus data.');
    }
}
