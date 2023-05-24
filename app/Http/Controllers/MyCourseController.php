<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMyCourseRequest;
use App\Http\Requests\UpdateMyCourseRequest;
use App\Models\Participant;
use App\Models\Schema;

class MyCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.my-course.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.my-course.create', [
            'schemas' => Schema::with('participants')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMyCourseRequest $request)
    {
        $data = $request->validated();

        try {
            Participant::create(array_merge(
                $data,
                [
                    'user_id' => auth()->id(),
                    'nama_peserta' => auth()->user()->name,
                    'jenis_kelamin' => auth()->user()->gender,
                    'no_hp' => auth()->user()->phone,
                    'alamat' => auth()->user()->address,
                ]
            ));
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
     * Remove the specified resource from storage.
     */
    public function destroy(Schema $schema)
    {
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
